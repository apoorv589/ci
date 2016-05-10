<html>
   <heac><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
       <title>
           View and Edit
       </title>
   </head><?php echo validation_errors();?>
       <body>
            <form  class="smart-green" action="<?php echo base_url();?>index.php/Islogged_admin/update_details/<?php echo $ID;?>" method="POST"  enctype="multipart/form-data">
          
              <h1>Edit</h1>
               
               Name<input type="text" name="name" value="<?php echo $Name;?>"/></br>
               Username<input type="text" name="username" value="<?php echo $Username;?>"/></br>
               Address<input type="text" name="address" value="<?php echo $Address;?>"/></br>
               Mobile<input type="text" name="mobile" value="<?php echo $Mobile;?>"/></br>
               Email<input type="text" name="email" value="<?php echo $Email;?>"/></br>
               <input type="file" name="picture" ><img src="data:image/jpg;base64,<?php echo base64_encode($Picture); ?>" width="100px" height="100px"></br>
               <input type="submit" class="button" name="Submit">
               
           </form>
       </body>
</html>