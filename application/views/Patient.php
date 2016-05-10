<html>
    <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>
            Welcome
        </title>
      </head>
      <form class="smart-green" action="<?php echo base_url();?>index.php/Doc_Login/patient_login" method='POST'>
          <label><span>Patient ID </span><input  type="text" name='pid' /></label></br>
          <input type="submit"  class ="button" value="Submit">
          </form>
</html>