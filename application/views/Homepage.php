<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hospital Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_h.css" charset="utf-8">
</head>
<body>
<div id="wrapper">
  <div id="header"> </div>
  <div id="left">
    <div id="logo">
      <h1>Apollo Hospital</h1>
      <p>It's all possible</p>
    </div>
    <div id="nav">
      <ul>
        <li class="important"><a href="#">Home</a></li>
        <li><?php echo anchor("Doc_Login/login_form","Doctor");?></li>
       <li> <?php echo anchor("Doc_Login/patient","Patient");?></li>
        <li><?php echo anchor("Admin/admin","Admin");?></li>
        <li><a href="#">Solutions</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
    <div id="news">
      <h2>Latest News</h2>
      <h3>02/03/16</h3>
      <p>Latest developments on treatment by LZY surgery.</p>
      <div class="hr-dots"> </div>
      <h3>01/03/16</h3>
      <p>Journals published on Oncological research.</p>
      <p class="more"><a href="#">more</a></p>
    </div>
    <div id="support">
      <p>Call: +3265-9856-789</p>
    </div>
  </div>
  <div id="right">
    <h2>Welcome to Our Site!</h2>
    <div id="welcome"> <img src="<?php echo base_url();?>assets/images/pic_1.png" width="171" height="137" alt="Pic 1" class="left" />
      <p>Assuring. Advanced. Accessible.Our team of over 5000 doctors is capable of delivering the best treatments available across globe.
          Join us in giving you the best of modern healthcare to ensure you stay healthy, always.
.</p>
      <p>Come to us for a smooth treatment process forgetting the head aches of signing and filling forms.</p>
      <p>The most prestigious hospital in the country</p>
      <p class="more"><a href="#">more</a></p>
    </div>
    <h3>Hospital Profile</h3>
    <div id="profile">
      <div id="corp">
        <div id="corp-img"> Medical Building </div>
        <p>The best equipped building provided with a 24 hr running ER room.</p>
      </div>
      <div id="indu">
        <div id="indu-img"> Pharmacy</div>
        <p>All the prescriptions provided are easily available.</p>
      </div>
      <div class="clear"> </div>
      <p class="more"><a href="#">View Details</a></p>
    </div>
  </div>
  <div class="clear"> </div>
  <div id="spacer"> </div>
  <div id="footer">
    
    <div id="footerline"></div>
  </div>
</div>
</body>
</html>