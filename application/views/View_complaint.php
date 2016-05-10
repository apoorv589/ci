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
    <th class="tg-yw4l">Name</th>
    <th class="tg-yw4l">Cond</th>
    <th class="tg-yw4l">Mobile</th>
    <th class="tg-yw4l">Email</th>
    <th class="tg-yw4l">Category</th>
    <th class="tg-yw4l">Complaint</th>
    <th class="tg-yw4l">Edit : Delete</th>
  </tr>
<?php
if($db['doc_id']['adm'])
{
    $str="Islogged_admin";
}
else
{ $str="Is_logged";
}
  foreach($db as $rt)
  
{ if($rt!=$db['doc_id']){?>
    

  <tr>
    <td class="tg-yw4l"><?php echo $rt['ID'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Name'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Cond'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Mobile'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Email'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Category'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Complaint'];?></td>
    <td class="tg-yw4l"><a href="<?php echo base_url();?>index.php/<?php echo $str;?>/delete_complaint/<?php echo $rt['CID'];?>/<?php echo $db['doc_id']['doc_id'];?>">Delete</a></td>
  </tr>
<?php }}
  ?>
  
</table>
   
</body>
</html>