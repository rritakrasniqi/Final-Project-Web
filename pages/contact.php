<?php include('C:/xampp/htdocs/Web-Projekti/includes/server.php') ?>
<!DOCTYPE html>
<html lang="">

<head>
<title>Register | Page | Flower Shop</title>
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
        <li><a href="Upload_pdf.php">Upload</a></li>
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

<div class="wrapper row3" style="background: url(../images/demo/g1.png);">
  <main class="hoc container clear" > 
   
    <div class="content">
	
        <div class="centered-form">
		    <h6>CONTACT</h6>

		     <form method="post" action="contact.php">
                <label class="label">Name:</label>
                <input class="input" name="Name" type="text">

                <label class="label">Surname:</label>
                <input class="input" name="Surname" type="text">
				
				<label class="label">Email:</label>
                <input class="input" name="Email" type="text">
			
				<label class="label">Phone Number:</label>
                <input class="input" name="PhoneNumber" type="phone">
				
				<label class="label">Mesazhi:</label>
                <textarea class="input" name="Mesazhi" type="text"></textarea>
			
                <button class="btn submitbutton" type="submit" name="contact_user" >Submit</button>
        </form>
			</div>
    </div>
   
    <div class="clear"></div>
  </main>
  <div class="wrapper bgded overlay" >
    <article class="hoc container clear"> 
      
        <h6 class="nospace">You can find us online</h6>
     
       </article>
  </div>
</div>

<footer>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2020 - Rights Reserved  </p>
    <p class="fl_right"> Flower Shop Prishtina</p>
  </div>
</div>

</footer>
<script src="../layout/scripts/script.js"></script>
</html>