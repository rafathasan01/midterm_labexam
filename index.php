<?php

	$xml = "<user>
		<id>1</id>
		<pass>123</pass>
		<name>Johny</name>
	</user>";

	//$data = simplexml_load_string($xml);
	$data = simplexml_load_file('user.xml');
	//print_r($data);
	echo $data->user[0]->id;

	$myfile = fopen('user.txt', 'r');
	$data = fgets($myfile);
	fclose($myfile);

	$user = explode("|", $data);
	
	if($user[0] == $id && $user[1] == $pass){
		echo "valid user";
	}else{
		echo "invalid user";
	}
?>

