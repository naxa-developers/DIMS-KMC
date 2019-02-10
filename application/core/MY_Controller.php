<?php

if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Base_Controller extends MX_Controller {
    /**

     * Stores the current user's details, if they've logged in.

     *

     * @var object

     */
    // protected $current_user = NULL;
    protected $data = array();

    //--------------------------------------------------------------------

    /**

     * Class constructor

     *

     */

    public function __construct() {

        parent::__construct();

        //session_regenerate_id();

        // Load Activity Model Since it's used everywhere.

        if ($this->input->get('redirect'))

            redirect($this->input->get('redirect'), 'refresh');

    }



    //end __construct()

    //--------------------------------------------------------------------

}

//end Base_Controller

//Home controller
class Home_Controller extends Base_Controller {
    protected $restricted_pages = array();
    public function __construct() {
        parent::__construct();
        //$this->load->helper('breadcrumb');
        $this->template->set_layout('frontend/default');
    }
    //end construct()
    /* to restrict pages view for logged in users only */
    public function _remap($method, $parms = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $parms);
        }
        show_404(); // page not found
    }
    //--------------------------------------------------------------------
}



//end Home_Controller

class Admin_Controller extends Base_Controller {
    //--------------------------------------------------------------------

    /**

     * Class constructor setup login restriction and load various libraries

     *

     */
    public function __construct() { 
        parent::__construct();

        //$this->load->helper('breadcrumb');

        $this->template->set_layout('admin/default');
        // if(!$this->session->userdata('logged_in'))
        // {
        //     redirect(ADMIN_LOGIN_PATH, 'refresh');exit;
        // }else{
        //     redirect(FOLDER_ADMIN . '/login', 'refresh'); 
        // }

    }
    //end construct() 
    //--------------------------------------------------------------------
}



//end Admin_Controller



/* End of file MY_Controller.php */

/* Location: ./application/core/MY_Controller.php */

