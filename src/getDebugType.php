<?php
/**
 * get_debug_type 函数
 * @author new1024kb
 * @since 2020-06-28
 */

// get_debug_type和gettype() 的详细区别见：https://wiki.php.net/rfc/get_debug_type
//                   |   int     |  string    | bool    | 对象|类
// get_debug_type()  |   int     |  string    | bool    |  类名
// gettype()         |  integer  |  string    |boolean  | object
// 


$arr = [1, 2, 3];

echo '数组类型' . PHP_EOL;
var_dump('get_debug_type(): '. get_debug_type($arr));
var_dump('gettype(): ' . gettype($arr));

echo PHP_EOL;


$str = 'new1024kb';

echo '字符串类型' . PHP_EOL;
var_dump('get_debug_type(): ' . get_debug_type($str));
var_dump('gettype(): ' . gettype($str));

echo PHP_EOL;


$i = 1024;

echo '整型' . PHP_EOL;
var_dump('get_debug_type(): ' . get_debug_type($i));
var_dump('gettype(): ' . gettype($i));

echo PHP_EOL;


$b = false;

echo '布尔型' . PHP_EOL;
var_dump('get_debug_type(): ' . get_debug_type($b));
var_dump('gettype(): ' . gettype($b));

echo PHP_EOL;


class Type{}
$type = new Type();

echo '对象' . PHP_EOL;
var_dump('get_debug_type(): ' . get_debug_type($type));
var_dump('gettype(): ' . gettype($type));