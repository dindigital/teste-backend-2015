<?php

	class model_contatos extends CI_Model{

		var $nome = '';
		var $email = '';
		var $telefone = '';

		function __construct(){
			parent::__construct();
		}

		public function getContatos(){

			$query = $this->db->query('SELECT * FROM contatos');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

		function insertContato($nome,$email,$telefone){
	        $this->nome   = $nome;
	        $this->email = $email;
	        $this->telefone = $telefone;

	        return $this->db->insert('contatos', $this);
	    }

	    function getLastContatos(){
	        $query = $this->db->get('contatos', 10);
	        return $query->result();
	    }
	}

?>