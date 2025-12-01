<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

	public function index(){
		$this->load->view('cron.php');
	}

	public function login_action(){
		echo "login action";
	}

	public function lupa_password(){
		echo "lupa password";
	}

	public function lupa_password_action(){
		echo "lupa password action";
	}


}