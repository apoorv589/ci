<?php
    class Doc_profile_model extends CI_Model
    {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function display($id)
        {
         
            $this->db->where('ID',$id);
            $this->db->select('ID,Name,Username,Address,Mobile,Email,Picture')->from('Doc_profile')->join('Doctor_DB','ID','natural');
            $query=$this->db->get();
            //return $query->result_array();
            
        
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
        function display_pat($id)
        {
            $query = $this->db->get_where('Patient', array('ID' => $id));
           // $q=$query->result_array() ;
             foreach($query->result_array() as $row)
             {
                 $retval=array(
                     'ID'=>$row['ID'],
                     'Name'=>$row['Name'],
                     'Cond'=>$row['Cond'],
                     'Appointment'=>$row['Appointment'],
                     'Mobile'=>$row['Mobile'],
                     'Email'=>$row['Email'],
                     'Report'=>$row['Report'],
                      'Bill'=>$row['Bill']
                 );       
                   
             } return $retval;
        }
        function insert_patient()
        {
              $content=null;
          
           if($_FILES['report']['tmp_name'])
           {
            $content=file_get_contents($_FILES['report']['tmp_name']);
           }
           if(!$content)
            {
      
                $q1=$this->db->from('Patient')->where('ID',$id)->get();
                $a=$q1->row_array();
                $content=$a['Report'];
            }
             $cont=null;
          
           if($_FILES['bill']['tmp_name'])
           {
            $cont=file_get_contents($_FILES['bill']['tmp_name']);
           }
           if(!$cont)
            {
      
                $q1=$this->db->from('Patient')->where('ID',$id)->get();
                $a=$q1->row_array();
                $cont=$a['Bill'];
            }
          $query=$this->db->insert('Patient',array(
               'Name'=>$this->input->post('name'),
               'Cond'=>$this->input->post('cond'),
              'Appointment'=>$this->input->post('appoint'),
               
               'Mobile'=>$this->input->post('mobile'),
               'Email'=>$this->input->post('email'),
                'Report'=>$content,
              'file_name'=>$_FILES['report']['name'],
              'file_size'=>$_FILES['report']['size'],
              'type'=>$_FILES['report']['type'],
              'Bill'=>$cont,
               'bill_name'=>$_FILES['bill']['name'],
              'bill_size'=>$_FILES['bill']['size'],
              'bill_type'=>$_FILES['bill']['type']
               
           ));
          $query = $this->db->get_where('Patient', array('Mobile' => $this->input->post('mobile')));
           
             foreach($query->result_array() as $row)
             {
                 $this->db->insert('Treat',array('PID'=>$row['ID'],'DID'=>$this->input->post('DID')));
             }
          
        }
        function patient_down($id)
        {

// if id is set then get the file with the id from database

//include 'library/config.php';
//include 'library/opendb.php';
//$id    = $_GET['id'];
$query = "SELECT file_name, type, file_size, Report " .
         "FROM Patient WHERE ID = '$id'";

//$result = mysqli_query($query) or die('Error, query failed');
$result=$this->db->query($query);
//list($name, $type, $size, $content) =  $result->result_array();
foreach($result->result_array() as $row)
{
    $name=$row['file_name'];
    $type=$row['type'];
    $size=$row['file_size'];
    $content=$row['Report'];
}

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

//include 'library/closedb.php'; 
exit;



        }
        function patient_bill_down($id)
        {
$query = "SELECT bill_name, bill_type, bill_size, Bill " .
         "FROM Patient WHERE ID = '$id'";

//$result = mysqli_query($query) or die('Error, query failed');
$result=$this->db->query($query);
//list($name, $type, $size, $content) =  $result->result_array();
foreach($result->result_array() as $row)
{
    $name=$row['bill_name'];
    $type=$row['bill_type'];
    $size=$row['bill_size'];
    $content=$row['Bill'];
}

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

//include 'library/closedb.php'; 
exit;



        }
    }
?>