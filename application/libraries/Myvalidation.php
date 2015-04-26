<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myvalidation {
	public $error=array(); // eikhane error array define kora. and ei array te kisu nai
    public $data;

	function __construct(){
		//do something
		$this->obj =& get_instance();  //$CI =& get_instance();
	}

	public function validate_registration_form(){
		$this->data['user_name']=$this->obj->input->post('user_name');
		$this->data['user_id']=$this->obj->input->post('user_id');
		$this->data['user_password']=$this->obj->input->post('user_password');
		$this->data['user_email']=$this->obj->input->post('user_email');

		if(strlen($this->data['user_name'])<5){
			array_push($this->error, 'user_name_length');
		}
		If($this->data['user_name']==""){
			array_push($this->error, 'user_name_empty');
		}
		If($this->data['user_id']==""){
			array_push($this->error, 'user_id_empty');
		}
		If($this->data['user_password']==""){
			array_push($this->error, 'user_password_empty');
		}
		If($this->data['user_email']==""){
			array_push($this->error, 'user_email_empty');
		}
		if(empty($this->error)){
			return true; //empty thaka mane kono problem nai validation e
		} else {
			return false; // er empty na thakle mane error ase
		}
	}

}	