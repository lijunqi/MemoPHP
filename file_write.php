<?php

$filename = 'file.txt';
file_put_contents($filename, "1,2,3".PHP_EOL);
file_put_contents($filename, "4,5,6".PHP_EOL , FILE_APPEND | LOCK_EX);
