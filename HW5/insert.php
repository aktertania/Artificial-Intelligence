<?php
include('config.php');
    $name=$email=$gender=$birthday=$nationality="";
    $name = $_POST['name'];
    $email = $_POST['email'];    
    $adddata = "INSERT INTO patient(name, email) 
        VALUES('$name', '$email')";
    $res = mysqli_query($myconn, $adddata);
    if($res==true){
        echo "<h3>Data added successfully</h3>";
    } else {
        echo "<h4>Data is not added</h4>";
    }
?>