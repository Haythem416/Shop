<?php
include('config.php');

echo $id=$_GET['id'];

mysqli_query($con,"DELETE FROM prod WHERE id=$id");
header('location: products.php');

?>