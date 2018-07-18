<?php
    $conn = new mysqli('localhost','root','','senior_project');
    if ($conn->connect_error){
        die("Connection failed:". $conn->connect_error);
    }
    //echo "Connection successfully";
?>