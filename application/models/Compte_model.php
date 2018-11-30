<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Compte_model extends CI_Model {

    /*=============================================================================
            ICI LES ATTRIBUTS  DE LA CLASSE REPRESENTANT DE TABLE DE LA DB 
     ===============================================================================*/
        private $table_connexion = 'login';
    
    /*=============================================================================
            ICI LE CONSTRUCTEUR DE LA CLASSE 
     ===============================================================================*/
        function __construct(){
            parent::__construct();
        }
    /*=============================================================================
            ICI L' ACTION DE CREATION DU COMPTE 
     ===============================================================================*/
        public function Create_Account_User(){


        }
    /*=============================================================================
            ICI L' ACTION DE SE LOGER
     ===============================================================================*/
        public function Sign_In_User($login ='', $pass =''){

            $query = $this->db->where(['login'=>$login,'pass'=>$pass])->get($this->table_connexion)->result();
            return $query;
        }

       
    }