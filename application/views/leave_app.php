<html>
    <head> <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>
            Apply for leave.
        </title>
    </head>
    <?php echo validation_errors(); ?>
    <body>
   
    <a href="<?php echo base_url();?>index.php/Is_logged/leave_status/<?php echo $id;?>">Click Here to view approval status</a>
    

    <form action="<?php echo base_url();?>index.php/Is_logged/submit_leave/<?php echo $id;?>" method="POST" class="smart-green">
        <label><span>From :</span><input type="date" name ="from"/></label></br>
   
   <label><span>To   :</span>
        <input type="date" name="to"/></label></br>
    <label><span>Reason :</span>
        <input type="text" name="reason"/></br>
    </label>
        <input type="submit"  class="button" name="submit" value="Submit"/>
        </form>
        
       </body>
</html>