<?php

class Admin extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    function admin()
    {
        $this->load->view('admin_login_form');
    }
    function login()
    {
        $this->load->model('Admin_login_model');
        $usepass=$this->Admin_login_model->admin_login();
        if($usepass['ID'])
        {
            $arr=$usepass;
            $arr['is_logged_in']=TRUE;
            $this->session->set_userdata($arr);
            redirect('Islogged_admin/login1/'.$usepass['ID']);
        }
        else
        {
            $this->load->view('Failure');
            $this->load->view('admin_login_form');
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

