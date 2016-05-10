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
    <th class="tg-yw4l">ID</th>
    <th class="tg-yw4l">Leave_ID</th>
    <th class="tg-yw4l">Name</th>
    <th class="tg-yw4l">Address</th>
    <th class="tg-yw4l">Mobile</th>
    <th class="tg-yw4l">Email</th>
    <th class="tg-yw4l">From</th>
    <th class="tg-yw4l">To</th>
    <th class="tg-yw4l">Reason</th>
    
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"></th>
  </tr>
<?php
  foreach($db as $rt)
{ if($rt['Status']===NULL){
      
      ?>
    

  <tr>
    <td class="tg-yw4l"><?php echo $rt['ID'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Leave_ID'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Name'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Address'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Mobile'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Email'];?></td>
    <td class="tg-yw4l"><?php echo $rt['From1'];?></td>
    <td class="tg-yw4l"><?php echo $rt['To1'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Reason'];?></td>
     <th class="tg-yw4l">
         <form action ="<?php echo base_url();?>index.php/Islogged_admin/leave/<?php echo $rt['Leave_ID'];?>" method="POST">  
         <input type="radio" name="status" value="2"/>Deny
   <input type="radio" name="status" value="1"/>Allow</th>
    <th class="tg-yw4l"> <input type="submit" name="submit" value="Submit" />
        </form>
   </th>

  </tr>
<?php }}
  ?>
  
</table>
    
</body>
</html>