<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUsView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	if (!isset($_SESSION['email'])) {
			$this->load->view('template/header');
			$this->load->view('about/AboutUs');
			$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/headerlogin');
			$this->load->view('about/AboutUs');
			$this->load->view('template/footer');
		}	
	}
}
