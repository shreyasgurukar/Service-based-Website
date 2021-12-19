<?php
    $cardname =$_POST['cardname'];
    $cardnumber =$_POST['cardnumber'];
    $expmonth =$_POST['expmonth'];
    $expyear =$_POST['expyear'];
    $cvv =$_POST['cvv'];
    $conn =new mysqli('localhost','root','','payment_list');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into payment(cardname,cardnumber,expmonth,expyear,cvv)
        values(?,?,?,?,?)");
        $stmt->bind_param("sssii",$cardname,$cardnumber,$expmonth,$expyear,$cvv);
        $stmt->execute();
        echo "payment sucessfully....";
        $stmt->close();
        $conn->close();
    }
?>