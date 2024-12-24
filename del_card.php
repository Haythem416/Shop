<?php
include('config.php');
$ID=$_GET['id'];
$dele="DELETE FROM addcard WHERE id =$ID ";

mysqli_query($con,$dele);

header('location: card.php');
?>