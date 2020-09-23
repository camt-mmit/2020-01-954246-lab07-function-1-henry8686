<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
function f($c){
	return($c*(9/5))+32;
}function p($r){
  printf("Celsius Fahrenheit\n");
  foreach($r as $c){
    printf("%7.2f%11.2f\n",$c,f($c));
  }
}function a($s,$e,$a,$r){
  for($i=$s;$i<=$e;$i+=$a){
    $r[]=$i;
	}return$r;
}$s=$_SERVER['argv'][1];
$e=$_SERVER['argv'][2];
$a=$_SERVER['argv'][3];
$r=[];
$r=a($s,$e,$a,$r);
p($r);
?>