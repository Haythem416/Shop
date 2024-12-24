<?php
include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con,"select * from prod where id=$ID");
$data=mysqli_fetch_array($up);



?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link  href="https://fonts.google.com/share?selection.family=Agu+Display|Cairo:wght@200..1000|Rubik:ital,wght@0,300..900;1,300..900">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>تاكيد شراء المنتج</title>
<style>
a{
    text-decoration:none;
    color:red;
    font-weight:bold;
margin:10px;
padding:10px;
}
input{
    Display:none;
}

.main{
width:30%;
padding:20px;
box-shadow:1px 1px 10px silver;
margin-top:50px;

}
</style>

</head>
<body>
    <center>

<div class="main">

<form action="insert_card.php" method="post">
<h2>هل فعلا تيد شراء المنتج</h2>

<input type="text" name="id" value='<?php  echo $data['id']?>'>
<input type="text" name="name" value='<?php echo $data['name_pro']?>'>
<input type="text" name="price" value='<?php echo $data['price_pro']?>'>
<button name="add" type="submit" class="btn btn-warning">تأكيد اضافة المنتج للعربه</button>
<br>
<a href="Shop.php">الرجوع لصفحة المنتجات</a>

</form>
</div>



    </center>
    
</body>
</html>