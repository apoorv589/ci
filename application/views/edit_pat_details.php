<html>
   <heac><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
       <title>
           View and Edit
       </title>
       </head>
       <body>
           <?php 
           
           if($adm)
           {
               $st="Islogged_admin";
           }
           else
           {
               $st="Is_logged";
           }
         
               $str="index.php/".$st."/update_pat_details/".$ID;
               ?>
            <form class="smart-green" action="<?php echo base_url();?><?php echo $str;?>" method="POST"  enctype="multipart/form-data">
          <h1> Edit Details</h1>
              
               
               Name<input type="text" name="name" value="<?php echo $Name;?>"/></br>
               Condition<input type="text" name="cond" value="<?php echo $Cond;?>"/></br>               
               Appointment<input type="text" name="appoint" value="<?php echo $Appointment;?>"/></br>
               Mobile<input type="text" name="mobile" value="<?php echo $Mobile;?>"/></br>
               Email<input type="text" name="email" value="<?php echo $Email;?>"/></br>
               Report <input type="file" name="report" ></br></br>
               Bill <input type="file" name="bill" ></br></br>
               <input class="button" type="submit" name="Submit">
               
           </form>
       </body>
</html>