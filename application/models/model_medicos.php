<?php

	class model_medicos extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function getMedicos(){

			$query = $this->db->query('SELECT * FROM medicos');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

		function getMedicoById($id_medico){

			$query = $this->db->query('SELECT * FROM medicos WHERE id = '.$id_medico);

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

	    function getLastMedicos(){
	        $query = $this->db->get('medicos', 3);
	        return $query->result();
	    }
	}

?>