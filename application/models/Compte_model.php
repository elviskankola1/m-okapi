<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class unique_model extends CI_Model {

        private $table_connexion = 'login';
        function __construct(){
            parent::__construct();
        }

        public function Sign_In_User($login ='', $pass =''){

            $query = $this->db->where(['login'=>$login,'pass'=>$pass])->get($this->table_connexion);
            return $query;
        }
    }