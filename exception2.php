<?php

try {
	echo '小叶，周末去打台球吧？<br />';
	throw new Exception("天太热了，周末去游泳<br />", 1);
	
	echo '周末我们开开心心去打台球<br />';
} catch (Exception $e) {
	echo $e->getCode() . ':' . $e->getMessage();
	echo '一个人默默的在家玩手机<br />';
	try {
		echo '小叶，周六一起玩游戏去？<br />';
		throw new Exception("不了，周六要加班<br />", 2);
		
		echo '好啊，网吧五连坐<br />';
	} catch (Exception $e) {
		echo $e->getCode() . ':' . $e->getMessage();
		echo '一个人在街上游荡<br />';
	}
}

echo '这是正常代码<br />';