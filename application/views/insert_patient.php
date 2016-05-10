<html>
   <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
       <title>
           View and Edit
       </title>
   </head><?php echo validation_errors();?>
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
           $str="index.php/".$st."/insert_patient/".$id; 
           ?>
           <a href='<?php echo base_url();?>index.php/<?php echo "$st";?>/login1/<?php echo $id;?>'>Click for home</a>
            <form  class="smart-green" action="<?php echo base_url();?><?php echo $str;?>" method="POST"  enctype="multipart/form-data">
          
              <h1>Insert Patient Details</h1>
                
               </br>Name<input type="text" name="name" value=""/></br>
               Doctor_ID<input type="text" name="DID" value=""/><br/>
               Cond<input type="text" name="cond" value=""/></br>
               Appointment<input type="date" name="appoint" value=""/></br>
               
               Mobile<input type="text" name="mobile" value=""/></br>
               Email<input type="text" name="email" value=""/></br></br>
               Report<input type="file" name="report" ></br>
</br>               Bill<input type="file" name="bill" ></br>
</br>               <input class="button" type="submit" name="Submit">
               
           </form>
       </body>
</html>