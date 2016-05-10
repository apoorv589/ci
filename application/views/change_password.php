<html>
    <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>
            Change Password.
        </title>
    </head>
    <body>
        <form class='smart-green' action="<?php echo base_url();?>index.php/Is_logged/change_passw/<?php echo $id;?>" method="POST">
            <h1>Enter Password</h1>
            Old Password<input type="password" name="old"/><br/>
            New Password<input type="password" name="new"/><br/>
            Confirm Password<input type="password" name="conf"><br/>            
            <input type="submit" name="Submit" class="button">
        </form>
        
    </body>
</html>