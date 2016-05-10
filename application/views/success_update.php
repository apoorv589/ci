
<html>
    <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>
            
        </title>
    <body class="bg"><h3>
        <?php
echo $admin;
if($admin)
{
    $str="Islogged_admin";
}
else
{
    $str="Is_logged";
}
echo "Database updated succesfully";?></br><?php
 echo anchor($str.'/login1/'.$id,'Home');
?></h3>
    </body>
    </head>
</html>

