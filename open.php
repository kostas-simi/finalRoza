<?php
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

<br>

  <h3>Έχετε επιλέξει τα ακόλουθα:</h3>

<?php
  $_SESSION['titles'] = $_POST['title'];
  $_SESSION['numbers'] = $_POST['number'];
  $_SESSION['total'] = $_POST['metritis'];

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
    }elseif ($_SESSION['titles'][$j] == 'e'){
      $_SESSION['titles'][$j] = "Το Πράσινο Μίλι";
      echo ("<td>Το Πράσινο Μίλι</td>");
    }
    echo ("<td>".$_SESSION['numbers'][$j]."</td>");
    echo ("</tr>");
}
  echo ("</table>");
  echo "<h3>Είστε σίγουροι για την παραγγελία?</h3>";
  echo "<a href='purchase.html'>Ακύρωση</a> ";
  echo "<input type='submit'id='submit' value='Καταχώρηση'> ";
  echo "</form>";


?>


</body>
</html>
