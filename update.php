<!DOCTYPE html>
<html lang="en">
<head>
    <link  href="https://fonts.google.com/share?selection.family=Agu+Display|Cairo:wght@200..1000|Rubik:ital,wght@0,300..900;1,300..900">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Online Shop</title>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up=mysqli_query($con,"SELECT * FROM prod WHERE id=$ID ");
    $data=mysqli_fetch_array($up);
    
    
    
    
    ?>

<center>
    <div class="main">
<form action="UPP.php" method="post" enctype="multipart/form-data">
<h2 >Update products</h2>
<input type="text" name="name" placeholder="Name" value=<?php echo$data['name_pro'];?>>
<br>
<input type="text" name="price" placeholder="Price" value=<?php echo$data['price_pro']?>>
<br>
<input type="text" name="id" placeholder="Id" value=<?php echo$data['id']?>>
<br>
<input type="file" id="file" name="photo" style="display:none;" >
<label for="file">Update Image </label>
<button name="upd" type="submit" >Update</button>
<br>
<br>
<a href="products.php">Show All Products</a>

</form>
      </div>
</center>
    

</body>
</html>