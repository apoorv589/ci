<html>
    <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form_style.css">
        <title>
            Complaint
        </title>
    </head>
    <body>
        <form class="smart-green" action="<?php echo base_url();?>index.php/Doc_Login/file_complaint/<?php echo $id;?>" method="POST">
            <label><span>Category</span><select name="category">
  <option value="Doctor">Doctor</option>
  <option value="Service">Services</option>
  <option value="Facility">Facility</option>
</select></br></label>
<label><span>Complaint</span><input type="text" name="complaint"/></br></label>
            <input type="submit" class="button" name="Submit" value="Submit"/>
        </form>
    </body>
</html>