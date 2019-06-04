<p>Test</p>

<?php

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

echo "<br>";
echo generateRandomString();
echo "<br>";

function passwordCheck(){
  if (password_verify($password, $hash)) {
      return true;
  } else {
      return false;
    }
}

//Bis hierher ist nur ein Test

$dbhost = ''
$dbname = ''; // Hier Datenbankname rein
$dbuser = ''; // Hier User...
$dbpasswd = ''; // und passwort...

//Verbindungsaufbau
$connection = @mysql_connect($dbhost, $dbuser, $dbpasswd);
@mysql_select_db($dbname, $connection);




$suche =  $_POST['vorname'];
$abfrage = "SELECT * FROM Kunde WHERE Vorname LIKE '".mysql_real_escape_string($suche)."'";

$ergebnis = mysql_query($abfrage);

?>
