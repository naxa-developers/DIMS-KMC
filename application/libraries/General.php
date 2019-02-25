<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class General {
	/**

	 * CodeIgniter global

	 *

	 * @var string

	 **/

	protected $ci;
	/**

	 * account status ('not_activated', etc ...)

	 *

	 * @var string

	 **/
	protected $status;

	public $adjacencyList;

	public $adjacencyCheckboxlist;
	/**

	 * error message (uses lang file)

	 *

	 * @var string

	 **/

	protected $errors = array();
	public $members_data;
	public function __construct() {
		$this->ci = &get_instance();
		//define site settings info
		$this->referer = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "";
		$this->onpage = $_SERVER['REQUEST_URI'];
		$site_info = $this->get_site_settings_info();
		$cur_date = date('Y/m/d');
		// define('CURDATE_EN', $cur_date);
		define('SITE_NAME_EN', $site_info['site_name']);
		define('SITE_SLOGAN_EN', $site_info['site_logo']);
		define('SITE_TEXT_EN', $site_info['site_text']);
		define('COVER_POHOTO_EN', $site_info['cover_photo']);
		define('COVER_SMALL_EN', $site_info['cover_small']);
		define('FOOTER_BIG_EN', $site_info['footer_big']);
		define('FACEBOOK', $site_info['facebook']);
		define('TWITTER', $site_info['twitter']);
		define('GOOGLE', $site_info['google']);
		define('COPYRIGHT', $site_info['copyright']);
		define('COPY_TEXT', $site_info['copy_text']);
		define('SUBSCRIBE_BTN', $site_info['subscribe_btn']);
		define('COPY_DATE', $site_info['copy_date']);
		define('TWO_NAME', $site_info['2_name']);
		define('ONE_NAME', $site_info['1_name']);
		define('IMP_LINK', $site_info['imp_link']);
		define('EMAIL', $site_info['email']);
		define('SUBSCRIBE', $site_info['subscribe']);
		define('FOOTER_SMALL', $site_info['footer_small']);
		define('LINK_ONE', $site_info['1_link']);
		define('LINK_TWO', $site_info['2_link']);
		define('NAME_THREE', $site_info['3_name']);
		define('LINK_THREE', $site_info['3_link']);
		define('NAME_FOUR', $site_info['4_name']);
		define('LINK_FOUR', $site_info['4_link']);
		define('NAME_FIVE', $site_info['5_name']);
		define('LINK_FIVE', $site_info['5_link']);
		define('COVER_BIG', $site_info['cover_big']);
		define('FLOOD', $site_info['flood']);
		define('FIRE', $site_info['fire']);
		define('LANDSLIDE', $site_info['landslide']);
		define('LIGHTNING', $site_info['lightning']);
		define('ROAD', $site_info['road']);
		define('MORE', $site_info['more']);
		define('SEARCH_DATASET', $site_info['search_dataset']);
		define('SEARCH', $site_info['search']);
		define('CAT_ONE', $site_info['cat_1']);
		define('CAT_TWO', $site_info['cat_2']);
		define('CAT_THREE', $site_info['cat_3']);
		define('NAV_ONE', $site_info['nav_1']);
		define('NAV_TWO', $site_info['nav_2']);
		define('NAV_THREE', $site_info['nav_3']);
		define('NAV_FOUR', $site_info['nav_4']);
		define('NAV_FIVE', $site_info['nav_5']);
		define('NAV_SIX', $site_info['nav_6']);
		define('NAV_SEVEN', $site_info['nav_7']);
		define('DOWNLOAD', $site_info['download']);
		define('MAP_LAT', $site_info['map_lat']);
		define('MAP_LONG', $site_info['map_long']);
		define('MAP_ZOOM', $site_info['map_zoom']);
		define('GET_STARTED', $site_info['get_started']);
		define('MAP', $site_info['map']);
		define('DATA', $site_info['data']);
		define('GHATANA_BIB', $site_info['ghatana_bib']);
		define('APPLY', $site_info['apply']);
		define('PUBL_TYPE', $site_info['publ_type']);
		define('INCIDENT_DETAIL', "incident_detail");
		define('TOLLFREE_ONE', $site_info['tollfreenumone']);
		define('TOLLFREE_TWO', $site_info['tollfreenumtwo']);
		$homepage_info = $this->get_homepage_info();
		define('MUNPROFILE', $homepage_info['muncipaldatatitle']);
		define('PROFILEDESC', $homepage_info['muncipalprofileption']);
		define('INCIDENT', $homepage_info['incidenttitle']);
		define('INCIDENTDESC', $homepage_info['incidentdescription']);
		define('MUNTITLE', $homepage_info['muncipalprofile']);
		define('MUNTITLEDESC', $homepage_info['mun_prof_description']);
		define('DISASTITLE', $homepage_info['disastertitle']);
		define('DISASDESC', $homepage_info['disastertitledesc']);
		define('TERMINOLOGY', $homepage_info['terminology']);
		define('TERMINOLOGYDESC', $homepage_info['terminologydesc']);
		define('PUBTITLE', $homepage_info['pubmulttitle']);
		define('PUBTDESC', $homepage_info['pubmulttitledesc']);
		define('EMECONTACT', $homepage_info['econtact']);
		define('EMECONTDESC', $homepage_info['econtactdesc']);
		define('EMEMAT', $homepage_info['ematerials']);
		define('EMEMATDESC', $homepage_info['ematerialsdesc']);
		define('WHOTITLE', $homepage_info['whtitle']);
		define('WHOTDESC', $homepage_info['whdesc']);
		define('LABEL1', $homepage_info['label1']);
		define('LABEL2', $homepage_info['label2']);
		define('LABEL3', $homepage_info['label3']);
		define('LABEL4', $homepage_info['label4']);
		define('LABEL5', $homepage_info['label5']);
		define('LABEL6', $homepage_info['label6']);
		define('LABEL7', $homepage_info['label7']);
		define('LABEL8', $homepage_info['label8']);
		define('LABEL9', $homepage_info['label9']);
		define('LABEL10', $homepage_info['label10']);
		define('LARGETEXT', $homepage_info['largetext']);
		define('LARGESUMM', $homepage_info['largetextsummary']);
		define('INCTEXT', $homepage_info['incidentreporttext']);
	}
	public function get_homepage_info() {
		if($this->ci->session->userdata('Language')==NULL){
      		$this->ci->session->set_userdata('Language','nep');
    	}
    	$lang=$this->ci->session->userdata('Language');
    	if($lang== 'en')
    	{
    		$whr = '1';
    	}elseif($lang== 'nep'){
    		$whr = '2';
    	}
    	if ($whr) {
			$this->ci->db->where('id',$whr);
		}
		$query = $this->ci->db->get("homepagelabals");
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
		}
		$query->free_result();
		//echo $this->ci->db->last_query(); exit;
		return $data;
	}
	public function get_site_settings_info() {
		//pp($this->ci->session->userdata('Language'));
		if($this->ci->session->userdata('Language')==NULL){
      		$this->ci->session->set_userdata('Language','nep');
    	}
    	$lang=$this->ci->session->userdata('Language');// pp($lang);
    	if($lang== 'en')
    	{
    		$whr = '1';
    	}elseif($lang== 'nep'){
    		$whr = '2';
    	}
    	if ($whr) {
			$this->ci->db->where('id',$whr);
		}
		$query = $this->ci->db->get("site_setting");
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
		}
		$query->free_result();
		//echo $this->ci->db->last_query(); exit;
		return $data;
	}
	// return result
	public function get_tbl_data_result($select, $table = false, $where = false, $order = false, $order_by = 'ASC') {
		$this->ci->db->select($select);
		if ($where) {
			$this->ci->db->where($where, false);
		}
		if ($order) {
			$this->ci->db->order_by($order, $order_by);
		}
		$qry = $this->ci->db->get($table);
		 //echo $this->ci->db->last_query(); exit;
		if ($qry->num_rows() > 0) {
			return $qry->result_array();
		}
		return false;
	}
	// return all data row
	public function get_tbl_data_rows($select, $table = false, $where = false, $order = false, $order_by = 'ASC') {
		$this->ci->db->select($select);
		if ($where) {
			$this->ci->db->where($where, null, false);
		}
		if ($order) {
			$this->ci->db->order_by($order, $order_by);
		}
		$qry = $this->ci->db->get($table);
		//echo $this->ci->db->last_query(); exit;
		if ($qry->num_rows() > 0) {
			return $qry->num_rows();
		}
		return false;
	}
	public function get_count_table_rows($id = false, $fields = false, $table = false) {
		$qry = $this->ci->db->get_where($table, array($fields => $id));
		//echo $this->ci->db->last_query(); exit;
		if ($qry->num_rows() > 0) {
			return $qry->num_rows();
		}
		return 0;
	}
	public function hex_to_rgb($color,$opacity){
	    $split = str_split($color,2);
	    $r = hexdec(!empty($split[0])?$split[0]:'0');
	    $g = hexdec(!empty($split[1])?$split[1]:'0');
	    $b = hexdec(!empty($split[2])?$split[2]:'0');
	    $rgb= "rgba(" . $r . ", " . $g . ", " . $b . ", ". !empty($opacity)?$opacity:'' . ")";
    	return $rgb;
	}

	public function string_limit($string,$limit)
	{
		$name = (strlen($string) > $limit) ? substr($string, 0, $limit) . '...' : $string;

   	return $name;
	}
	public function hash_password($password, $salt) {
		return sha1($salt . sha1($salt . sha1($password)));
	}
	public function salt() {
		return substr(md5(uniqid(rand(), true)), 0, '10');
	}
}
