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
		$this->load->dbforge();
		$this->load->model('Dash_model');
		$this->load->model('Map_model');
		$this->load->model('Table_model');

	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->library('zip');
		$this->load->dbutil();
		$db_format=array('format'=>'zip','filename'=>'dimskmc.sql');
		$backup=& $this->dbutil->backup($db_format);
		$dbname='backup-on-'.date('Y-m-d').'zip';
		$save='kdkbkup/db_backup'.$dbname;
		write_file($save,$backup);
		force_download($dbname, $backup);
	}
}