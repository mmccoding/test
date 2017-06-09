<?php

function exceptionHandler($e)
{
	echo $e->getMessage() . '<br />';
}

set_exception_handler('exceptionHandler');

throw new Exception("出现系统异常<br />", 1);

echo '继续执行正常代码<br />';
