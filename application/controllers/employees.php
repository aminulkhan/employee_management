<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Hello Aminul, in your class there is no constructor, please add a constructor*/
class employees extends CI_Controller {

	public function testpage(){
		$this->template->render();
	}

	public function department(){
		//$this->load->view('department');
		if($this->input->post('submit')){
			$this->save_department();
		}
		$this->template->render();
	}

	public function save_department(){
		$data = array(
			'department_name' => $this->input->post('department_name')
		);
		$this->user_model->department_insert($data);
	}

	public function designation(){
		$this->load->view('designation');
		if($this->input->post('submit')){
			$this->save_designation();
		}
	}

	public function save_designation(){
		$data = array(
			'designation' => $this->input->post('designation'),
			'basic_salary' => $this->input->post('basic_salary')
		);
		$this->user_model->designation_insert($data);
	}

	public function emp_leave(){
		
		echo "here";
		
		$this->load->view('leave');
	}

	public function call_leave(){
		$data = array(
			'id' => $this->input->post('emp_id'), 
			'emp_leave_type' => $this->input->post('mydropdown'),
			'emp_leave_from_date' => $this->input->post('emp_leave_from_date'), 
			'emp_leave_to_date' => $this->input->post('emp_leave_to_date'),
			'emp_leave_cause' => $this->input->post('emp_leave_cause'),
			'emp_leave_approval_person' => $this->input->post('emp_leave_approval_person')
		);
		$this->user_model->leave_insert($data);
	}


	public function logout(){
		$this->session->unset_userdata('id');
		redirect('user/login');
	}

	public function leave(){
		if($this->input->post('submit')){
			$this->call_leave();
		}
		$data['all_employees'] = $this->user_model->get_all_employees();
		$this->load->view('leave', $data);
	}

	function get_employees($emp_id=NULL){
		if($emp_id!=NULL)
		echo json_encode($this->user_model->get_all_employees($emp_id));
	}

	public function employee(){		
		$data['all_designation'] = $this->user_model->get_all_designation();
		$data['all_department'] = $this->user_model->get_all_department();
		// eikhane sob data er maddhome view e pathaite hobe
		// er data ekta array type variable. so view e data er jesob key gula thakbe oi gula view e normal varibale hoya jabe
		// example, eikhaen $data array variable er key hosse all_designation and all_department
		// so view e ei 2 ta key normal variable hoye gese....
		// view e tumi $all_designation and $all_department ei 2 ta normal vabe access korte parba
		if($this->input->post('submit')){
			$this->save_employee();
		}
		//$this->load->view('employees', $data); // eikhane multiple variable dewa jay na tai $data array er vitor sob pathaite hoy, tai tumi age jevabe disila oi vabe kaj kore nai
		$this->template->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
