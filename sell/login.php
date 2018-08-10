<?php
//	获取用户名和密码
	header('Access-Control-Allow-Origin:*');
	header("Content-type: text/html; charset=utf-8");
	$uname = isset($_POST["uname"]) ?$_POST["uname"]: '';
	$upwd = isset($_POST["upwd"]) ?$_POST["upwd"]: '';
	$con = mysqli_connect('localhost','root','root');
	if (!$con)
	{
	    die('Could not connect: ' . mysqli_error($con));
	}
	// 选择数据库
	mysqli_select_db($con,"onecms");
	$sql = "SELECT * FROM user";
	$result = mysqli_query($con, $sql);
	$zboo=false;
	$mboo=false;
	$data = array(
	 'uid' => 100, 
	 'uname' => 'root',
	 'upwd' => 'root'
	 );
	 	
	$response = array(
	 'code' => '200', 
	 'message' => 'success for request',
	 'data' => ''
	 );
	if (mysqli_num_rows($result) > 0) {
	    // 输出数据
	    while($row = mysqli_fetch_assoc($result)) {
			if($row["username"]==$uname){
				$zboo=true;
				if($row["pwd"]==$upwd){
					$mboo=true;
					$data['uid']= $row["id"];
					$data['uname']= $row["username"];
					$data['upwd']= $row["pwd"];
					$response['data']=$data;
				}
			}
	    }
	} else {
	   $response['code']=300;
	   $response['message']='账号不存在';
	}
	if($zboo==false){
		$response['code']=300;
		$response['message']='账号不存在';
	}else{
		if($mboo==false){
			$response['code']=300;
			$response['message']='密码错误';
		}
	}
	mysqli_close($con);
	echo json_encode($response);
?>