<?php

class Doc_leave extends CI_Model
{
    
    function submit_leave($id)
    {
        $query=$this->db->get_where('Doc_profile',array('ID'=>$id));
         foreach($query->result_array() as $row)
             {
                 $retval=array(
                     'ID'=>$row['ID'],
                     //'Name'=>$row['Name'],
                     
                     //'Address'=>$row['Address'],
                     //'Mobile'=>$row['Mobile'],
                     //'Email'=>$row['Email'],
                    
                   
                 );
                  
                 
                   
             }
             $retval['From1']=$this->input->post('from');
             $retval['To1']=$this->input->post('to');
             $retval['Reason']=$this->input->post('reason');
             if($this->db->insert('Doc_leave',$retval))
             {   return TRUE;}
             else{
    return FALSE;}
    }
     function gettdb($str)
        {
            $query=$this->db->get($str);
            return $query->result_array();
        }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>