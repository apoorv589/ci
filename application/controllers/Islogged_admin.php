<?php

class Islogged_admin extends CI_Controller
{
    
    var $adm_id;
    function __construct() {
        parent::__construct();
        //var $adm_id;
        $this->load->model('Admin_login_model');
        $this->is_logged_in();
    }
    function is_logged_in()
    {
        $is_logged_in=$this->session->userdata('is_logged_in');
        
        if(!isset($is_logged_in)||$is_logged_in!=TRUE)
        {
            $this->load->view("Homepage");
            
        }
    }
    function login1($arr)
    {      if($this->session->userdata('is_logged_in'))
        {
        //echo "HOLA";
        $this->load->view('logout');
        $data=array('ID' => $arr);
        $this->adm_id=$arr;
        $this->load->view('admin_home',$data);}

    }
     function profile($id)
    {if($this->session->userdata('is_logged_in')){
        $this->load->view('logout');
        $this->load->model('Admin_login_model');//$prof=array();
        $prof=$this->Admin_login_model->display($id);
        $this->load->view('Profile_view_admin',$prof);
    }
    }
    
     function edit_details($id)
    { 
        if($this->session->userdata('is_logged_in'))
      {
            
            $this->load->view('logout');
                $this->load->model('Admin_login_model');
                $prof=$this->Admin_login_model->display($id);
                $this->load->view('edit_admin_detail',$prof);
      }
 
      
    }
    function update_details($id)
    {    $this->load->model('Admin_login_model');
      $this->form_validation->set_rules('username', 'Username', 'trim|required');  
     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
     $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
     $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|numeric|max_length[10]');
           if($this->form_validation->run() == FALSE)
           {
               $this->edit_details($id);
           }
         else{
     if($this->session->userdata('is_logged_in'))
      {    
        if($this->Admin_login_model->update_data($id))
        {   //echo $this->input->post('name');
            $this->load->view('logout');
            $data=array('id'=>$id);
            $this->load->view('success_admin_update',$data);
        }
        else
        {   $this->load->view('logout');
            $this->load->view('update_fail');
        }
         }}
    
        }
       
        function doctors()
        {
            $this->load->model('Admin_login_model');
            $str="Doc_profile";
            $dbm['db']=$this->Admin_login_model->gettdb_doc();           
           $this->load->view('Edit_doctors_db',$dbm);
            
        }
        function edit_doc($id)
        {   $adm['admin']=1;
            $this->load->model('Admin_login_model');
            $this->load->model('Doc_profile_model');
                $prof=$this->Doc_profile_model->display($id);
                $prof['admin']=1;
            $this->load->view('edit_detail_form',$prof);
            
            
        }
        function update_doc_details($id)
        {
             $this->load->model('Doc_Login_Model');
              if($this->Doc_Login_Model->update_data($id))
        { 
            
            $data=array('id'=>$id);
            $data['admin']=1;
           $this->load->view('success_update',$data);
        }
        }
        function insert_doc()
        {
            //$adm['admin']=1;
         /*   $this->load->model('Admin_login_model');
            $this->Admin_login_model->insert_doc_details();
           */// $prof=array('Username'=>'','Name'=>'','Address'=>'','Mobile'=>'','Email'=>'','Picture'=
            $this->load->view('insert_doc');
            
            
        }
        function insert_doc_details()
        {
            $this->load->model('Admin_login_model');
                 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
     $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
     $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|numeric|max_length[10]');
    // $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|is_unique[Doctor_DB.Username]');  
     //$this->form_validation->set_rules('picture', 'Picture', 'required');  
     
     if($this->form_validation->run() == FALSE)
           {
               $this->insert_doc();
           }
         else{
             $this->Admin_login_model->insert_doc_details();
             $str="Doc_profile";
            $dbm['db']=$this->Admin_login_model->gettdb_doc($str);
            $this->load->view('Edit_doctors_db',$dbm);
        }
        }
        function delete_doc($id)
        {
            $this->load->model('Admin_login_model');
            $this->Admin_login_model->delete_doc($id);
              $str="Doc_profile";
            $dbm['db']=$this->Admin_login_model->gettdb($str);
            $this->load->view('Edit_doctors_db',$dbm);
           // $this->doctors();
        }
        function leave($id = NULL)
        {
             
            
            $this->load->model('Admin_login_model');
            if($this->input->post('status')!=NULL)
            {
                $this->Admin_login_model->send_approval($this->input->post('status'),$id);
            }            
            $str="Doc_leave";
            $dbm['db']=$this->Admin_login_model->gettdb_leave($str);
            //$str="Doc_DB";            
          //  $dbm['']
            $this->load->view('set_leave_status',$dbm);
            
            
        }
         function patient($id)
        {
             $this->load->model('Doc_Login_Model');
            
             
         $this->load->model('Admin_login_model');
         $str="Patient";
          $dbm['db']=$this->Admin_login_model->gettdb($str);
          $dbm['db']['doc_id']['doc_id']=$id;
          $dbm['db']['doc_id']['adm']=1;
           $this->load->view('Edit_patients_db',$dbm);
         
      
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
                $prof['adm']=1;
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
          $dbm['db']['doc_id']['adm']=1;
           $this->load->view('Edit_patients_db',$dbm);
        }
        }
        function delete_pat($id,$adm_id)
        {
          $this->load->model('Doc_Login_Model');
          $this->Doc_Login_Model->delete_pat($id);
          $this->load->model('Admin_login_model');
          $str="Patient";
          $dbm['db']=$this->Admin_login_model->gettdb($str);
          //echo $adm_id;
          //return;
          $dbm['db']['doc_id']['doc_id']=$adm_id;
          $dbm['db']['doc_id']['adm']=1;
           $this->load->view('Edit_patients_db',$dbm);
        }
        function insert_patient($id)
        {
            $this->load->model('Doc_profile_model');
             $data=array('id'=>$id,'adm'=>1);
           // $data['adm']=1;
           //   $this->form_validation->set_rules('report', 'Report', 'trim|required');  
             // $this->form_validation->set_rules('bill', 'Bill', 'trim|required');
              $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|numeric|max_length[10]');
              $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
              // if($this->form_validation->run() == FALSE)
          if($this->form_validation->run() == FALSE)
           {
               $this->load->view('insert_patient',$data);
           }
              else{
            if($this->input->post('name'))
            {
                $this->Doc_profile_model->insert_patient();
                
            }
           $this->adm=$id;
            $this->load->view('insert_patient',$data);
              }
            
        }
        
    function complaint($id)
    {
        $this->load->model('Admin_login_model');
        $str="Complaint";
        $dbm['db']=$this->Admin_login_model->gettdb_comp($str);
        $dbm['db']['doc_id']['doc_id']=$this->session->userdata('ID');
          $dbm['db']['doc_id']['adm']=1;
           $this->load->view('View_complaint',$dbm);
        
    }
    function delete_complaint($id,$adm_id)
    {
         $this->load->model('Admin_login_model');
          $this->Admin_login_model->delete_complaint($id);
          
          $str="Complaint";
          $dbm['db']=$this->Admin_login_model->gettdb_comp($str);
          //echo $adm_id;
          //return;
          $dbm['db']['doc_id']['doc_id']=$this->session->userdata('ID');
          $dbm['db']['doc_id']['adm']=1;
           $this->load->view('View_complaint',$dbm);
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

