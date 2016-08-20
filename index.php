<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//str_pad 使用另一个字符串填充字符串为指定长度

/*
$input = "Alien";
echo str_pad($input, 10).'<BR>';                      // 输出 "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT).'<BR>';  // 输出 "-=-=-Alien"
echo str_pad($input, 9, "_", STR_PAD_BOTH).'<BR>';   // 输出 "__Alien___"
echo str_pad($input, 8 , "___");               // 输出 "Alien_"
*/
//echo str_repeat('---', 5);    str_repeat — 重复一个字符串
/*
$str='abcdefg'; 
$s=str_split($str,2);将一个字符串转换为数组
var_dump($s);
*/
//echo strrev('hello');反转字符串
/*wordwrap 打断字符串为指定数量的字串
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "---");
echo $newtext;
*/
//echo substr(str_shuffle('addnfjdsfnsd'),0,4);  str_shuffle — 随机打乱一个字符串
/*
$str='a=cbcd';
parse_str($str);     parse_str将字符串解析成多个变量
var_dump($a);
 */
/*
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
$new=  html_entity_decode($new);
echo $new; 
 */
/*
$new=  strip_tags("<a href='test'>Test</a>");//剝去html,php里標籤
echo $new;*/
/*
$str="this is' my school";
$str1= addslashes($str);
echo $str1;
echo addcslashes($str1,',');
 */
/*
$str = "Hello world. (can you hear me?)";
 echo quotemeta($str);
 */
 /*
$str1 = "red";
$str2 = "redent";
$test=strncasecmp($str1, $str2 ,4); 
 if ($str1==$str2)
 {
 echo "$test"; 
 } 
 else 
 { 
 echo "$test" ;
 }
*/
/*
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");字符串替换
echo $onlyconsonants;
*/
/*
$str='this is my school';
echo substr_count($str,'s',5);//统计字符串在本字符串的个数
*/
$str1 = '123';
$str2 = '1123';
echo 'Similarity: ' .similar_text($str1, $str2).'%';

