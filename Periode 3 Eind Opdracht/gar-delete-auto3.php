<?php
$autokenteken     = $_POST["autokenteken"];
$verwijderen = $_POST["verwijder"];

if($verwijderen)
{
    require_once "connect.php";

    $sql = $conn->prepare("DELETE FROM auto WHERE autokenteken = :autokenteken");
    $sql->execute(["autokenteken" => $autokenteken]);

    echo "De gegevens zijn verwijderd. <br />";
}
else{
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='index.html'> terug naar het menu. <a/>";