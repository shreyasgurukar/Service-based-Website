<?php
    $userName =$_POST['Customer_id'];
    $Passwords =$_POST['Password'];
    $conn =new mysqli('localhost','root','','logging');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into log_in(userName,Passwords)
        values(?,?)");
        $stmt->bind_param("si",$userName,$Passwords);
        $stmt->execute();
        echo "<a href=index.html>loging sucessfully</a>";
        $stmt->close();
        $conn->close();
    }
?>