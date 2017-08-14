<?php 

//$str = file_get_contents('http://localhost/test/1.php');
//$str = file_get_contents('http://www.baidu.com/');

echo '开始内存：'.$start = memory_get_usage(), '<br>';
$str = '|水水水水|或|货|';
$arr = [];
for($i= 0;$i<5000;$i++)
{
    $arr[] = $str;
}
$arr2 = [];
$str2 = implode('', $arr);
echo '开始内存：'.$end = memory_get_usage(), '<br>';

$arr3 = explode('|', $str);

$count = preg_grep('|\|货1\||', $arr);
$count2 = preg_grep('|\|或\||', $arr);
$count3 = preg_grep('|\|水水水水\||', $arr);
echo '开始内存：'.$end = memory_get_usage(), '<br>';
echo convert($end - $start) ,'<br>','<br>';
var_dump($count);exit;

function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}
var_dump($arr,$arr2);