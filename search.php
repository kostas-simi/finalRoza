<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" type="text/css" rel="stylesheet">
  <title>Η Κουκουβάγια - Αναζήτηση Αγορών</title>
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
<h2>Αναζήτηση Αγορών</h2>
<p>Για να αναζητήσετε τις αγορές σας παρακαλώ εισάγετε το e-mail σας.</p>
<form method="get">
  <label for="email">Το E-Mail σας εδώ:</label>
  <input type="text" name="email" placeholder="your@email.com">
  <input type="submit" id="submit" value="Εύρεση">
</form>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teliki";

if( isset($_GET['email'])){
  $email = $_GET['email'];

  $conn = mysqli_connect($servername, $username, $password, $dbname);

 if (!$conn){
   die("Connection failed: " . mysqli_connect_error());
 }
 mysqli_set_charset($conn, "utf8");
 $sql = "SELECT TITLE,NUMBERS FROM teliki WHERE EMAIL='".$email."'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result) > 0) {
   echo "<br>";
   echo "Για το e-mail: <b>".$email."</b> βρέθηκαν τα εξής αποτελέσματα.";
   echo "<table style='border:1px solid #298dd6'>";
   echo"<tr><th>ΤΙΤΛΟΣ</th><th>ΠΟΣΟΤΗΤΑ</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
 echo "<tr><td>".$row['TITLE']."</td>".
 "<td>".$row['NUMBERS']."</td></tr>";
 }
   echo "</table>" ;
 } else {
   echo "0 εγγραφές βρέθηκαν ";
 }
 mysqli_close($conn);

}


 ?>

</html>
