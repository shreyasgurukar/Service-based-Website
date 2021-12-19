<?php
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email_id =$_POST['email'];
    $message=$_POST['message'];
    $conn =new mysqli('localhost','root','','logging');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into sign(firstname,lastname,email_id,message)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstname,$lastname,$email_id,$message);
        $stmt->execute();
        echo "<a href=index.html>informed sucessfully....</a>";
        $stmt->close();
        $conn->close();
    }
?>