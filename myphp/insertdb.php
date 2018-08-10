<?php
	include './mysqli.php';
	header('Content-type:text/html;charset=utf-8');
	$tit=$_POST["title"];
	$con=$_POST["content"];
	$sql="insert into message(title,content) values('$tit','$con')";
	if($mysqli->query($sql))
	{
	    echo "留言成功,3秒后跳转原页面";
	}else{
	    echo "留言失败,3秒后跳转原页面";
	}
	header("Refresh:3;url=index.html");
?>