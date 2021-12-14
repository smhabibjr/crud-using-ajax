<?php
include "connect.php";

extract($_POST);

if(isset($_POST['deleteSend'])){
    $unique = $_POST['deleteSend'];

    $deleteSql = "DELETE FORM `crud` where id = $unique";
    $deleteResult = mysqli_query($connection, $deleteSql);
}




?>