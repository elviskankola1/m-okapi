<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MOkapi extends CI_Controller{

    /*=============================================================================
            ICI LE CONSTRUCTEUR DE LA CALSS
     ===============================================================================*/
    function __construct(){
        parent::__construct();
    }
    /*=============================================================================
            ICI ACTION  DE LA CLASSE REPRESENTANT DE LA MAIN PAGE 
     ===============================================================================*/
    public function index(){
        $this->load->view('mokapi_home');
    }
    /*=============================================================================
            ICI L'ACTION DE CREATION D'UN COMPTE
    ===============================================================================*/

    public function Create_Account(){

        $name_user = strip_tags($this->input->post('nom'));
        $email_user = strip_tags($this->input->post('email'));
        $pseudo_user = strip_tags($this->input->post('pseudo'));
        $pass_user = sha1($this->input->post('pwd'));
        $confirm_pass_user = sha1($this->input->post('pwdc'));
        if ($pass_user == $confirm_pass_user && filter_var($email_user,FILTER_VALIDATE_EMAIL)) {
            $verify_user_exist =  $this->compte_model->Sign_In_User($pseudo_user,$pass_user);
            if ($verify_user_exist == false) {

                $this->compte_model->Create_Account_User($name_user,$email_user, $pseudo_user, $pass_user);
                echo "VOUS AVEZ CREE UN COMPTE ET BIENVENU CHEZ NOUS!";
            }
        }else{
            redirect('HTTP_FERERER');
        }
    }

    /*=============================================================================
            ICI L'ACTION DE SE LOGER
    ===============================================================================*/
    public function Login_In_Account(){

        $pseudo_user = strip_tags($this->input->post('pseudo'));
        $pass_user = sha1($this->input->post('pwd'));
        $user =  $this->compte_model->Sign_In_User($pseudo_user,$pass_user);
        if($user){
            echo "vous etes bien sur votre compte!";
        }else{
            redirect('HTTP_FERERER');
        }

    }
    /*=============================================================================
             AJOUTER AUSSI LES FONCTIONNALITES DEMANDEES EN BAS SVP! 
     ===============================================================================*/ 
    }
}