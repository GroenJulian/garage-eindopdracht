<?php
require_once "connect.php";

$sql = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant");
$sql->execute();

echo "<table>";
    foreach ($sql as $rij)
    {
        echo "<tr>";
        echo "<td>" . $rij["klantid"] . "</td>";
        echo "<td>" . $rij["klantnaam"] . "</td>";
        echo "<td>" . $rij["klantadres"] . "</td>";
        echo "<td>" . $rij["klantpostcode"] . "</td>";
        echo "<td>" . $rij["klantplaats"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='index.html'> terug naar het menu </a>";