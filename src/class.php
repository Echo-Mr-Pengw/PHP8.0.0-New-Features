<?php
/**
 * ::class、get_class两者的作用是相同的
 * @author new1024kb
 * @since 2020-06-28
 */

class Type{}

$type = new Type();

// get_class()
var_dump('get_class(): ' . get_class($type)); // 返回对象的类名

// ::class
var_dump('::class: ' . $type::class);         // 返回对象的类名