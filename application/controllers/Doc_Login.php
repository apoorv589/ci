<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doc_Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
      
        $this->load->model('Doc_Login_Model');
        $this->load->model('Mycal_model');
         $this->load->library('form_validation');
      
        }
    public function index()
    {
        $this->load->view("Homepage");
        
    }
    function login_form()
    {
       // $data=array('log'=>0);
         $this->load->view("D_Login_Form");
    }
    
    function login()
    {
        
    
         $usepass['data']=$this->Doc_Login_Model->set_login();
         //echo $usepass;
         //$arr=array('ID'=>$usepass);
         
         $arr=$usepass['data'];
         $arr['is_logged_in']=TRUE;
         $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
         
         if($this->form_validation->run() == FALSE){$this->load->view('D_Login_Form');}
         else{
         
       if($usepass['data']['ID'])
       {
           $this->session->set_userdata($arr);        
           redirect('Is_logged/login1/'.$usepass['data']['ID']);
     
       }
       else
       {    
           $this->load->view('Failure');
           $this->load->view('D_Login_Form');
       }
         }
    }
    


        function destroy()
        {
            $this->session->sess_destroy();
            $this->load->view('Homepage');
        }
  
    function patient()
    {
        $this->load->view('Patient');
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
    function patient_login()
    {
        if($this->input->post('pid'))
        {   
           /* $arr=array('pid'=>$this->input->post('pid'));
            $this->session->set_userdata($arr);*/
            $this->load->model('Doc_Login_Model');
            if($q=$this->Doc_Login_Model->check_id())
            {
                $this->load->view('Patient_view',$q);
            }
            else
            {
                $this->load->view('Patient');
            }
            
        }
    }
    function complaint($id)
    {
        $data=array('id'=>$id);
        $this->load->view('fill_complaint',$data);
    }
    function file_complaint($id)
    {
        $this->load->model('Doc_Login_Model');
        $this->Doc_Login_Model->insert_complaint($id);
        $this->load->view('success_complaint',$id);
    }
    function admin()
    {
        $this->load->view('admin_login_form');
    }
   
}

?>