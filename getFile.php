<?php


$fileName = $_GET["filename"];
$dir = "/data/".$fileName;

$fh = fopen($dir,"r");
 
while(true)
{
    $line = fgets($fh);
    if($line == null)break;
 
    echo $line;
}
 
fclose($fh);



?>