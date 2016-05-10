<html>
   <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
       <title>
           View and Edit
       </title>
   </head><?php echo validation_errors();?>
       <body>
           <?php 
           $str="index.php/Islogged_admin/insert_doc_details";        ?>
            <form  class="smart-green" action="<?php echo base_url();?><?php echo $str;?>" method="POST"  enctype="multipart/form-data">
          
                <p>
               
               Name<input type="text" name="name" value=""/></br>
               Username<input type="text" name="username" value=""/></br>
               Password<input type="password" name="password" value=""/></br>
               Address<input type="text" name="address" value=""/></br>
               Mobile<input type="text" name="mobile" value=""/></br>
               Email<input type="text" name="email" value=""/></br></br>
               <input type="file" name="picture" ></br>
               <input class="button" type="submit" name="Submit">
               </p>
           </form>
       </body>
</html>