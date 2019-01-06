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
}
