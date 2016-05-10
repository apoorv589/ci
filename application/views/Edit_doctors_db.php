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
    <th class="tg-yw4l">Username</th>
    <th class="tg-yw4l">Address</th>
    <th class="tg-yw4l">Mobile</th>
    <th class="tg-yw4l">Email</th>
    <th class="tg-yw4l">Picture</th>
    <th class="tg-yw4l">Edit : Delete</th>
  </tr>
<?php
  foreach($db as $rt)
{ ?>
    

  <tr>
    <td class="tg-yw4l"><?php echo $rt['ID'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Name'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Username'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Address'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Mobile'];?></td>
    <td class="tg-yw4l"><?php echo $rt['Email'];?></td>
    <td class="tg-yw4l"><img src="data:image/jpg;base64,<?php echo base64_encode($rt['Picture']); ?>" width="100px" height="100px"></td>
    <td class="tg-yw4l"><a href="<?php echo base_url();?>index.php/Islogged_admin/edit_doc/<?php echo $rt['ID'];?>">Edit   </a><a href="<?php echo base_url();?>index.php/Islogged_admin/delete_doc/<?php echo $rt['ID'];?>">Delete</a></td>
  </tr>
 <?php }
  ?>
  
</table>
    <a href="<?php echo base_url();?>index.php/Islogged_admin/insert_doc">Insert</a>
</body>
</html>