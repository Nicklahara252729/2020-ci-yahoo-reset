<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Administrator extends CI_Controller{
    public function __construct(){
        parent::__construct();
        check_session();
        date_default_timezone_set("Asia/Jakarta");
        error_reporting(0);
    }

    public function index(){
        $data['title'] = 'Yahoo - Data Reset Password';
        $data['view'] = $this->db->order_by('id','desc')->get('reset_password')->result();
        $this->admintheme->AdminDisplay('backend/dashboard/index',$data);
    }

    public function hapus(){
        $id = $this->input->post('id');
            try {
                $hapus = $this->db->delete('reset_password',['id'=>$id]);
                if($hapus){
                    $msg = array(
                        'msg'=>'Data berhasil dihapus',
                        'icon' => 'success',
                        'link' => 'dashboard',
                    );
                }else{
                    $msg = array(
                        'msg'=>'Gagal menghapus data',
                        'icon' => 'error',
                    );
                }
                
            }catch (Exception $e) {
                echo $e->getMessage();
                die();
            }

		echo json_encode($msg);
    }
    
}