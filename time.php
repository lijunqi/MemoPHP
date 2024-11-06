<?php

echo time() . "\n";

// 设置要使用的默认时区。
date_default_timezone_set('UTC');


// 打印类似：Monday
echo date("l") . "\n";

// 打印类似：Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A') . "\n";

// 打印：July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "\n";

/* 使用格式化参数中的常量 */
// 打印类似：Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822) . "\n";

// 打印类似：2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)) . "\n";

?>
