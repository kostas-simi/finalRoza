<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Η Κουκουβάγια - Αρχική</title>
  </head>
<body>
  <h3>Έχετε επιλέξει τα ακόλουθα:</h3>

<?php
  $_SESSION['titles'] = $_POST['title'];
  $_SESSION['numbers'] = $_POST['number'];
  $_SESSION['total'] = $_POST['metritis'];
  // $_SESSION['titles'] = $_SESSION['titles'];
  // $_SESSION['numbers'] = $_SESSION['numbers'];
  // $_SESSION['total'] = $_SESSION['total'];
  echo "<form method='get' action='insert.php'>";
  $_SESSION['email'] = $_POST['email'];
  echo ("<table>");
  for ($j=0; $j<=$_SESSION['total'] ; $j++) {
    echo ("<tr>");
    if ($_SESSION['titles'][$j] == 'a') {
      $_SESSION['titles'][$j] = "Ο Τελευταίος Πιστολέρο";
      echo ("<td>Ο Τελευταίος Πιστολέρο</td>");
    }elseif ($_SESSION['titles'][$j] == 'b') {
      $_SESSION['titles'][$j] = "Το Κάλεσμα Των Τριών";
      echo ("<td>Το Κάλεσμα Των Τριών</td>");
    }elseif ($_SESSION['titles'][$j] == 'c') {
      $_SESSION['titles'][$j] = "Οι Ρημαγμένοι Τόποι";
      echo ("<td>Οι Ρημαγμένοι Τόποι</td>");
    }elseif ($_SESSION['titles'][$j] == 'd') {
      $_SESSION['titles'][$j] = "Οι Λύκοι Της Κάλα";
      echo ("<td>Οι Λύκοι Της Κάλα</td>");
    }else{
      $_SESSION['titles'][$j] = "Το Πράσινο Μίλι";
      echo ("<td>Το Πράσινο Μίλι</td>");
    }
    echo ("<td>".$_SESSION['numbers'][$j]."</td>");
    echo ("</tr>");
}
  echo ("</table>");
  echo "<h3>Είστε σίγουροι για την παραγγελία?</h3>";
  echo "<a href='purchase.html'>Ακύρωση</a> ";
  echo "<input type='submit' value='Καταχώρηση'> ";
  echo "</form>";

/*
  DATABASE CONNECTION
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "teliki";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

   if (!$conn){
     die("Connection failed: " . mysqli_connect_error());
   }

   mysqli_set_charset($conn, "utf8");

  for ($k=0; $k <$_SESSION['total'] ; $k++) {
    $sql = "INSERT INTO teliki (TITLE,NUMBERS,EMAIL) VALUES ('$_SESSION['titles'][$k]','$_SESSION['numbers'][$k]','$_SESSION['email']')";
    $result = mysqli_query($conn,$sql);

  }
   mysqli_close($conn);

*/
?>


</body>
</html>
