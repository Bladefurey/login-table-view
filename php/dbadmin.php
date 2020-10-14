<?php
    $dbServerName="localhost";
    $dbUserName="root";
    $dbPassword="";
    $dbName="admin";
    $connection=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
    if(!$connection){
        die("Connection Failed! : ".mysqli_connect_error());
    }
?>