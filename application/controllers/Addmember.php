<?php 
	/**
	* */
	class Addmember extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Member_model');
            $this->global_data['active_link'] = 'Member';

        }
        public function index() {
            $this->global_data['title'] = "Add Member";
            $this->load->view('login/inc/header_view', $this->global_data);
            $this->load->view('data/addmember_view');
        }

        public function addMember(){
            $data=array(
                'member_name'=>$this->input->post('name'),
                'member_address'=>$this->input->post('address'),
                'member_phonenumber'=>$this->input->post('phone'),
                'member_email'=>$this->input->post('email'),
                'member_description'=>$this->input->post('description')
                );
             if($data != null){
                $result=$this->Member_model->add($data);
                if($result){
                        redirect('/dashboard','refresh');
                }
             }
             
        }
        
        public function updateMember()
        {       
                $id=$this->input->post('id');
                $data=array(
                'member_name'=>$this->input->post('name'),
                'member_address'=>$this->input->post('address'),
                'member_phonenumber'=>$this->input->post('phone'),
                'member_email'=>$this->input->post('email'),
                'member_description'=>$this->input->post('description')
                );
                if($this->Member_model->updateMemberData($data,$id))
                {
                                redirect('/dashboard','refresh');
                }

        }

        public function removeMember()
        {
            $id=$_GET['member_serial_no'];
            if($this->Member_model->removeMemberData($id)){
                redirect('/dashboard','refresh');
                }
        }
}
