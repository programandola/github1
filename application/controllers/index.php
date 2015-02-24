<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('template1');
	}

	public function index(){
		//$this->load->view('hola');

		$this->layout->view('index');
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */