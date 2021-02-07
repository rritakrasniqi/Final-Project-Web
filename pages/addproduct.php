<?php include('C:/xampp/htdocs/Web-Projekti/includes/server.php') ?>
<!DOCTYPE html>
<html lang="">

<head>
  <title>Add Product | Page | Flower Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">

      <div class="fl_left">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@FlowerShop.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="../index.php"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="addproduct.php">Add product</a></li>
          <li><i class="fa fa-shopping-cart"></i>shopping cart</li>
        </ul>
      </div>

    </div>
  </div>

  <div class="wrapper row1">
    <header id="header" class="hoc clear">

      <div id="logo" class="fl_left">
        <h1><a href="../index.php">Flower Shop</a></h1>
      </div>

    </header>
  </div>

  <div class="wrapper row3" style="background: url(../images/demo/w1.png);">
    <main class="hoc container clear">

      <div class="content">

        <div class="addProductForm">

          <h6 style="margin-left:350px">ADD PRODUCT</h6>

          <form style="margin-left:350px" method="post" action="addproduct.php">

            <label class="label">Product name:</label>
            <input class="input" name="ProductName" type="text">

            <label class="label">Product description:</label>
            <textarea class="input" name="ProductDescription" type="text"></textarea >

            <label class="label">Price:</label>
            <input class="input" name="ProductPrice" type="number">

            <label class="label">Image:</label>
            <input type="file" id="ProductImage" name="ProductImage" multiple>

            <button class="btn submitbutton" type="submit" name="addFlower">Submit</button>
          </form>

        </div>
      </div>
    </main>
    <div class="wrapper bgded overlay">
      <article class="hoc container clear">
        <h6 class="nospace">You can find us online</h6>
      </article>
    </div>
  </div>

  <footer>
    <div class="wrapper row5">
      <div id="copyright" class="hoc clear">

        <p class="fl_left">Copyright &copy; 2020 - Rights Reserved </p>
        <p class="fl_right"> Flower Shop Prishtina</p>
      </div>
    </div>

  </footer>
  <script src="../layout/scripts/script.js"></script>

</html>