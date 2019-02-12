<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Admin extends Admin_Controller {
	function __construct() {
		if(!$this->session->userdata('logged_in'))
		{
			redirect(ADMIN_LOGIN_PATH, 'refresh');exit;
		}
		$this->template->set_layout('admin/default');
		$this->load->model('Admin_dash_model');
		$this->load->model('Layers_model');
		$this->load->model('Dash_model');
		$this->load->dbforge();
		// $this->load->model('Dash_model');
		// $this->load->model('Map_model');
	}
	public function index()
	{
		# code...
	}
	public function add_layers(){

		 $this->body = array();
		$admin_type=$this->session->userdata('user_type');

		$this->body['admin']=$admin_type;

	    $this->template
                        ->enable_parser(FALSE)
                        ->build('layers_upload',$this->body);
	    //code
	    if(@$_POST["proj"]){
	      	$tble_name=$_GET['tbl_name'];
	      	$id=$_GET['id'];
	      	// $tble_name=strtolower(str_replace(" ","_",$_POST['f_name']));
	      	$UPLOAD_SCHEMA = $tble_name;
	      	//empty directory first
	      	$directory_temp = '/tmp/shp2pgsql_tmp/';
	      	foreach(glob($directory_temp.'*') as $v){
	        	foreach(scandir($v) as $file) {
	          		if ('.' === $file || '..' === $file) continue;
	          		//if (is_dir("$v/$file")) rmdir_recursive("$v/$file");
	          		//else
	          		unlink("$v/$file");
	        	}
	        	rmdir($v);
	      	}
	      	//Creando la carpeta temporal para descomprimir el archivo
	      	$tempdir=tempnam(sys_get_temp_dir()."/shp2pgsql_tmp/",'');
	      	if (file_exists($tempdir)) { unlink($tempdir); }
	      	mkdir($tempdir);
	      	if (!is_dir($tempdir)) {
	        	echo 'error when creating the temporary folder';exit;
	      	}
	      	//Descomprimiendo archivo
	      	$zip = new ZipArchive();
	      	$source_file = $_FILES["uploadedfile"]["tmp_name"];
	      	// open the zip file to extract
	      	if ($zip->open($source_file) !== true) {
	        	echo "Unable to unzip the file $source_file";
	       	 	exit;
	      	}
	      	// place in the temp folder
	      	if ($zip->extractTo($tempdir) !== true) {
	        	$zip->close();
	        	echo "The files could not be extracted to the folder $tempdir";
	        	exit;
	      	}
	      	$zip->close();
	      	//verificar si contiene los archivos basicos para leer shapefile: Shape (.shp),dBase (.dbf)
	      	$shapefile = glob($tempdir . "/*.shp");
	      	if(!$shapefile){
	        	echo "No .shp file found";
	        	exit;
	      	}
	      	if(count($shapefile) > 1){ //verificando que el archivo empaquetado no contenga mas de un shape.
	        	echo "The packaged file contains more than 1 shape.";
	        	exit;
	      	}
	      	$dbffile = substr($shapefile[0], 0, -3).'dbf';
	      	if (!(is_readable($dbffile) && is_file($dbffile))){
	        	echo "The .dbf file is missing";
	        	exit;
	      	}
	      	//leyendo el encabezado del archivo shapefile
	      	require_once(APPPATH."shpparser/shpparser.php");
	      	$shp = new shpParser();
	      	$shp->load($shapefile[0]);
	      	//verificando el sistema de proyeccion
	      	$bbox = $shp->headerInfo()["boundingBox"];
	      	$xc = $bbox["xmin"] + ($bbox["xmax"] - $bbox["xmin"]);
	      	$yc = $bbox["ymin"] + ($bbox["ymax"] - $bbox["ymin"]);
	      	$bboxProj = array();
	      	if($_POST["proj"] == 4326){
	        	$bboxProj = array("xmin" => -180, "ymin" => -90, "xmax" => 180, "ymax" => 90);
	      	} else {
	        	$bboxProj = array("xmin" => 166021.4431, "ymin" => 1116915.0440, "xmax" => 833978.5569, "ymax" => 10000000.0000);
	      	}
	      	if($bboxProj["xmin"] > $xc || $xc > $bboxProj["xmax"] || $bboxProj["ymin"] > $yc || $yc > $bboxProj["ymax"]){
	       	 	echo "The coordinates do not correspond to the reference projection system.";
	        	exit;
	      	}
	      	//Generando un nombre aleatorio para la nueva tabla de PostgreSQL.
	      	$bytes = openssl_random_pseudo_bytes(4, $cstrong);
	      	$hex   = str_shuffle("abcdefg").bin2hex($bytes);
	      	$tablename = "f".date('Ymd').($hex); //the name of a table in postgresql must start with carater, the letter f refers to 'feature'
	      	//creando el comando para generar el archivo SQL
	      	$command = "shp2pgsql -s ".$_POST["proj"]." -g the_geom -I -W \"latin1\" ".$shapefile[0]." ".$UPLOAD_SCHEMA." > ".$tempdir."/".$tablename.".sql";
	      	echo $command;
	      	//Ejecutando el comando
	      	//En windows : Previamente se debe adicionar la ruta del archivo de comando shp2pgsql.exe a la variable "Path" del entorno del sistema.
	      	exec($command,$out,$ret);
	      	//Ejecutando en la Geodatabase el archivo SQL
	      	//Se debe tener activa la extension de PHP para conectarse a postgresql
	      	$filename = $tempdir."/".$tablename.".sql";
	      	$handle = fopen($filename, "r");
	      	$queryy = fread($handle, filesize($filename));
	      	$query=$this->db->query($queryy);
	      	if (!$query) {
	        	echo "The table $tablename could not be created in the DB.";
	      	}else{
	        	$this->session->set_flashdata('msg','The table '.$UPLOAD_SCHEMA.' table was sucessfully created');
	        	$data=array(
	          		'category_table'=>$tble_name,
	        	);
		        $this->Layers_model->insert_layer($id,$data);
		        $id = array(
		          	'id' => array(
		            'type' => 'INT',
		            'constraint' => 5,
		            'unsigned' => TRUE,
		            'auto_increment' => TRUE
		          	),
		        );
		        $this->dbforge->add_key('id', TRUE);
		        $this->dbforge->add_column($tble_name,$id);
		        $fields=$this->db->list_fields($tble_name);
		        for($i=0;$i<sizeof($fields);$i++){
		          	//echo $fields[$i];
		          	$data_lang=array(
		            	'eng_lang'=>$fields[$i],
		            	'nepali_lang'=>$fields[$i],
		            	'tbl_name'=>$tble_name,
		            );
		          	$lang_insert=$this->Dash_model->insert_lang('tbl_lang',$data_lang);
		        }
	        	redirect(FOLDER_ADMIN.'/map/manage_column_control?tbl='.$tble_name);
	      	}
	    }//post end
    }
}
