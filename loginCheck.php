<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$pass = $_POST['pass'];

		if(empty($id) == true || empty($pass) == true){
			echo "null submission!";
		}else{

			if($id == $password){
				
				//$_SESSION['id'] = $id;
				//$_SESSION['password'] = $pass;

				setcookie("id", $id, time()+3600, "/");
				header('location: home.php');

			}else{
				echo "invalid id/password";
			}
		}

	}else{
		header('location: login.html');
	}


?>