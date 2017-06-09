<?php

try {
	echo '小叶，周末去打台球吧？<br />';
	throw new Exception("天太热了，周末去游泳<br />", 1);
	
	echo '周末我们开开心心去打台球<br />';
} catch (Exception $e) {
	echo $e->getCode() . ':' . $e->getMessage();
	echo '一个人默默的在家玩手机<br />';
}

echo '这是正常代码<br />';