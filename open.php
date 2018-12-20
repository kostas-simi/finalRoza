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
  $titles = $_POST['title'];
  $numbers = $_POST['number'];
  $i = $_POST['metritis'];
  echo ("<table>");
  for ($j=0; $j<=$i ; $j++) {
    echo ("<tr>");
    if ($titles[$j] == 'a') {
      echo ("<td>Ο Τελευταίος Πιστολέρο</td>");
    }elseif ($titles[$j] == 'b') {
      echo ("<td>Το Κάλεσμα Των Τριών</td>");
    }elseif ($titles[$j] == 'c') {
      echo ("<td>Οι Ρημαγμένοι Τόποι</td>");
    }elseif ($titles[$j] == 'd') {
      echo ("<td>Οι Λύκοι Της Κάλα</td>");
    }else{
      echo ("<td>Το Πράσινο Μίλι</td>");
    }
    echo ("<td>".$numbers[$j]."</td>");
    echo ("</tr>");
}
  echo ("</table>");


?>


</body>
</html>
