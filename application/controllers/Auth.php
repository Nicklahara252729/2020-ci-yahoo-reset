<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        //error_reporting(0);
    }
	public function index(){
        is_logged();
        $data['title'] = "Administrator";
		$this->logintheme->LoginDisplay('auth/login',$data);
    }
    
    public function proses(){
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));
		$check = $this->db->get_where('user',['username'=>$user,'password'=>$pass]);	
        $num = $check->num_rows();
        $getAkun = $check->row();
        if($num > 0){
            $this->session->set_userdata(array(
                            'status_login'=>TRUE,
                            'id_user'=>$getAkun->id_user,
							'nama' =>$getAkun->nama,
                            'username' =>$getAkun->username,
                            'email' =>$getAkun->email,
                            'level' =>$getAkun->level,
                        ));
                        $link = 'dashboard';
                        $msg = array(
                            'msg'=>'Berhasil login',
                            'icon' => 'success',
                            'link' => $link,
                        );
        }else{
            $msg = array(
                'msg'=>'Akses Ditolak',
                'icon' => 'warning',
            );
        }
        echo json_encode($msg);
    }
    
    public function reset(){        
        $this->admintheme->AdminDisplay('auth/reset');
    }

    public function resetPassword(){
        $id = $this->input->post('r_id');
        $newpass = $this->input->post('r_newpass');
        $confirm = $this->input->post('r_confirm');
        if($newpass == $confirm){
            try {
            
                $update = $this->db->where('id_user',$id)
                                   ->update('user',
                                   ['password'=>md5($newpass)]);
                if($update){
                    $msg = array(
                        'msg'=>'Reset password successed',
                        'icon' => 'success',
                        'link' => 'home',
                    );
                }else{
                    $msg = array(
                        'msg'=>'Fail when reset password',
                        'icon' => 'error',
                    );
                }
          } catch (Exception $e) {
            echo $e->getMessage();
            die();
          }
        }else{
            $msg = array(
                'msg'=>'new passsword doesnt match',
                'icon' => 'error',
            );
        }
        echo json_encode($msg);
    }

	public function logout(){
        session_destroy();
        redirect('admin');
    }

}
