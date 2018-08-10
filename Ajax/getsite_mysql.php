<?php
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
 
if(empty($q)) {
    echo '请选择一个网站';
    exit;
}
 
$con = mysqli_connect('localhost','root','root');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
// 选择数据库
mysqli_select_db($con,"onecms");
// 设置编码，防止中文乱码
header("Content-type: text/html; charset=utf-8");
 
$sql="SELECT * FROM message WHERE id = '".$q."'";
 
$result = mysqli_query($con,$sql);
 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>标题</th>
<th>内容</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['content'] . "</td>";
    echo "</tr>";
}
echo "</table>";
 
mysqli_close($con);
?>