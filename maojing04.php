<?php

// try {
// 	require_once 'aaa';
// 	print 'aaa';
// } catch (Exception $e) {
// 	echo 'dddd';
// }

$num = 10;
function fun($num){
	$num = $num = $num * 10;
	echo $num.'<br />';
}
fun($num);
echo $num.'<br />';
//1、报错
//2、
for($x=100;$x>=100 && $x<200;$x++) {
	if ($x%3 == 1 && $x%4 == 2 &&  $x%5 == 3 ) {
		echo $x.'<br />';
	}
}
//3、超文本预处理器，一种开源脚本语言
//4、分页原理就是将结果集一段一段的显示，主要是用limit来实现的
//首先要获取结果集中数据的总条数，设置偏移尺寸，计算总页数，通过得到的页数来算出要显示的页面的偏移量，就可以得到查询语句中limit后面的参数(偏移量，偏移尺寸)，在准备SQL语句时，加上limit条件就能实现分页了

//5、git init   git add filename  git commit -m '提交信息'  git status  git clone url