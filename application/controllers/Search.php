<?php
class Search extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->global_data['active_link'] = 'Member';
    }

    public function index()
    {   
        $data=$this->input->post('search');
        $this->global_data['title'] = "Search Member";
        $this->global_data['result']=$this->Member_model->getSearchData($data);
        $this->load->view('login/inc/header_view',$this->global_data);
        $this->load->view('data/search_view');
    }
    
}