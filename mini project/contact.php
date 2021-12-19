<?php
    $user=$_POST['user_name'];
    $passwords=$_POST['password'];
    $emails =$_POST['email'];
    $conn =new mysqli('localhost','root','','logging');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into contact(user,passwords,emails)
        values(?,?,?)");
        $stmt->bind_param("sis",$user,$passwords,$emails);
        $stmt->execute();
        echo "<a href=index1.html>payment sucessfully....</a>";
        $stmt->close();
        $conn->close();
    }
?>