<?php

$bar = 10;
echo '$bar = ' . $bar . "\n";

// 这里我们将 $bar 引用赋值给 $foo
$foo = &$bar;
echo '$foo = ' . $foo . "\n";

$foo = 100;
echo '$bar = ' . $bar . "\n";
echo '$foo = ' . $foo . "\n";
