<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Compte_model extends CI_Model {

    /*=============================================================================
            ICI LES ATTRIBUTS  DE LA CLASSE REPRESENTANT DE TABLE DE LA DB 
     ===============================================================================*/
        private $table_user = 'utilisateur';
    /*=============================================================================
            ICI LE CONSTRUCTEUR DE LA CLASSE 
     ===============================================================================*/
        function __construct(){
            parent::__construct();
        }
    /*=============================================================================
            ICI L' ACTION DE CREATION DU COMPTE 
     ===============================================================================*/
        public function Create_Account_User($nom_user,$email_user, $pseudo_user, $password_user){

            $this->db->set('',$nom_user);
            $this->db->set('',$email_user);
            $this->db->set('',$pseudo_user);
            $this->db->set('',$password_user);
            return $this->db->insert($this->table_user);

        }
    /*=============================================================================
            ICI L' ACTION DE SE LOGER
     ===============================================================================*/
        public function Sign_In_User($login ='', $pass =''){

            $query = $this->db->where(['login'=>$login,'pass'=>$pass])->get($this->table_user)->result();
            return $query;
        }

       
    }