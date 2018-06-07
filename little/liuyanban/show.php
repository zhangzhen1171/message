<?php
header('content-type:text/html;charset=utf-8');
$con = mysql_connect("127.0.0.1","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);
mysql_query('set names utf8');
$result = mysql_query("SELECT * FROM liuyan");

echo "<table border='1'>
<tr>
<th>用户名称</th>
<th>评论内容</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['text'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>