<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MOkapi extends CI_Controller
{
    public function index(){

        $name_user = strip_tags($this->input->post('nom'));
        $email_user = strip_tags($this->input->post('email'));
        $pseudo_user = strip_tags($this->input->post('pseudo'));
        $pass_user = sha1($this->input->post('pwd'));
        $confirm_pass_user = sha1($this->input->post('pwdc'));
        if ($pass_user == $confirm_pass_user && filter_var($email_user,FILTER_VALIDATE_EMAIL)) {
            $this->compte_model->Create_Account_User($name_user,$email_user, $pseudo_user, $password_user);
            echo "VOUS AVEZ CREE UN COMPTE ET BIENVENU CHEZ NOUS!";
        }
        echo "CHECK YOUR EMAIL OR YOUR CONFIRM PASS";
    }
}