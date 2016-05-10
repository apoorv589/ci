<html>
    <head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_doc_home.css">
        <title>
            View Details
        </title>
    </head>
    <body><div id="header"><h2>Details<h2></div>
        <?php// echo $ID.$Name.$Cond.$Appointment;?>
             <div id="nav">
      <a href="<?php echo base_url();?>index.php/Doc_Login/patient_down/<?php echo $ID;?>">Report</a></br>
      <a href="<?php echo base_url();?>index.php/Doc_Login/patient_bill_down/<?php echo $ID;?>">Bill</a></br>
      <a href="<?php echo base_url();?>index.php/Doc_Login/complaint/<?php echo $ID;?>">Fill a complaint</a></br>
          </div>
      <div id="section">
          <div id="display">ID:</div><div id="display1"><?php echo $ID?></div><br/>
          <div id="display"> Name:</div><div id="display1"><?php echo $Name?></div><br/>
          <div id="display">Condition:</div><div id="display1"><?php echo $Cond?></div><br/>
          <div id="display">Appointment:</div><div id="display1"><?php echo $Appointment?></div><br/>
      </div>    
    </body>
    <div id="footer">An apple a day keeps the doctor away.</div>
</html>