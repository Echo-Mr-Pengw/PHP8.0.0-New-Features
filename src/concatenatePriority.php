<?php
/**
 * 串联优先级
 * @author new1024kb
 * @since 2020-06-27
 */

// 串联优先级
$a = 100;
$b = 200;

echo '两数之和：' . $a + $b . PHP_EOL;

// PHP7.* 输出： 200
// PHP7.* 执行顺序是： ('两数之和：' . $a) + $b . PHP_EOL;

// PHP8输出： 两数之和：300
// PHP8执行顺序是： '两数之和：' . ($a + $b) . PHP_EOL;