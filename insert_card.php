<?php

include('config.php');
if(isset($_POST['add']))
{
    $Name=$_POST['name'];
    $Price=$_POST['price'];
$insert="insert into addcard (name,price) values ('$Name','$Price')";
mysqli_query($con,$insert);
header('location: card.php');


}

?>