<?php 
header('content-type:text/html;charset=utf-8');

mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set names utf8');

$name = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE name='$name'&&password='$pwd' ";

$res = mysql_query($sql);

if ($res) {
	echo "<script> alert('登录成功');parent.location.href='../liuyanban/creat.html'; </script>";
}else{
	echo "<script> alert('登录失败');parent.location.href='../liuyanban/login.html'; </script>";
}

 ?>