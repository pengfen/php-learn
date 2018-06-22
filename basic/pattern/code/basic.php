<?php
// 匹配BBC
$p = '/BBC/';
$str = "BBC是英国的一个电视台";

preg_match($p, $str, $match);
var_dump($match); // [0 => "BBC"] 如果没有[]

// preg_match($p, $str) 如果匹配成功返回值为1 没有返回值0
if (preg_match($p, $str)) {
	echo '匹配成功';
}