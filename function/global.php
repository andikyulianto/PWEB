<?php 
function hitung1(){	
    echo $a;
	global $a;
	echo $a + 3;
}

$a = 4;
hitung1();
