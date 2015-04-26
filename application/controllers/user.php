<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Hello Aminul, in your class there is no constructor, please add a constructor*/
class user extends CI_Controller {

	function __construct(){
		// this is my constructor
	}

	public function registration()
	{
		$this->load->library('myvalidation');
		$this->load->view('registration');
		if($this->input->post('user_signup')){
			$this->call_registration();
		}
	}

	public function call_registration(){
		$salt = sha1(uniqid(rand(), true));
        $password = $this->input->post('user_password');
        $hash_password = hash_password_function($password,$salt);

		$data = array(
  	 	'name' => $this->input->post('user_name') ,
   		'user_id' =>  $this->input->post('user_id')  ,
   		'password' => $hash_password,
   		'salt'	=> $salt,
   		'email'    =>  $this->input->post('user_email') 
		);
		$this->user_model->registration($data, $is_update=0);
	}

	public function login(){
		$this->load->view('login');
		if($this->input->post('user_login')){
			$this->do_login();

		}
	}

	function do_login(){
		$username = $this->input->post('user_name');
		$password = $this->input->post('user_password');
		$id = $this->user_model->authenticate_user($username, $password);
		if($id){
			$this->session->set_userdata('id', $id);
			redirect("user/dashboard");
		}
	}

	public function emp_insert(){
		$this->load->view('emp_insert');
		if($this->input->post('submit')){
			$this->call_insert();
		}
	}

	public function call_insert(){
		$data = array(
			'emp_fname' => $this->input->post('first_name'),
			'emp_lname' => $this->input->post('last_name'),
			'emp_department' => $this->input->post('dept_name'),
			'emp_designation' => $this->input->post('designation'),
			'emp_email' => $this->input->post('user_email')
		);
		$this->user_model->emp_insert($data);
	}

	public function dashboard(){
		if($this->session->userdata('id')){
			$this->load->view('user_dashboard');
		}else{
			redirect('user/login');
		}
	}

	public function designation(){
		$this->load->view('designation');
		if($this->input->post('submit')){
			$this->call_designation();
		}
	}

	public function call_designation(){
		$data = array(
			'designation' => $this->input->post('designation'),
			'basic_salary' => $this->input->post('basic_salary')
		);
		$this->user_model->designation_insert($data);
	}

	public function department(){
		$this->load->view('department');
		if($this->input->post('submit')){
			$this->call_department();
		}
	}

	public function call_department(){
		$data = array(
			'department_name' => $this->input->post('department_name')
		);
		$this->user_model->department_insert($data);
	}


	public function logout(){
		$this->session->unset_userdata('id');
		redirect('user/login');
	}

	public function leave(){
		$data['all_employees'] = $this->user_model->get_all_employees();
		$this->load->view('leave', $data);
	}

	function get_employees($emp_id=NULL){
		if($emp_id!=NULL)
		echo json_encode($this->user_model->get_all_employees($emp_id));
	}

	public function employees(){		
		$data['all_designation'] = $this->user_model->get_all_designation();
		$data['all_department'] = $this->user_model->get_all_department();
		// eikhane sob data er maddhome view e pathaite hobe
		// er data ekta array type variable. so view e data er jesob key gula thakbe oi gula view e normal varibale hoya jabe
		// example, eikhaen $data array variable er key hosse all_designation and all_department
		// so view e ei 2 ta key normal variable hoye gese....
		// view e tumi $all_designation and $all_department ei 2 ta normal vabe access korte parba
		if($this->input->post('submit')){
			$this->call_employess();
		}
		$this->load->view('employees', $data); // eikhane multiple variable dewa jay na tai $data array er vitor sob pathaite hoy, tai tumi age jevabe disila oi vabe kaj kore nai
	}

	public function call_employess(){
		$data = array(
			'emp_id' => $this->input->post('emp_id'),
			'emp_name' => $this->input->post('emp_name'),
			'designation_id' => $this->input->post('designation_id'),
			'department_id' => $this->input->post('department_id'),
			'emp_gender' => $this->input->post('emp_gender'),
			'emp_dob' => $this->input->post('emp_dob'),
			'emp_grade' => $this->input->post('emp_grade'),
			'emp_joining_date' => $this->input->post('emp_joining_date'),
			'emp_cell_number' => $this->input->post('emp_cell_number'),
			'emp_email' => $this->input->post('emp_email')
			 );
		$this->user_model->employees_insert($data);
	}
 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
