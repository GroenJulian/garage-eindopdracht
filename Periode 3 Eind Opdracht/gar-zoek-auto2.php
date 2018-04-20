<?php
$autokenteken = $_POST["autokenteken"];

require_once "connect.php";

$sql = $conn->prepare("SELECT automerk, autotype, autokenteken, autokmafstand, klantid FROM auto WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

echo "<table>";
foreach ($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["autokmafstand"] . "</td>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='index.html'> terug naar het menu </a>";