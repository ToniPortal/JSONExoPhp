<?php
$url = "./jsonBonjour.json";
$json = file_get_contents($url);
$data = json_decode($json);

foreach ($data->salutations as $salutations) {
	echo $salutations . "</br>";
}

foreach ($data->liens as $liens) {

	echo "<a href= '" . $liens->lien . "'>" . $liens->description . "</a><br>";
}
