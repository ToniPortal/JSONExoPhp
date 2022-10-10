<?php
	session_start();
	class User {
		
		private $username;
		private $password;
		
		public function __construct($name,$pass){
			$this->username = $name;
			$this->password = $pass;
		}
		
		public function getUsername(){
			return $this->username;
		}
		
		public function getPass(){
			return $this->password;
		}
		
	}
	
	function generateString($len){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = ''; 
  
		for ($i = 0; $i < $len; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 
	  
		return $randomString; 
	}

	if(!isset($_SESSION["authToken"])){
		$_SESSION["authToken"] = array();
	}

	$usersraw = file("auth.txt");
	$users = array();
	foreach($usersraw AS $usertemp){
		$temparray = explode("=",$usertemp);
		$users[] = new User($temparray[0],$temparray[1]);
	}
	
	$login = $_GET["user"];
	$mdp = $_GET["pwd"];
	
	$loginuser = new User($login,$mdp);
	if(in_array($loginuser,$users)){
		$token = generateString(80);
		$_SESSION["authToken"][] = $token;
		echo "token=".$token;
	}
	else{
		echo "Mauvais login/mdp";
	}
?>