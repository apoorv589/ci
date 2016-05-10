<?php

class Admin_login_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function admin_login()
    {
        $where=array('Username'=>$this->input->post('username'),'Password'=>md5($this->input->post('password')));
        $query=$this->db->from('Admin_DB')->where($where)->get();
        $arr=$query->row_array();
        if($arr['ID'])
        {
            return $arr;
        }
        else
        {
            return FALSE;
        }
    }
     function display($id)
        {
           // echo $id;
            /*$this->db->where('ID',$id);
            $query = $this->db->get('Doc_profile');*/
         $str="Admin_DB";
           // $query = $this->db->get_where('Admin_profile', array('ID' => $id));
             $this->db->select('ID,Name,Username,Address,Mobile,Email,Picture')->from($str)->join('Admin_profile','ID','natural');
             $query=$this->db->get();
           // return $query->result_array();
           // $q=$query->result_array() ;
             foreach($query->result_array() as $row)
             {
                 $retval=array(
                     'ID'=>$row['ID'],
                     'Name'=>$row['Name'],
                     'Username'=>$row['Username'],
                     'Address'=>$row['Address'],
                     'Mobile'=>$row['Mobile'],
                     'Email'=>$row['Email'],
                     'Picture'=>$row['Picture']
                   
                 );
                  
                 
                   
             } return $retval;
        }
         function update_data($id)
        {  
            $content=null;
            $query=$this->db->from('Admin_profile')->where('ID',$id)->get();
            if($_FILES['picture']['tmp_name'])
           {
            $content=file_get_contents($_FILES['picture']['tmp_name']);
           }
           if(!$content)
            {
      
                $q1=$this->db->from('Admin_profile')->where('ID',$id)->get();
                $a=$q1->row_array();
                $content=$a['Picture'];
            }
           $query=$this->db->where('ID',$id)->update('Admin_profile',array(
               'Name'=>$this->input->post('name'),
               //'Username'=>$this->input->post('username'),
               'Address'=>$this->input->post('address'),
               'Mobile'=>$this->input->post('mobile'),
               'Email'=>$this->input->post('email'),
                'Picture'=>$content              
           ));
             if($this->input->post('username'))
           {
               $q=array('username'=>$this->input->post('username'));
               $this->db->where('ID',$id);
               $this->db->update('Admin_DB',$q);
           }
           if($query)
           {
               return TRUE;
               
           }
           else
           {
               return FALSE;
           }
        }
        function get_user_data_by_id($id) 
        {
            $this->db->where('ID',$id);
            $q=$this->db->get();
            return  $q->result();
        }
        function gettdb($str)
        {
            $query=$this->db->get($str);
            return $query->result_array();
        }
         function gettdb_doc()
        {
            //$query=$this->db->get($str);
            $this->db->select('ID,Name,Username,Address,Mobile,Email,Picture')->from('Doc_profile')->join('Doctor_DB','ID','natural');
            $query=$this->db->get();
            return $query->result_array();
            
        }
        function gettdb_leave()
        {
            //$query=$this->db->get($str);
            $this->db->select('ID,Leave_ID,Name,Address,Mobile,Email,From1,To1,Reason,Status')->from('Doc_leave')->join('Doc_profile','ID','natural');
            $query=$this->db->get();
            return $query->result_array();
            
        }
        function gettdb_comp($str)
        {
            $this->db->select('CID,ID,Name,Cond,Mobile,Email,Category,Complaint')->from($str)->join('Patient','ID','natural');
             $query=$this->db->get();
            return $query->result_array();
        }
        function delete_doc($id)
        {
           //  $str=array('Doc_profile','Doctor_DB');
            $this->db->where('ID', $id);
           
            $this->db->delete('Doc_profile');
              $this->db->where('ID', $id);
           
            $this->db->delete('Doctor_DB');
            
          
            
        }
      function insert_doc_details()
      {
          
          $content=null;
          
           if($_FILES['picture']['tmp_name'])
           {
            $content=file_get_contents($_FILES['picture']['tmp_name']);
           }
           if(!$content)
            {
      
                $q1=$this->db->from('Doc_profile')->where('ID',$id)->get();
                $a=$q1->row_array();
                $content=$a['Picture'];
            }
              $this->db->insert('Doctor_DB',array(
               //'ID'=>$row['ID'],
               'Username'=>$this->input->post('username'),
              'Password'=>md5($this->input->post('password'))));
              $this->db->select('ID')->from('Doctor_DB')->where('Username',$this->input->post('username'));
               $query=$this->db->get();
                $row=$query->row_array();
          $query=$this->db->insert('Doc_profile',array(
              'ID'=>$row['ID'],
               'Name'=>$this->input->post('name'),
               //'Username'=>$this->input->post('username'),
              //'Password'=>md5($this->input->post('password')),
               'Address'=>$this->input->post('address'),
               'Mobile'=>$this->input->post('mobile'),
               'Email'=>$this->input->post('email'),
                'Picture'=>$content
               
           ));
          /*$this->db->select('ID')->from('Doc_profile')->where('Username',$this->input->post('username'));
          $query=$this->db->get();
          $row=$query->row_array();
          $this->db->insert('Doctor_DB',array(
               'ID'=>$row['ID'],
               'Username'=>$this->input->post('username'),
              'Password'=>md5($this->input->post('password'))));
          
          */
      }
      function send_approval($stat,$id)
      {
         $data=array('Status'=>$stat);
          $this->db->where('Leave_ID',$id);      
         $this->db->update('Doc_leave',$data);
      }
         function delete_complaint($id)
        {
            $this->db->where('CID', $id);
            $this->db->delete('Complaint');
        }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

