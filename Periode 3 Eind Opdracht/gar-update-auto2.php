<?php
$autokenteken = $_POST["autokenteken"];
require_once "connect.php";

$autos = $conn->prepare("SELECT automerk, autotype, autokenteken, autokmafstand, klantid FROM auto WHERE autokenteken = :autokenteken");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto)
{
    echo " automerk:" . $auto["automerk"];
    echo " <input type='hidden' name='automerk' ";
    echo " value=' " . $auto["automerk"] . " '> <br /> ";

    echo " autotype: <input type='text' ";
    echo " name  = 'autotype' ";
    echo " value = '" . $auto["autotype"] . "' ";
    echo " > <br />";

    echo " autokenteken: <input type='text' ";
    echo " name  = 'autokenteken' ";
    echo " value = '" . $auto["autokenteken"] . "' ";
    echo " > <br />";

    echo " autokmafstand: <input type='text' ";
    echo " name  = 'autokmafstand' ";
    echo " value = '" . $auto["autokmafstand"] . "' ";
    echo " > <br />";

    echo " klantid: <input type='text' ";
    echo " name  = 'klantid' ";
    echo " value = '" . $auto["klantid"] . "' ";
    echo " > <br />";
}
echo "<input type='submit'>";
echo "</form>";