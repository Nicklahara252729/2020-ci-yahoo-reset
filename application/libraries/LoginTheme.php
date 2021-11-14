<?php
if(!defined('BASEPATH')) exit('no file allowed');
class LoginTheme{
    protected $_ci;
     function __construct(){
        $this->_ci =&get_instance();
    }
    function LoginDisplay($theme, $data=null){
        $data['_config_content']=$this->_ci->load->view($theme,$data,true);
        $this->_ci->load->view('/AuthTemplate.php', $data);
    }
}