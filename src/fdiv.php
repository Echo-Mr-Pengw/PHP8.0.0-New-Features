<?php
/**
 * fdiv 函数 允许除数为0
 * @author new1024kb
 * @since 2020-06-28
 */

// 除数为0
var_dump(fdiv(2, 0));

var_dump(fdiv(1, 3));

var_dump(fdiv(1, 2));

// intdiv() 对结果取整
// fmod() 返回余数