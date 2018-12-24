<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" type="text/css" rel="stylesheet">
  <title>Η Κουκουβάγια - H Παραγγελία σας</title>
</head>
<body>
<div class="navigation">
<ul>
<li><a href="index.html">Αρχική</a></li>
<li><a href="contact.html">Επικοινωνία</a></li>
<li><a href="purchase.html">Αγορές</a></li>
<li><a href="search.php">Αναζήτηση Αγορών</a></li>
</ul>
</div>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teliki";
$conn = mysqli_connect($servername, $username, $password, $dbname);

 if (!$conn){
   die("Connection failed: " . mysqli_connect_error());
 }

 mysqli_set_charset($conn, "utf8");

for ($k=0; $k <=$_SESSION['total'] ; $k++) {
  $title = $_SESSION['titles'][$k];
  $number = $_SESSION['numbers'][$k];
  $email = $_SESSION['email'];
  $sql = "INSERT INTO teliki (TITLE,NUMBERS,EMAIL) VALUES ('$title','$number','$email')";
  $result = mysqli_query($conn,$sql);

}
 mysqli_close($conn);
 echo "<h3>Η παραγγελία σας καταχωρήθηκε με επιτυχία!</h3>";
 echo "<p>Σας ευχαριστούμε για τη προτίμηση.</p>";
 ?>
 </body>
 </html>
