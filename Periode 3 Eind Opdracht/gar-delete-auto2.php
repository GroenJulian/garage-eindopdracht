<?php
$autokenteken = $_POST["autokenteken"];

require_once "connect.php";

$autos = $conn->prepare("SELECT automerk, autotype, autokenteken, autokmafstand, klantid FROM auto WHERE autokenteken = :autokenteken");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["automerk"]       . "</td>";
    echo "<td>" . $auto["autotype"]     . "</td>";
    echo "<td>" . $auto["autokenteken"]    . "</td>";
    echo "<td>" . $auto["autokmafstand"] . "</td>";
    echo "<td>" . $auto["klantid"]   . "</td>";
    echo "</tr>";
}

echo "</table><br />";

echo "<form action='gar-delete-auto3.php' method='post'>";

echo "<input type='hidden' name='autokenteken' value=$autokenteken>";

echo "<input type='hidden' name='verwijder' value='0'>";
echo "<input type='checkbox' name='verwijder' value='1'>";
echo "Verwijder deze auto. <br />";
echo "<input type='submit'>";
echo "</form>";