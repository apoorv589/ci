<html>
    <head>   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_doc_home.css">
        <title>
            Welcome Doc!
        </title>
       </head>
      <body>

<div id="header">
<h1>Login Home</h1>
</div>

<div id="nav">
    <h4><?php echo anchor('Is_logged/profile/'.$ID, 'Profile'); ?></h4><?php //<h2><?php echo 'Profile'?>
       <h4><?php echo anchor('Is_logged/schedule/'.$ID, 'Schedule'); ?></h4>
       <h4><?php echo anchor('Is_logged/leave/'.$ID, 'Apply for Leave'); ?></h4>
      <h4><?php echo anchor('Is_logged/patient/'.$ID, 'Patient'); ?></h4>
</div>

<div id="section">
<h1>Welcome</h1>

</div>

<div id="footer">
An apple a day keeps doctor away.
</div>

</body>

       
   
  
       
</html>