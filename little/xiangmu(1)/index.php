<?php 
header('content-type:text/html;charset=utf-8');

//冒泡排序
$arr = array(9,2,4,1,5,6,3,7,8);
$num = BubbieSort($arr);
function BubbieSort($arr)
{
	$num = count($arr);
	for ($i=1; $i < $num ; $i++) { 
		for ($j=$num-1; $j >= $i ; $j--) {
			if ($arr[$j] < $arr[$j-1]) {
				$iTemp = $arr[$j-1];
				$arr[$j-1] = $arr[$j];
				$arr[$j] = $iTemp;
			}
		}
	}
	return $arr;
}
var_dump($num);



//快速排序
function QuickSort($arr)
{
	$num = count($arr);
	$l = $r = 0;
	$left = $right = array();
	//从索引的第二个开始遍历
	for ($i=1; $i < $num ; $i++) { 
		//判断值的大小
		if ($arr[$i] < $arr[0]) {
			//装入左索引
			$left[]=$arr[$i];
			$l++;
		}else{
			//否则装入右索引
			$right[] = $arr[$i];
			$r++;
		}
	}
	if ($l>1) {
		$left = QuickSort($left);
	}
	$new_arr = $left;
	$new_arr[] = $arr[0];
	if ($r>1) {
		$right = QuickSort($right);
	}
	for ($i=0; $i < $r; $i++) { 
		$new_arr[] = $right[$i];
	}
	return $new_arr;


}





 ?>