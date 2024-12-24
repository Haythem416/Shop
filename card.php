<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link  href="https://fonts.google.com/share?selection.family=Agu+Display|Cairo:wght@200..1000|Rubik:ital,wght@0,300..900;1,300..900">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربة منتجاتي</title>
    <style>
main{
width:50%;
margin-top:30px;

}
table{
box-shadow:1px 1px 10px silver;

}
thead{
    background-color:gray ;
}
a{
    text-decoration:none;
    margin-top:20px;
    margin-bottom:20px;
}

    </style>

</head>
<body>
    <center>
        <h3 style=" font-weight:bold;">منتجاتك المحجوزه</h3>
    </center>
<?php
include('config.php');
$result=mysqli_query($con,"SELECT *FROM addcard ");

while($row=mysqli_fetch_array($result)){

echo"  
    <center>
<main>

<table class='table'>
<thead>
    <tr>
        <th scope='col'>product name</th>
        <th scope='col'>product price</th>
        <th scope='col'>delete product</th>
        
    </tr>
    <tbody>
        <td>$row[name]</td>
        <td>$row[price]</td>
        <td> <a href='del_card.php? id=$row[id]'' class='btn btn-danger'>ازاله</a></td>
    </tbody>
</thead>


</table>

</main>

    </center>


";

}

?>

<center>
<a href="Shop.php">الرجوع الي صفحة المنتجات</a>

</center>
</body>
</html>