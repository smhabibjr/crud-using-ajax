<?php
include "connect.php";

extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])  ){

    echo $nameSend;

    $sql = "INSERT INTO `crud`(name, email, mobile, place) values ('$nameSend', '$emailSend', '$mobileSend', '$placeSend')";
    $result = mysqli_query($connection, $sql);
}










?>

