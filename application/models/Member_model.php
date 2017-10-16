<?php 
class Member_model extends CI_Model
	{
		
		function __construct()
		{
		parent:: __construct();
		$this->load->database();
		}    
    
    	function getMemberList()
		{
        	$this->db->select('*');
			$this->db->from('member');
			$query = $this->db->get();
			return $query->result();
    	} 

		function selectMember($id)
		{
			$row = $this->db->get_where('member', array('member_serial_no' => $id))->row();
            return $row;
        }

		public function getCount()
        {
			$this->db->select('*');
			$this->db->from('member'); 
			$query = $this->db->get();
			return $query->num_rows();
        }

		function getSearchData($search)
		{
			if(empty($search))
			return array();

			$result = $this->db->like('member_name', $search)
					->or_like('member_address', $search)
					->or_like('member_phonenumber', $search)
					->or_like('member_email', $search)
					->or_like('member_description', $search)
					->get('member');

			return $result->result();
		}

		function add($data = null)
        {
			$this->db->set('member_creation_date','NOW()', FALSE);
			$this->db->set('member_modify_date','NOW()', FALSE);
			$this->db->insert('member',$data);
			 if($this->db->affected_rows()){return true;}
        } 

		function updateMemberData($data,$id)
        {

			$this->db->set('member_modify_date','NOW()', FALSE);
			$this->db->where('member_serial_no',$id);
			$this->db->update('member',$data);
			if($this->db->affected_rows()){return true;}
        }

		function removeMemberData($id)
        {
         $this->db->delete('member', array('member_serial_no' => $id)); 
                  if($this->db->affected_rows()){return true;}
                        
        }
	}
 ?>