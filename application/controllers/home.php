<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->database();

		if(isset($_POST) && !empty($_POST)){
			$nome = (isset($_POST['app_name'])) ? $_POST['app_name'] : "";
			$email = (isset($_POST['app_email'])) ? $_POST['app_email'] : "";
			$telefone = (isset($_POST['app_phone'])) ? $_POST['app_phone'] : "";

			$this->load->model('model_contatos');

			$retorno = $this->model_contatos->insertContato($nome,$email,$telefone);
			if($retorno===true){
				$message = $telefone;
				if($this->sendEmail($email,"email@administrador.com",$message,$nome)){
					$this->load->view('header');
					$this->load->view('appontment_success_content');
					$this->load->view('footer');
				}				
				return true;
			}
		}


		$this->load->model('model_medicos');

		$data = Array();
		$data["arr_medicos"] = $this->model_medicos->getMedicos();

		$this->load->view('header');
		$this->load->view('home_content',$data);
		//$this->load->view('doctor_content');
		//$this->load->view('appontment_success_content');
		$this->load->view('footer');
	}

	public function sendEmail($from,$to,$message,$nome = ""){
		$subject = $nome.' - Contato';

		$message = '
		<html>
			<head>
				<title>Contato</title>
			</head>
			<body>
				<p>Mensagem de Contato</p>
				<table>
				 <tr>
				  <td><b>Nome : </b></td>
				  <td>'.$nome.'</td>
				 </tr>
				 <tr>
				  <td><b>E-mail : </b></td>
				  <td>'.$from.'</td>
				 </tr>
				 <tr>
				  <td><b>IP : </b></td>
				  <td>'.$_SERVER['REMOTE_ADDR'].'</td>
				 </tr>
				 <tr>
				  <td><b>Data : </b></td>
				  <td>'.date("d-m-Y H:i:s").'</td>
				 </tr>
				 <tr>
				  <td><b>Mensagem : </b></td>
				  <td>'.$message.'</td>
				 </tr>
				</table>
			</body>
		</html>
		';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

		$headers .= 'To: Contato <'.$to.'>' . "\r\n";
		$headers .= 'From: '.$nome.' <'.$from.'>' . "\r\n";
		
		if(mail($to, $subject, $message, $headers)){
			return true;
		}else{
			return false;
		}
	}
}
