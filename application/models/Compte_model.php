<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|
| ICI LE CONSTRUCTEUR DE LA CLASSE 


*/
	class Compte_model extends CI_Model {

        private $table_connexion = 'login';
        function __construct(){
            parent::__construct();
        }

        public function Create_Account_User(){


        }
        public function Sign_In_User($login ='', $pass =''){

            $query = $this->db->where(['login'=>$login,'pass'=>$pass])->get($this->table_connexion);
            return $query;
        }

       
    }