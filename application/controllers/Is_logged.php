<?php

class Is_logged extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        $arry=$this->session->userdata('ID');
         $this->load->model('Doc_Login_Model');
         $this->load->library('form_validation');
        $this->is_logged_in();
        
    } 
        
    function login1($arry)
    {      if($this->session->userdata('is_logged_in'))
        {
        //echo "HOLA";
        $this->load->view('logout');
        $data=array('ID' => $arry);
        $this->load->view('Doc_home',$data);}

    }
     function profile($id)
    {if($this->session->userdata('is_logged_in')){
        $this->load->view('logout');
        $this->load->model('Doc_profile_model');//$prof=array();
        $prof=$this->Doc_profile_model->display($id);
        $this->load->view('Profile_view',$prof);
    }
        
    }
     function is_logged_in()
    {
        $is_logged_in=$this->session->userdata('is_logged_in');
        
        if(!isset($is_logged_in)||$is_logged_in!=TRUE)
        {
            $this->load->view("Homepage");
            
        }
      
     
    }
    
function leave($id)
    {  // echo $id;
    $this->load->view('logout');
    if($this->session->userdata('is_logged_in')){
        
        $data=array('id'=>$id);       
        $this->load->view('leave_app',$data);
    }
    else
    {
        $this->load->view('please_login');
    }
    }
    function leave_status($id)
    {
         $this->load->view('logout');
         $this->load->model('Doc_leave');
    if($this->session->userdata('is_logged_in')){
        
         $str="Doc_leave";
            $dbm['db']=$this->Doc_leave->gettdb($str);
       //     print_r($dbm);
         $dbm['db']['doc_id']['doc_id']=$id;
            
            $this->load->view('leave_status',$dbm);
        
        }
    }
    function submit_leave($id)
    {if($this->session->userdata('is_logged_in')){
        //$this->load->view('logout');
        $this->load->model('Doc_leave');
        $this->Doc_leave->submit_leave($id);
        //$this->load->view("suc_submit");
        $this->login1($id);
    }

    }
    
      function schedule($id)
    {
          $this->load->view('logout');
           $data=array('id'=>$id);
           $data['lg']=$this->session->userdata('is_logged_in');
      if($this->session->userdata('is_logged_in'))
      {
        $this->load->view('schedule',$data);
      }  
 
    }
    function edit_details($id)
    { 
        if($this->session->userdata('is_logged_in'))
      {
            $this->load->view('logout');
                $this->load->model('Doc_profile_model');
                $prof=$this->Doc_profile_model->display($id);
                $prof['admin']=0;
                $this->load->view('edit_detail_form',$prof);
      }

    }
    function update_details($id)
    {    $this->load->model('Doc_Login_Model');
     if($this->session->userdata('is_logged_in'))
      {     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|numeric');
           if($this->form_validation->run() == FALSE)
           {
               $this->edit_details($id);
           }
         else{
        if($this->Doc_Login_Model->update_data($id))
        {   //echo $this->input->post('name');
            //$this->load->view('logout');
            $data=array('id'=>$id);
            $data['admin']=0;
            $this->login1($id);
        }
        else
        {   $this->load->view('logout');
            $this->load->view('update_fail');
        }
         }
    }
    
        }
        function patient($id)
        {
             $this->load->model('Doc_Login_Model');
     if($this->session->userdata('is_logged_in'))
      { 
         $this->load->model('Admin_login_model');
         $str="Patient";
          $dbm['db']=$this->Admin_login_model->gettdb($str);
          $dbm['db']['doc_id']['doc_id']=$id;
          $dbm['db']['doc_id']['adm']=0;
           $this->load->view('Edit_patients_db',$dbm);
         
      }
        }
        function patient_down($id)
        {
            $this->load->model('Doc_profile_model');
            $this->Doc_profile_model->patient_down($id);
        }
        function patient_bill_down($id)
        {
            $this->load->model('Doc_profile_model');
            $this->Doc_profile_model->patient_bill_down($id);            
        }
        function edit_pat($id)
        {
             $this->load->model('Doc_profile_model');
                $prof=$this->Doc_profile_model->display_pat($id);
                $prof['adm']=0;
                $this->load->view('edit_pat_details',$prof);
        }
        function update_pat_details($id)
        {
             $this->load->model('Doc_Login_Model');
        
         
              if($this->Doc_Login_Model->update_pat_data($id))
        { 
            
            $data=array('id'=>$id);
           $this->load->model('Admin_login_model');
         $str="Patient";
          $dbm['db']=$this->Admin_login_model->gettdb($str);
          $dbm['db']['doc_id']['doc_id']=$id;
           $dbm['db']['doc_id']['adm']=0;
           $this->load->view('Edit_patients_db',$dbm);
        }
        }
        function delete_pat($id,$doc_id)
        {
             $this->load->model('Doc_login_model');
            $this->Doc_login_model->delete_pat($id);
             $this->load->model('Admin_login_model');
         $str="Patient";
          $dbm['db']=$this->Admin_login_model->gettdb($str);
          $dbm['db']['doc_id']['doc_id']=$doc_id;
          $dbm['db']['doc_id']['adm']=0;
           $this->load->view('Edit_patients_db',$dbm);
        }
        function insert_patient($id)
        {
            $this->load->model('Doc_profile_model');
            if($this->input->post('name'))
            {
                $this->Doc_profile_model->insert_patient();
                
            }
            $data=array('id'=>$id,'adm'=>0);
            $this->load->view('insert_patient',$data);
            
        }
        function change_pass($id)
        {
            if($this->session->userdata('is_logged_in'))
            {
            $data=array('id'=>$id);
            $this->load->view('change_password',$data);
            }
        }function change_passw($id)
        {
            $this->load->model('Doc_Login_Model');
            if($this->Doc_Login_Model->check_old($id)&&$this->input->post('conf')==$this->input->post('new'))
            {
                $this->Doc_Login_Model->change_pass($id);
                $this->load->view('pass_changed');
                $this->login1($id);
                    
                
            }
            else
            {
                $this->load->view('fill_again');
                $this->edit_details($id);
            }
            
        }
    
    }
     

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

