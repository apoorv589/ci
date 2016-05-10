<html>
    <head>
        <title>
            Table
        </title>
    
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-yw4l{vertical-align:top}
    </style></head>
<body>
<table class="tg">
  <tr>
    <th class="tg-yw4l">Leave_ID</th>
    <th class="tg-yw4l">From</th>
    <th class="tg-yw4l">To</th>
    <th class="tg-yw4l">Reason</th>
    
    <th class="tg-yw4l">Edit : Delete</th>
  </tr>

    <?php
$con=$db['doc_id']['doc_id'];


  foreach($db as $rt)
{ 
     if($db['doc_id']!=$rt){
      $m= $rt['ID'];
     
      if($m===$con){
      
      
 ?>
  <tr>

    
    <td class="tg-yw4l"><?php echo $rt['Leave_ID'];?></td>
    <td class="tg-yw4l"><?php echo $rt['From1'];?></td>
    <td class="tg-yw4l"><?php echo $rt['To1'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Reason'];?></td>
    <?php if($rt['Status']==1){?><td class="tg-yw4l">Access Granted</td><?php } ?>
     <?php if($rt['Status']==2){?><td class="tg-yw4l">Denied</td><?php } ?>
     <?php if($rt['Status']===NULL){?><td class="tg-yw4l">Pending</td><?php } ?>
   </tr>
<?php }}}
  ?>
  
</table>
   
</body>
</html>