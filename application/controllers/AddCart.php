<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCart extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		redirect(base_url());
	}
	public function add_cart()
	{
		if(isset($_SESSION['email'])){
			$this->cart_model->add_cart();
			$data['carts'] = $this->cart_model->get_cart($_SESSION['id']);
			redirect(base_url()."cart");
		}
		else{
			redirect(base_url());
		}
	}
	public function view()
	{
		$data['carts'] = $this->cart_model->get_cart($_SESSION['id']);
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('cart/cart',$data);
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
}
