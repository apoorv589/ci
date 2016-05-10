<html>
   <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
       <title> <?php echo validation_errors(); ?>
           View and Edit
       </title>
       </head><?php echo validation_errors(); ?>
       <body>
           <?php 
           if($admin===1)
           {
               $str="index.php/Islogged_admin/update_doc_details/".$ID;
           }
 else {
            $str="index.php/Is_logged/update_details/".$ID;
          ?>  <a href="<?php echo base_url();?>index.php/Is_logged/change_pass/<?php echo $ID;?>">Change Password</a>
            
        <?php };
           ?>
            <form  class="smart-green" action="<?php echo base_url();?><?php echo $str;?>" method="POST"  enctype="multipart/form-data">
          
              <h1>Details Form.</h1>
               
               <label> <span>Name</span><input type="text" name="name" value="<?php echo $Name;?>"/></br></label>
                <label> <span>Username</span><input type="text" name="username" value="<?php echo $Username;?>"/></br>               
                <label><span> Address</span><input type="text" name="address" value="<?php echo $Address;?>"/></br>
                <label><span> Mobile</span><input type="text" name="mobile" value="<?php echo $Mobile;?>"/></br>
             <label>  <span> Email</span><input type="text" name="email" value="<?php echo $Email;?>"/></br>
               <input type="file" name="picture" ><img src="data:image/jpg;base64,<?php echo base64_encode($Picture); ?>" width="100px" height="100px"></br>
               </br>
               <input type="submit" name="Submit" value="Send" class="button">
               
           </form>
       </body>
</html>