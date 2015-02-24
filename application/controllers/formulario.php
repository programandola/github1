<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formulario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('template1');
		$this->layout->setTitle('Trabajando con helper formulario');
	}

	public function index(){

		//ambiente con post
		if($this->input->post()){


		//primero procesar la imagen
		$error=null;

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('archivo'))
		{
			$error = array('error' => $this->upload->display_errors());
			
			
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());

			echo count($data);
			
			
		}


			//despues procesar los datos
			echo "nombre=".$this->input->post('username',TRUE);

			echo "<br>";

			echo "pass=".sha1($this->input->post('pass',TRUE));

			echo "<br>";

			echo "descripcion=".$this->input->post('text',TRUE);

			echo "<br>";

			echo "select=".$this->input->post('estados',TRUE);

			echo "<br>";

			


			exit;

		}


		//ambiente sin post
		$this->layout->view('index');

	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */