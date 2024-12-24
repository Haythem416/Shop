<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link  href="https://fonts.google.com/share?selection.family=Agu+Display|Cairo:wght@200..1000|Rubik:ital,wght@0,300..900;1,300..900">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prod_style.css">
    <title>products|المنتجات</title>
</head>
<body>
    <center>
<h3>All Products</h3>
</center>
<?php

include('config.php');

$result=mysqli_query($con,"SELECT * FROM prod");
while($row=mysqli_fetch_array($result))
{
  echo"
  
  <center>
<div class='main'>
    <div class='image'>
<img src='$row[image_pro]' alt='photo'>

        <p>'$row[name_pro]' </p>
         <p>$row[price_pro]</p>
    </div>
<button name='dele' id='del'><a href='delete.php? id=$row[id]'>delete</a></button>
<button name='upd' id='up'><a href='update.php? id=$row[id] '>update</a></button>
</div>
</center>";



}




?>
<!-- 
<center>
<div class="main">
   <div class="main_prod" >

   <button><a href="#">تعديل المنتج</a></button>
   <button><a href="#">حذف منتج</a></button>
   </div>
</div>
</center> -->






   
 <!-- <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"> </p>
       <a href="#" class="btn_add">اضافه منتج</a>
       <button><a href="#" class="btn_delete">حذف منتج</a></button>
  </div> -->
<!-- </div> -->


</body>

</html>