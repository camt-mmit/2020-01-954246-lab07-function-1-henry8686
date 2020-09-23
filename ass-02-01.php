<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
function p($j,$k,$l){
    $m=1;
    for($i=0;$i<$l;$i++)$m*=$j+$k;
    return$m;
}$a=$_SERVER['argv'][1];
$b=$_SERVER['argv'][2];
$c=$_SERVER['argv'][3];
$d=$_SERVER['argv'][4];
$p=$_SERVER['argv'][5];
$q=$_SERVER['argv'][6];
$r=$_SERVER['argv'][7];
$x=p($a,$b,$p);
$y=p($c,$d,$q);
$z=p($x,$y,$r);
echo$z;
?>