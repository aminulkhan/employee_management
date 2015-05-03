<?php
class User_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }


	function registration($data=array(), $is_update){
		if($is_update==1)
			$this->db->update('registration', $data);
		else
			return $this->db->insert('registration', $data);
	}

	function authenticate_user($username, $password){
		$salt = $this->get_salt($username);
        $hash_password = hash_password_function($password,$salt);

        // select * from registration where user_id=$username and password=$hash_password;
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('user_id',$username);
        $this->db->where('password', $hash_password);

        $query = $this->db->get();

        if($query->num_rows() > 0){
        	$result = $query->result();
        	return $result[0]->id;
        }else
        	return false;
	}

	function get_salt($username=NULL){
		// select id,user_id,salt from registration where user_id='';
		if($username!=NULL){
			$this->db->select('id,user_id,salt');
			$this->db->from('registration');
			$this->db->where('user_id',$username);

			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				$result = $query->result();
				return $result[0]->salt;
			}
			else
				return NULL;
		}else
			return NULL;

	}

	function employees_insert($data = array()){
		$this->db->insert('employees', $data);
	}

	function department_insert($data = array()){
		$this->db->insert('department', $data);
	}

	function designation_insert($data = array()){
		$this->db->insert('designation', $data);
	}

	function leave_insert($data = array()){
		$this->db->insert('emp_leave', $data);

	}

	function get_all_designation(){
		$this->db->select('*');
		$this->db->from('designation');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return null;
		}

	}

	function get_all_department(){
		$this->db->select('*');
		$this->db->from('department');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return null;
		}

	}

	function get_all_employees($emp_id=NULL){
		$this->db->select('*');
		$this->db->from('employees');
		$this->db->join('designation',"employees.designation_id = designation.designation_id", "left");
		$this->db->join('department',"employees.department_id = department.department_id", "left");
		if($emp_id!=NULL)
			$this->db->where('id',$emp_id);

		$query = $this->db->get();
		if($query->num_rows() > 0){
				if($emp_id!=NULL){
					$result = $query->result();
					return $result[0];
				}else
					return $query->result();
		}
		else
			return NULL;
	}
}

?>