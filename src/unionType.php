<?php
/**
 * 联合类型
 * @author new1024kb
 * @since 2020-06-28
 */

// 参数是联合类型
function paramsUnionType(array|bool $data) {
	var_dump($data);
}

// 参数为数组
paramsUnionType(['a', 'd', 'e']);
// 参数为布尔型
paramsUnionType(false);


// 返回值是联合类型
function retUnionType($data) : array|bool|string {
    return $data;
}

// 返回值为数组类型
var_dump(retUnionType(['b', 'a', 1]));
// 返回值为布尔类型
var_dump(retUnionType(true));
// 返回值为字符串类型
var_dump(retUnionType('new1024kb'));


// 参数和返回值都是联合类型
function unionType(array|bool $data): bool|array {
	return $data;
}

// 数组类型
var_dump(unionType(['a', 'f', 'q']));
// 布尔类型
var_dump(unionType(true));
// 整型（会被转换成bool型 true）
var_dump(unionType(127867));