<html>
    <head>   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_doc_home.css">
        <title>
            Welcome Doc!
        </title>
       </head>
      <div id="header">
<h1>Login Home</h1>
</div>

<div id="nav">
       <h2><?php echo anchor('Islogged_admin/profile/'.$ID, 'Profile'); ?></h2><?php //<h2><?php echo 'Profile'?>
       <h2><?php echo anchor('Islogged_admin/doctors/'.$ID, 'Edit Doctors'); ?></h2>
      <h2><?php echo anchor('Islogged_admin/leave/'.$ID, 'Verify Leaves'); ?></h2>
       <h2><?php echo anchor('Islogged_admin/patient/'.$ID, 'Edit Patients'); ?></h2>
       <h2><?php echo anchor('Islogged_admin/complaint/'.$ID, 'View Complaints'); ?></h2>

</div>

<div id="section">
<h1>Welcome</h1>

</div>

<div id="footer">
An apple a day keeps doctor away.
</div>

</body>
       
   
    
       
</html>