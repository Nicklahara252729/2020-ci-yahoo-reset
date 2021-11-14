<?php
if(!defined('BASEPATH')) exit('no file allowed');
class AdminTheme{
    protected $_ci;
     function __construct(){
        $this->_ci =&get_instance();
    }
    function AdminDisplay($tanitheme, $data=null){
        $data['_config_content']=$this->_ci->load->view($tanitheme,$data,true);
        $data['header']=$this->_ci->load->view('theme/backend/header.php',$data,true);
        $data['navbar']=$this->_ci->load->view('theme/backend/navbar.php',$data,true);
        $data['footer']=$this->_ci->load->view('theme/backend/footer.php',$data,true);
        $this->_ci->load->view('/AdminTemplate.php', $data);
    }
}