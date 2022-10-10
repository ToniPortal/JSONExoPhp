<?php

$url = "./miniburo.json";
$json = file_get_contents($url);
$data = json_decode($json);

echo "<table>";
foreach ($data->clients as $data) {

    echo "<thead><td>Client <strong>" . $data->cli_num . "</strong></td></thead>";
    echo "<tbody>";
    echo "<td>" . $data->cli_log . "<td>";
    echo "<td>" . $data->cli_nom . "<td>";
    echo "<td>" . $data->cli_pnom . "<td>";
    echo "<td>" . $data->cli_pays . "<td>";
    echo "<td>" . $data->cli_adr1 . "<td>";
    echo "<td>" . $data->cli_adr2 . "<td>";
    echo "<td>" . $data->cli_cpostal . "<td>";
    echo "<td>" . $data->cli_ville . "<td>";
    echo "<td>" . $data->cli_ca . "<td>";
    echo "<td>" . $data->typ_cli_code . "<td>";
    echo "</tbody>";
}
echo "</table>";
?>

<form action="afficherCommandes.php">

    <input type="text" name="id"> </input>
    <input type="submit" value="Envoyer"></input>

</form>

