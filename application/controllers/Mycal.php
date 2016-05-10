<?php

class Mycal extends CI_Controller
{
    var $id;
    public function __construct() 
    {
        parent::__construct();
        $this->id=$this->session->userdata('ID');
        $this->load->model('Mycal_model'); 
    }
    function index()
    { 
        $this->display();
    }
   
    function getiti($get)
    {   
        $doc_id=$this->session->userdata('ID');
        $this->load->model('Mycal_model'); $year=null;$month=null;
         if($this->session->userdata('is_logged_in'))
      {    
              $this->load->view('logout');
      if(!$year)
    {
        $year=date('Y');
    }
    if(!$month)
    {
        $month=date('m');
    }
   // echo  $this->input->post('data');
     /*  */
        if( $this->input->post('day'))
        { 
             $day=substr($get,8,2);          
            $this->Mycal_model->add_diary_data(
                            "$year-$month-$day",$this->input->post('data'),$this->input->post('day'),$doc_id
                            );
        }
   
      //  $dt=array('dt'=>$get);
        $arr=$this->Mycal_model->read_diary_data($get,$doc_id);
        $this->load->view('diary',$arr);
        
      }
  
        
        
    }
    function display()
    {  
         if($this->session->userdata('is_logged_in'))
      {    
             $this->load->view('logout');
        $year=null;$month=null;
    if(!$year)
    {
        $year=date('Y');
    }
    if(!$month)
    {
        $month=date('m');
    }
   // echo "$get";
   
    $this->load->model('Mycal_model'); 
     $data['calendar']=  $this->Mycal_model->generate($year,$month);
                //print_r($data['calendar']);
                $this->load->view('mycal',$data);
                 
    }

    }
    }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
