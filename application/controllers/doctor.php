<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class doctor extends CI_Controller {

	public function index(){

		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('doctor_content');
		$this->load->view('footer');
	}

	public function view($id_medico){

		$this->load->helper('url');

		$this->load->database();
		$this->load->model('model_medicos');
		
		$data = Array();
		$data["arr_medico"] = $this->model_medicos->getMedicoById($id_medico);

		$this->load->view('header');
		$this->load->view('doctor_content',$data);
		$this->load->view('footer');
	}
}
