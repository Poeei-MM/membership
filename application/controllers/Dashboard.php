<?php
class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Member_model');
     
        $this->global_data['active_link'] = 'Dashboard';
    }
    public function index() {
        $this->global_data['title'] = "Dashboard"; 
        $this->global_data['data'] = $this->Member_model->getMemberList();
        $this->load->view('dashboard/dashboard_view', $this->global_data);
    }
}             