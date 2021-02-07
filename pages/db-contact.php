<html>
<head>
<title>Flower Shop Prishtina</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">
</head> 
<body>
<?php
require_once('../../mysqli_connect.php');
$query = "SELECT * FROM Kontakti";
$response = @mysqli_query($dbc, $query);
if($response){ 
   echo "<div class='produktet'>";
    while($row = mysqli_fetch_array($response)){
        echo "<div class='produkti'>"; 
        echo "<div class='emri-kontakti'>".$row['Emri_kontakti'] . "</div>" ;
        echo "<div class='mbiemri-kontakti'>".$row['Mbiemri_kontakti'] . "</div>" ;
        echo "<div class='telefoni-kontakti'>".$row['Telefon_kontakti'] . "</div>" ;
        echo "<div class='email-kontakti'>".$row['Email_kontakti'] . "</div>" ;
        echo "<div class='subject-kontakti'>".$row['Subject_kontakti'] . "</div>" ;
        echo "<div class='message-kontakti'>".$row['Message_kontakti'] .  "</div>" ; 
        echo "</div>";
      }echo "</div>";
}
?>
<div class="back-button">
    <a href="dashboard.php">Back to dashboard</a>
</div>
</body>