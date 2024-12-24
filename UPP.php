<?php
include('config.php');

if(isset($_POST['upd']))
{
    $ID=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['photo'];
$image_location=$_FILES['photo']['tmp_name'];
$image_name=$_FILES['photo']['name'];
$image_up="images/".$image_name;
$update="UPDATE prod SET name_pro='$name' ,price_pro='$price' WHERE id=$ID";

mysqli_query($con,$update);
if(move_uploaded_file($image_location,'images/'.$image_name))
{
    echo"<script>alert('تم رفع المنتج بنجاح')</script>";
}
else
{
    echo"<script>alert('خطأ :: لم يتم رفع المنتج')</script>";
}

header('location: index.php');

}