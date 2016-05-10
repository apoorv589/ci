<?php

class Doc_Login_Model extends CI_Model {

       public function __construct()
        {
           // parent::__construct();
            $this->load->database();
        }
        
        public function set_login()
        {     
             $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
        //'text' => $this->input->post('text')
    );
            // $row[]="";
            // echo $data['username'];
          //   echo $data['password'];
             $query = $this->db->get('Doctor_DB');
             foreach($query->result_array() as $row)
             {
                 if($row['Username']===$data['username'] and $row['Password']===md5($data['password']))
                  
                 {
                    return $row;
                 }
               //  echo $row['Username'];
             }
           
             
        }
   
        function update_data($id)
        {  
            $content=null;
        // // echo $_FILES['picture']['name'];
          //  $fp=  fopen($_FILES['picture']['tmp_name'], 'r');
            $query=$this->db->from('Doc_profile')->where('ID',$id)->get();
          //  $arr=$query->result_array();
           // $arr['Picture']=null;
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
          //  $content=  fread($fp, filesize($_FILES['picture']['tmp_name']));
           // $content=  addslashes($content);
           $data=array(
               'name'=>$this->input->post('name'),
               'username'=>$this->input->post('username'),
               'address'=>$this->input->post('address'),
               'mobile'=>$this->input->post('mobile'),
               'email'=>$this->input->post('email'),
               'picture'=>$content    
           );
           $query=$this->db->where('ID',$id)->update('Doc_profile',array(
               'Name'=>$this->input->post('name'),
              // 'Username'=>$this->input->post('username'),
               'Address'=>$this->input->post('address'),
               'Mobile'=>$this->input->post('mobile'),
               'Email'=>$this->input->post('email'),
                'Picture'=>$content
               
           ));
           if($this->input->post('username'))
           {
               $q=array('username'=>$this->input->post('username'));
               $this->db->where('ID',$id);
               $this->db->update('Doctor_DB',$q);
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
        function update_pat_data($id)
        {  
            $content=null;
            $cont=null;
            $query=$this->db->from('Patient')->where('ID',$id)->get();
           if($_FILES['report']['tmp_name'])
           {
            $content=file_get_contents($_FILES['report']['tmp_name']);
            $file_name=$_FILES['report']['name'];
                $file_size=$_FILES['report']['size'];
                $type=$_FILES['report']['type'];
           }
            if($_FILES['bill']['tmp_name'])
           {
            $cont=file_get_contents($_FILES['bill']['tmp_name']);
            $bill_name=$_FILES['bill']['name'];
                $bill_size=$_FILES['bill']['size'];
                $bill_type=$_FILES['bill']['type'];
           }
           if(!$content)
            {
      
                $q1=$this->db->from('Patient')->where('ID',$id)->get();
                $a=$q1->row_array();
                $content=$a['Report'];
                $file_name=$a['file_name'];
                $file_size=$a['file_size'];
                $type=$a['type'];
            }
             if(!$cont)
            {
      
                $q1=$this->db->from('Patient')->where('ID',$id)->get();
                $a=$q1->row_array();
                $cont=$a['Bill'];
                $bill_name=$a['bill_name'];
                $bill_size=$a['bill_size'];
                $bill_type=$a['bill_type'];
            }
          //  $content=  fread($fp, filesize($_FILES['picture']['tmp_name']));
           // $content=  addslashes($content);
           /*$data=array(
               'name'=>$this->input->post('name'),
               'cond'=>$this->input->post('cond'),
               'appoint'=>$this->input->post('appoint'),
               'mobile'=>$this->input->post('mobile'),
               'email'=>$this->input->post('email'),
               'report'=>$content    
           );*/
           $query=$this->db->where('ID',$id)->update('Patient',array(
               'Name'=>$this->input->post('name'),
               'Cond'=>$this->input->post('cond'),
               'Appointment'=>$this->input->post('appoint'),
               'Mobile'=>$this->input->post('mobile'),
               'Email'=>$this->input->post('email'),
                'Report'=>$content,
               'file_name'=>$file_name,
               'file_size'=>$file_size,
               'type'=>$type,
               'Bill'=>$cont,
               'bill_name'=>$bill_name,
               'bill_size'=>$bill_size,
               'bill_type'=>$bill_type
               
               
           ));
           /*if($this->input->post('username'))
           {
               $q=array('username'=>$this->input->post('username'));
               $this->db->where('ID',$id);
               $this->db->update('Doctor_DB',$q);
           }*/
           if($query)
           {
               return TRUE;             
           }
           else
           {
               return FALSE;
           }
        }
          function delete_pat($id)
        {
            $this->db->where('ID', $id);
            $this->db->delete('Patient');
        }
        function check_id()
        {
            $query=$this->db->get('Patient');
            
             foreach($query->result_array() as $row)
             {
                 if($row['ID']===$this->input->post('pid'))
                  
                 {
                    return $row;
                 }
               //  echo $row['Username'];
             }
             return false;
        }
        function insert_complaint($id)
        {
            $data=array('ID'=>$id,'Category'=>$this->input->post('category'),'Complaint'=>$this->input->post('complaint'));
            $this->db->insert('Complaint',$data);
        }
     function check_old($id)
     {
         $this->db->select('Password')->from('Doctor_DB')->where('ID',$id);
         $query=$this->db->get();
         foreach($query->result_array() as $row)
         {
             if($row['Password']===md5($this->input->post('old')))
             {
                 return true;
             }
             else
             {
                 return false;
             }
         }
         
     }
     function change_pass($id)
     {
         $data=array('Password'=>md5($this->input->post('new')));
        $this->db->where('ID', $id);
        $this->db->update('Doctor_DB', $data);
        
     }
}

?>
