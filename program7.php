<!DOCTYPE html>
<html>
    <head>
        <title> DIGITAL CLOCK
        </title>
        <meta http-equiv="refresh" content="1" />
        <style> 
        p{
          color: maroon;
          font-size: 50px;
          position: absolute;
          top: 50%;
          bottom: 50%;
          left: 35%;
          right: 25%;
        }
        </style>

    </head>
<body>
<p>
<?php
date_default_timezone_set("Asia/Kolkata");
echo date("d/m/y::h:i:s A");
?>
</p>
</body>
</html>
