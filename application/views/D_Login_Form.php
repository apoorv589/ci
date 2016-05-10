<html>
   
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>Login Page</title></head>
        <?php echo validation_errors(); ?>
    <body>
         
    <form  class="smart-green" action="<?php echo base_url();?>index.php/Doc_Login/login" method="POST"> 
    <h1>Please login</h1>
    <h3>UserName:</h3>
    <input type="text" name="username" id="username" /></br>
    <h3>Password:</h3>
    <input type="password"  name="password" id="password" /></br>
    <input class="button" type="submit" name="submit" value="Login" />  
    </form>
        </body>
</html>
