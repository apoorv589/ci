<html>
   <heac><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_doc_home.css">
       <title>
           Profile
       </title>
       </head>
       <body>
                <div id="header">
<h1>Your Profile</h1>
</div>
           
            <div id="nav"><div class="button"><?php echo anchor("Islogged_admin/edit_details/".$ID,'EDIT');?></div></div>
            <div id="section" class="doc_profile">
                 <center><img border=3px class="cnt_img" src="data:image/jpg;base64,<?php echo base64_encode($Picture); ?>"  width="150px" height="150px"> </center>    
   </br>
   <div id="display">Admin ID:</div><div id="display1"><?php echo $ID;?></div></br>
     <div id="display">Name:</div><div id="display1"><?php echo $Name;?></div></br>
     <div id="display">Username:</div><div id="display1"><?php echo $Username;?></div></br>
      <div id="display">Address:</div><div id="display1"><?php echo $Address;?></div></br>
      <div id="display">Mobile:</div><div id="display1"><?php echo $Mobile;?></div></br>
      <div id="display">Email:</div><div id="display1"><?php echo $Email;?></div></br>
  </div>
       </body> <div id="footer">
An apple a day keeps doctor away.
</div>
</html>