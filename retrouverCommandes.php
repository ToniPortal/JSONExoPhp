<?php
header('Content-Type: application/json; charset=utf-8');
class MonObjetTest implements JsonSerializable
{
    private $monObjetInclus;
    private $tab;

    public function __construct($tab)
    {
        $this->tab = $tab;
    }

    public function getAnnonce()
    {
        return $this->annonce;
    }

    public function getTab()
    {
        return $this->tab;
    }

    public function getMonObjetInclus()
    {
        return $this->monObjetInclus;
    }

    public function setAnnonce($annonce)
    {
        $this->annonce = $annonce;
    }

    public function setTab($tab)
    {
        $this->tab = $tab;
    }

    public function setMonObjetInclus($monObjetInclus)
    {
        $this->monObjetInclus = $monObjetInclus;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class ObjetInclus implements JsonSerializable
{
    private $p1;
    private $p2;

    function __construct($phrase1, $phrase2, $phrase3, $phrase4)
    {
        $this->p1 = $phrase1;
        $this->p2 = $phrase2;
        $this->p3 = $phrase3;
        $this->p4 = $phrase4;
    }

    public function getP1()
    {
        return $this->p1;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

$url = "./miniburo.json";
$json = file_get_contents($url);
$data = json_decode($json);

$monTableau = array();


foreach ($data->commandes as $datacmd) {
   $monTableau += array("" . $datacmd->cli_num . "" => [$datacmd->cde_num, $datacmd->cde_date, $datacmd->cde_reglee, $datacmd->cli_num]);
}

$monJson = json_encode($monTableau);
echo $monJson;

exit();

?>