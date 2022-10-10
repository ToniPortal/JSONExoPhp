<?php
	header('Content-Type: application/json; charset=utf-8');
	class MonObjetTest implements JsonSerializable
	{
		private $annonce;
		private $tab;
		private $monObjetInclus;
		
		public function __construct($ann,$tab,$obj){
			$this->annonce = $ann;
			$this->tab = $tab;
			$this->monObjetInclus = $obj;
		}
		
		public function getAnnonce(){
			return $this->annonce;
		}
		
		public function getTab(){
			return $this->tab;
		}
		
		public function getMonObjetInclus(){
			return $this->monObjetInclus;
		}
		
		public function setAnnonce($annonce){
			$this->annonce = $annonce;
		}
		
		public function setTab($tab){
			$this->tab = $tab;
		}
		
		public function setMonObjetInclus($monObjetInclus){
			$this->monObjetInclus = $monObjetInclus;
		}
		
		public function jsonSerialize() {
			return get_object_vars($this);
		}
		
	}
	
	class ObjetInclus implements JsonSerializable
	{
		private $p1;
		private $p2;
		
		function __construct($phrase1,$phrase2){
			$this->p1 = $phrase1;
			$this->p2 = $phrase2;
		}
		
		public function getP1(){
			return $this->p1;
		}
		
		public function jsonSerialize() {
			return get_object_vars($this);
		}
	}

    $monTableau = array("Je","teste","les","tableaux");
    $phrase1 = "c'est beau";
    $phrase2 = "quand ca marche";
    $monObjetInclus = new ObjetInclus($phrase1,$phrase2);
	$monObjetTest = new MonObjetTest("Bonjour",$monTableau,$monObjetInclus);
    $monJson = json_encode($monObjetTest);
    echo $monJson;
	exit();
?>



