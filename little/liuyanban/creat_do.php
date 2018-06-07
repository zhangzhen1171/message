<?php 
header('content-type:text/html;charset=utf-8');
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set names utf8');

$name = $_POST['username'];
$text = $_POST['text'];
$intime = time();
$sql = "INSERT INTO liuyan (`name`,`text`,`time`) VALUES ('$name','$text','$intime')";
$res = mysql_query($sql);
if ($res) {
	echo "<script> alert('留言成功');parent.location.href='../liuyanban/show.php'; </script>";
}else{
	echo "<script> alert('留言错误');parent.location.href='../liuyanban/creat.html'; </script>";
}

 ?>