<?php

$starttime = microtime(true);
/* do stuff here */
sleep(3);
$endtime = microtime(true);
echo 'Elapsed Time: '.number_format($endtime - $starttime, 2);
