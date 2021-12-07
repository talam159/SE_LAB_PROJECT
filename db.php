<?php
$con= mysqli_connect("localhost","root","","musiconnect");
if(mysqli_connect_errno()){
    //failed
    echo 'failed to connect to MySQL', mysqli_connect_errno();
}
?>