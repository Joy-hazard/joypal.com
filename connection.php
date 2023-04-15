<?php

$con = mysqli_connect('localhost', 'root', '', 'joy');

$phone = $_POST["phone"];
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];


$sql = "INSERT INTO feedback (phone, name, email, comment ) VALUES ('$phone', '$name','$email','$comment')";

$rs = mysqli_query($con,$sql);

if($rs)
{
    /*echo "Thank You for your Feedback.";*/
    header("location:#home");
    
}
else
{
    echo " Sending Failed !! Please Try Again !!";
}

?>