<?php 
$str = '';

$date_arr = getdate();
if(!$date_arr['wday']) $date_arr['wday'] = 7;

$thisMonday = mktime(0,0,1,$date_arr['mon'],$date_arr['mday'] - $date_arr['wday'] +1,$date_arr['year']);
$lastMonday = mktime(0,0,1,$date_arr['mon'],$date_arr['mday'] - $date_arr['wday'] + 1 - 7,$date_arr['year']);
$lastSunday = mktime(0,0,-1,$date_arr['mon'],$date_arr['mday'] - $date_arr['wday'] + 1,$date_arr['year']);
$thisFirstDay = mktime(0,0,0,$date_arr['mon'],$date_arr['mday'] - $date_arr['mday'] + 1,$date_arr['year']);
$lastMondayendDay = mktime(0,0,-1,$date_arr['mon'],$date_arr['mday'] - $date_arr['mday'] + 1,$date_arr['year']);
$lastMondayFirstDay = mktime(0,0,0,$date_arr['mon'] - 1, 1,$date_arr['year']);


echo date("Y-m-d H:i:s",$thisMonday),'--',$date_arr['mday'] - $date_arr['wday'],'<br>';
echo date("Y-m-d H:i:s",$lastMonday),'--',$date_arr['mday'] - $date_arr['wday'],'<br>';
echo date("Y-m-d H:i:s",$lastSunday),'--',$date_arr['mday'] - $date_arr['wday'],'<br>';
echo date("Y-m-d H:i:s",$thisFirstDay),'--',$date_arr['mday'] - $date_arr['wday'],'<br>';
echo date("Y-m-d H:i:s",$lastMondayendDay),'--',$date_arr['mday'] - $date_arr['wday'],'<br>';
