<?php   
$connection = new mysqli("localhost", "root", "", "bootstrapcrud");

if(!$connection){
    die(mysqli_error($connection));
    
}
?>