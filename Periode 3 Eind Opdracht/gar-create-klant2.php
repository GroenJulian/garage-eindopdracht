<?php
$klantid = NULL;
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantplaats = $_POST["klantplaats"];

require_once("connect.php");

$sql = $conn->prepare
("INSERT INTO klant(klantid, klantnaam, klantadres, klantpostcode, klantplaats) VALUES
(:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");

$sql->bindParam(":klantid",         $klantid);
$sql->bindParam(":klantnaam",       $klantnaam);
$sql->bindParam(":klantadres",      $klantadres);
$sql->bindParam(":klantpostcode",   $klantpostcode);
$sql->bindParam(":klantplaats",     $klantplaats);

$sql->execute();

echo "de gebruiker is aangemaakt<br />";
echo "<a href='index.html'>terug naar het menu<a/>";