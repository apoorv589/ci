<html>
    <head>
        <style type="text/css">
            #cent{
                margin-top: 200px;
                margin-left: 500px;
                height: 50px;
                width: 300px;
                background-color: #ffa;
                color: #9DC45F;
                padding-top: 10px;
            }
            a{
                color: #9DC45F;
            }
        </style>
        <title>
            Your Schedule
        </title>
    </head>
    <body>
        <h2><div id="cent"><?php if($lg) ?><a href="<?php echo base_url();?>index.php/Mycal/display">View and Edit your schedule</a></div></h2>
    </body>
</html>