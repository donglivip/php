<?php
	define("HOST",'localhost');
	define("USER",'root');
	define("PWD",'root');
	define("DBNAME",'onecms');
	$mysqli=new mysqli(HOST,USER,PWD,DBNAME);
	if($mysqli->connect_errno){
	    die('数据库链接出错'.$mysqli->connect_error);
	}
?>