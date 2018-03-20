<?php

header('Content-Type: application/json');
$namePost = $_POST["name"];
$dir = "/".$namePost;
$a = scandir($dir);
$nestedData = array(); 


foreach ($a  as $value) {
	$file = $dir.$value;
	if(is_dir($file)){
		$myObj = array('name' => $value, 'type' => 0 ); 
	}else{
		
		$myObj = array('name' => $value, 'type' => 1); 
	}
	$nestedData[] = $myObj;
}
$myJSON = json_encode($nestedData);
echo $myJSON;

?>