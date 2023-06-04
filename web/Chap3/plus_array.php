<pre>
<?php
$assoc1 = [
	'Apple' => 'Red',
	'Orange' => 'Yellow',
	'Melon' => 'Green',
];
$assoc2 = [
	'Grape' => 'Purple',
	'Apple' => 'Green',
	'Strawberry' => 'Red',
];
$res = $assoc1 + $assoc2;
print_r($res);

$ary1 = [1,3,5];
$ary2 = [2,3,6];
$res2 = $ary1 + $ary2;
print_r($res2);