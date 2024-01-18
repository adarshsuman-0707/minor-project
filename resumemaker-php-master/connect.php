<?php
    $con =mysqli_connect("localhost","root","","resume");

    if(!$con){
        die("connection failed:".mysqli_connect_error());
    }
    
 ?>