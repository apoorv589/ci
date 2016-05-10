<html>
   <heac> <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_doc_home.css">
       <title>
           View and Edit
       </title>
       </head>
       <body>
      
           <div id="header">
<h1>Your Profile</h1>
</div>
           
           <div id="nav"><br/><a class="button" href="<?php echo base_url();?>index.php/Is_logged/edit_details/<?php echo $ID;?>">Edit</a></div>
     <div id="section">
         <center><div class="block"><img border=3px class="cnt_img" src="data:image/jpg;base64,<?php echo base64_encode($Picture); ?>" width="150px" height="150px"></div> </center>    
   
   <div id="display">Doctor ID:</div><div id="display1"><?php echo $ID;?></div><br/>
      <div id="display">Name:</div><div id="display1"><?php echo $Name;?></div><br/>
      <div id="display">Username:</div><div id="display1"><?php echo $Username;?></div><br/>
      <div id="display">Address:</div><div id="display1"><?php echo $Address;?></div><br/>
      <div id="display">Mobile:</div><div id="display1"><?php echo $Mobile;?></div><br/>
      <div id="display">Email:</div><div id="display1"><?php echo $Email;?></div><br/>
      
           </div>
           
       </body>
       <div id="footer">
An apple a day keeps doctor away.
</div>
</html>