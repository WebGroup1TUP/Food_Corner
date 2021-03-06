<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index(){
		redirect(base_url());
	}
	public function logins(){
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()===FALSE){
			$this->load->view('login/Login_Signup');
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->customer_model->check_account($password,$email)){
				session_start();
				$_SESSION['email'] = $this->input->post('email');
				$_SESSION['id'] = $this->customer_model->get_cid($_SESSION['email']);
				$_SESSION['alert'] = "You have Successfully been Logged In.";
				$_SESSION['admin'] = $this->customer_model->is_admin();
				redirect('Welcome');
			}
			else{
				$this->session->set_flashdata('wrong','You have entered an invalid Username/Email or Password');
				$this->load->view('template/header');
				$this->load->view('login/Login_Signup');
				$this->load->view('template/footer');
			}
		}
	}
	public function register(){
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('email','Emal','required|callback_check_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('cpassword','Confirm Password','matches[password]');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('caddress','Address','required');
		if($this->form_validation->run()===FALSE){
			$this->load->view('template/header');
			$this->load->view('login/Signups');
			$this->load->view('template/footer');
		}else{
			//Encryption
			session_start();
			$enc_pass = $this->input->post('password');
			$this->customer_model->register($enc_pass);
			$this->customer_model->address_insert($this->input->post('email'));
			$_SESSION['alert'] = "Successfully Registered! and you can now log in";
			redirect('Welcome');
		}
	}
	function check_email($email){
		$this->form_validation->set_message('check_email','Email already in use. Please choose a different one');
		if($this->customer_model->check_email_exists($email)){
			return true;
		}else{
			//Encryption
			return false;
		}
	}
	function check_usernames($username){
		$this->form_validation->set_message('check_usernames','The Username is wrong.');
		if($this->customer_model->check_username($username)){
			return true;
		}else{
			//Encryption
			return false;
		}
	}
	function check_password($username){
		$password = md5($this->input->post('password'));
		$this->form_validation->set_message('check_password','The Password is wrong');
		if($this->customer_model->check_password($password)){
			return true;
		}else{
			return false;
		}
	}
}
?>
