<?php
$klantid = $_POST["klantid"];

require_once "connect.php";

$klanten = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

echo "<table>";
foreach ($klanten as $klant)
    {
        echo "<tr>";
        echo "<td>" . $klant["klantid"]       . "</td>";
        echo "<td>" . $klant["klantnaam"]     . "</td>";
        echo "<td>" . $klant["klantadres"]    . "</td>";
        echo "<td>" . $klant["klantpostcode"] . "</td>";
        echo "<td>" . $klant["klantplaats"]   . "</td>";
        echo "</tr>";
    }

    echo "</table><br />";

    echo "<form action='gar-delete-klant3.php' method='post'>";

    echo "<input type='hidden' name='klantid' value=$klantid>";

    echo "<input type='hidden' name='verwijder' value='0'>";
    echo "<input type='checkbox' name='verwijder' value='1'>";
    echo "Verwijder deze klant. <br />";
    echo "<input type='submit'>";
    echo "</form>";