<?php
/**
 * 注解
 * @author new1024kb
 * @since 2020-06-28
 */

<<url>>
function Attr() {}

$reflect = new ReflectionFunction('Attr');
var_dump($reflect->getAttributes('url'));
var_dump($reflect->getAttributes('url')[0]->getName());      // 得到名称url
var_dump($reflect->getAttributes('url')[0]->getArguments()); // 得到参数 空数组


echo PHP_EOL;


<<url('/new/list', '/new1024kb/list')>>
function Attr1(){}

$reflect1 = new ReflectionFunction('Attr1');
var_dump($reflect1->getAttributes('url'));
var_dump($reflect1->getAttributes('url')[0]->getName());       // 得到名称url
var_dump($reflect1->getAttributes('url')[0]->getArguments());  // 得到参数 ['/new/list', '/new1024kb/list']