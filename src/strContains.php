<?php
/**
 * str_contains 函数
 * @author new1024kb
 * @since 2020-06-28
 */

// str_contains() 判断一个字符串是否在另外一个字符串中 类型于strpos
var_dump(str_contains('hello new1024kb', 'he'));

// strpos() //返回查找字符串首次出现的位置
var_dump(strpos('hello new1024kb', 'he'));
var_dump(strpos('hello new1024kb', 'he') !== false);