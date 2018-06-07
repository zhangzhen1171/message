<?php 
$a=1;
$b='abc';
$c='1abc';

var_dump($a==$b);
echo "<br>";
//返回bool(false); 因为$b 没有数值类型，所以无法判断 ;
var_dump($a==$c);
echo "<br>";
//返回bool(ture); php是弱类型语言  字符串比较整形是字符串转化成数值再比较 因为$c 有一个 1 ;
var_dump($a===$c);
echo "<br>";
//返回bool(false); 因为 ===判断两遍数值，同时判断字符类型;
$d='1e12';
var_dump($d);
echo "<br>";
$e = 100;
function test($e)
{
	$e = 200;
}
test($e);
echo $e;
echo "<br>";
//返回值为100  因为 这个变量$a在函数内部是不可以直接使用的,要用一个global来声明$e可以在函数内部使用。
$f = 100;
function test(&$f)
{
	$f = 200;
}
test($f);
echo $f;
echo "<br>";



function test{
	$b=2
}
 ?>