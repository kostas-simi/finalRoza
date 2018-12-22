<?
session_start();
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
 echo "ola kala";
 ?>
