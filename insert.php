<?php
include('config.php');

if(isset($_POST['submit']))
{
$name=strip_tags($_POST['name']);
$price=$_POST['price'];
$image=$_FILES['photo'];
$image_location=$_FILES['photo']['tmp_name'];
$image_name=$_FILES['photo']['name'];
$image_up="images/".$image_name;
$insert="INSERT INTO prod(name_pro,price_pro,image_pro) VALUES ('$name','$price','$image_up')";

mysqli_query($con,$insert);
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



?>