<?php

class MyException extends Exception
{

}

try {
	if (mt_rand(0,1)) {
		throw new Exception('产生了系统异常<br />',1);
	} else {
		throw new MyException("产生了自定义异常<br />", 2);		
	}
} catch (MyException $e) {
	echo $e->getCode() . ':捕获了自定义异常：' . $e->getMessage();
} catch (Exception $e) {
	echo $e->getCode() . ':捕获了系统异常：' . $e->getMessage();
}

echo '这是正常代码<br />';