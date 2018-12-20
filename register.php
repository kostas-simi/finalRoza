<?php
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "teliki";
  $email = $_POST["email"];
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
for ($i=0; $i <$_POST["metritis"] ; $i++) {

<script>
  $titloi = document.getElementById('titloi'+.$i.+'').innerHTML;
  $posotita = document.getElementById('posotita'+.$i.+'').innerHTML;

</script>



  // $titloi ="<script>document.getElementById('titloi+".$i."+').innerHTML;</script>";
  // $posotita ="<script>document.getElementById('posotita+".$i."+').innerHTML;</script>";
  $sql = "INSERT INTO teliki (TITLE,NUMBERS,EMAIL) VALUES ('$titloi','$posotita','$email')";
  $result = mysqli_query($conn,$sql);

}




mysqli_close($conn);



 ?>
