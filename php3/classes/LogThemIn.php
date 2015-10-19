<?php

class LogThemIn{

	public function login($x){
		if(isset($x)){
			$_SESSION["username"] = $_POST["username"];
			header("Location: account.php");
		}else{
			return false;
		}

	}

}

