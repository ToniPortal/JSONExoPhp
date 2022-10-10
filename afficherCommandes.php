<?php
$json = file_get_contents("http://localhost/JSON/retrouverCommandes.php");
$jsondecode = json_decode($json, true);


$id = htmlspecialchars($_GET["id"]);

echo $id . "<br>";


$i=0;
echo "<table><thead><tr> <th>cde_num</th><th>cde_date</th><th>cde_reglee</th><th>cli_num</th> </tr></thead><tbody>";
echo "<tr>";
while ($i < 4 ) {
echo "<th>";
echo $jsondecode[$id][$i] . "<br>";
echo "</th>";
$i++;

}
echo "</tr>";
echo "</tbody></table>";


