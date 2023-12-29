<?php

    function check_alerdy_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('nip');
        if($user_session){
            redirect('admin');
        }
    }
    
    function check_not_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('nip');
        if(!$user_session){
            redirect('auth');
        }
    }

    function check_alerdy_login_opd()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('kode_opd');
        if($user_session){
            redirect('pengguna');
        }
    }

    function check_not_login_opd()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('kode_opd');
        if(!$user_session){
            redirect('auth');
        }
    }
?>