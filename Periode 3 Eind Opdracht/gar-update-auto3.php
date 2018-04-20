<?php
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokenteken = $_POST["autokenteken"];
$autokmafstand = $_POST["autokmafstand"];
$klantid = $_POST["klantid"];

require_once "connect.php";

$sql = $conn->prepare(
    "UPDATE auto SET automerk = :automerk, autotype = :autotype, autokenteken = :autokenteken, autokmafstand = :autokmafstand 
              WHERE klantid = :klantid");
$sql->execute(["automerk" => $automerk, "autotype" => $autotype, "autokenteken" => $autokenteken, "autokmafstand" => $autokmafstand, "klantid" => $klantid]);

echo "De auto is gewijzigd. <br />";
echo "<a href='index.html' terug naar het menu <a/>";