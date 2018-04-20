<?php
$klantid     = $_POST["klantid"];
$verwijderen = $_POST["verwijder"];

if($verwijderen)
{
    require_once "connect.php";

    $sql = $conn->prepare("DELETE FROM klant WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "De gegevens zijn verwijderd. <br />";
}
else{
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='index.html'> terug naar het menu. <a/>";