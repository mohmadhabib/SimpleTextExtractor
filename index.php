<?php

$url = $_GET["url"];

$name = $_GET["name"];
if(isset($url) and isset($name) and !empty($url) and !empty($name)){

$f = file_put_contents($name,file_get_contents($url));

if ($f){

	echo "<h1>$name File Has Been Saved</h1>";

	}else{

		echo "Something Wrong Happened";

		}
}else{
    echo "<h1>Pass name= and url=</h1>";
}