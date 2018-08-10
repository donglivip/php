<?php
	header('Access-Control-Allow-Origin:*');
	header("Content-type: text/html; charset=utf-8");
	$uname = isset($_GET["uname"]) ?$_GET["uname"]: '';
	$upwd = isset($_GET["upwd"]) ?$_GET["upwd"]: '';
	$con = mysqli_connect('localhost','root','root');
	if (!$con)
	{
	    die('Could not connect: ' . mysqli_error($con));
	}
	// 选择数据库
	mysqli_select_db($con,"onecms");
	$sql="UPDATE user SET pwd=36 WHERE username='17321713550'";
	$response = array(
	 'code' => '200', 
	 'message' => 'success for request',
	 'data' => ''
	);
	if ($con->query($sql) === TRUE) {
	    echo json_encode($response);
	} else {
		$response['message']=$con->error;
	    echo json_encode($response);
	}
	mysqli_close($con);
?>