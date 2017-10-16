<?php
class Login extends CI_Controller {
    
    public function index() {
        $this->load->view('login/inc/header_view');
        $this->load->view('login/login_view');
        $this->load->view('login/inc/footer_view');
    }

}