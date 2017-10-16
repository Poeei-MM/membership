<?php 
	/**
	* */
	class Editmember extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->global_data['active_link'] = 'Member';
       
    }

    public function index(){
        $id=$_GET['member_serial_no'];
        $this->global_data['title'] = "Update Member"; 
        $this->global_data['member'] = $this->Member_model->selectMember($id);
        $this->load->view('login/inc/header_view', $this->global_data);
        $this->load->view('data/editmember_view');
    }
}
 ?>