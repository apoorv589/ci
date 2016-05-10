<?php

class Mycal_model extends CI_Model
{
    var $conf;
    function __construct()
    {
        parent::__construct();
 $this->load->database();
        $this->load->helper('url');
        $this->conf=array(
                        'start_day'=>'sunday',
                        'show_next_prev'=> true,
                        'next_prev_url'=> base_url().'index.php/Mycal/display');
     
 /*   function get_calendar_data($year,$month)
    {
        $query=$this->db->select('date,data')->from('calendar')
                ->like('date',"$year-$month",'after')->get();
        $cal_data=array();
        foreach ($query->result() as $row)
        {
            if(substr($row->date,8,1)==0)
            {
                $cal_data[substr($row->date,9,1)]=$row->data;
            }
            else     
             {
                $cal_data[substr($row->date,8,2)]=$row->data;
            }
            }
        return $cal_data;
    }*/
    
     $this->conf['template'] = '

        {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td>{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}<a href="getiti/{content}"><div class="day_num">{day}</div></a>{/cal_cell_content}
        {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

        {cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
';}
function add_diary_data($date,$data,$time1,$id)
{      $where=array('ID'=>$id,'date'=>$date,'time1'=>$time1);
        
    if($this->db->select('date')->from('calendar')->where($where)->count_all_results())
    {       
     $this->db->where($where)
             ->update('calendar',array('ID'=>$id,
         'date'=>$date,
         'data'=>$data,
             'time1'=>$time1
     ))   ;
    }
    else 
    {
            $this->db->insert(
            'calendar',array(
                'ID'=>$id,
                'date'=>$date,
                'data'=>$data,
                'time1'=>$time1
            )
            ); 
            
    }
}
function read_diary_data($get,$doc_id)
{   echo $get;
    $query=$this->db->get('calendar');
    $retval=array('d1'=>null,'d2'=>null,'d3'=>null,'d4'=>null,'d5'=>null,'d6'=>null);
   foreach($query->result_array() as $row)
   {    
       if($row['date']==$get&&$doc_id==$row['ID'])
       {
           $retval['d'.$row['time1']]=$row['data'];
       }
  
      
   }
   // print_r($retval);
   return $retval;
}
        function generate($year,$month)
    {    $this->load->library('calendar',$this->conf);
  //  $cal_data=$this->get_calendar_data($year, $month);
   for($i=1;$i<=31;$i++)
   { 
       if(1<=$i&&$i<10)
       {
           $cal_data[$i]=$year.'-'.$month.'-0'.$i;
       }
       else
       {
           $cal_data[$i]=$year.'-'.$month.'-'.$i;
       }
   }
  // $this->add_diary_data('2016-05-19', 'Some more test');
     
        return $this->calendar->generate($year,$month,$cal_data);
    }
}

