<html>
   
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>Login Page</title></head>
        <?php echo validation_errors(); ?><body>
           
    <form  class="smart-green" action="<?php echo base_url();?>index.php/Admin/login" method="POST"> 
     <h1>Please login</h1>
        <h3><label><span>UserName:</span></h3>
    <input type="text" name="username" id="username" /></br>
    <h3><label><span>Password:</span></h3>
    <input type="password"  name="password" id="password" /></br>
    

    <input type="submit" class="button" name="submit" value="Login" />
    
    

    </form>
        </body>
</html>
