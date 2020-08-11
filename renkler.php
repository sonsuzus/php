<?php

$yazi[0]="MAVİ";
$yazi[1]="KIRMIZI";
$yazi[2]="SARI";
$yazi[3]="YEŞİL";
$renk[0]="red";
$renk[1]="blue";
$renk[2]="green";
$renk[3]="yellow";

for($i=0;$i<100;$i++)
{
	$ya=rand(0,3);
	$re=rand(0,3);
	echo "<font size=\"+2\" color=\""; echo "$renk[$re]"; echo "\">"; echo "$yazi[$ya]" ; echo "</font> ";
}



?>