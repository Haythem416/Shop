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

<center>
    <div class="main">
<form action="insert.php" method="post" enctype="multipart/form-data">
<h2 >Online Shop</h2>
<img src="image\img1.jpg" alt="Photo Shop " width="450px">
<input type="text" name="name" placeholder="Name">
<br>
<input type="text" name="price" placeholder="Price">
<br>
<input type="file" id="file" name="photo" style="display:none;" >
<label for="file">Select Product Image </label>
<button name="submit">Save</button>
<br>
<br>
<a href="products.php">Show All Products</a>

</form>
      </div>
</center>
    

</body>
</html>