<?php

$starttime = microtime(true);
/* do stuff here */
sleep(3);
echo 'Elapsed Time: '.number_format(microtime(true) - $starttime, 2);
