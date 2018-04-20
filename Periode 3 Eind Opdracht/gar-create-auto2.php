<?php
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokenteken = $_POST["autokenteken"];
$autokmafstand = $_POST["autokmafstand"];

require_once("connect.php");

$sql = $conn->prepare
("INSERT INTO auto(automerk, autotype, autokenteken, autokmafstand) VALUES
(:automerk, :autotype, :autokenteken, :autokmafstand)");

$sql->bindParam(":automerk",       $automerk);
$sql->bindParam(":autotype",       $autotype);
$sql->bindParam(":autokenteken",   $autokenteken);
$sql->bindParam(":autokmafstand",  $autokmafstand);

$sql->execute();

echo "de auto is aangemaakt<br />";
echo "<a href='index.html'>terug naar het menu<a/>";