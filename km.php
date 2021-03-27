<?php

/*
 [1] => Array ( [0] => JK45 [1] => 0 ) [2] => Array ( [0] => MA10 [1] => 0 )*/

$e=array(
	0=>array( 
		0 => "JK12",
		 1 =>1
	 ),
	1=>array( 
		0 => "JK12",
		 1 => 4
	 )
	,
	2=>array( 
		0 => "JK12",
		 1 => 2
	 )
    );
print_r($e);

$m=$e;

function sortByLimit($a, $b) {
    return  $b[1]-$a[1] ;
}
echo "mmmmmmmm<br>";
print_r($m);
usort($e, 'sortByLimit');
echo "<br>";
print_r($e);
array_splice($e,0,1);
echo "<br>";
print_r($e);
?>