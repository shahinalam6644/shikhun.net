<?php

define('PI', 1234.44);

echo PI;

$array = [
	'name' => 'shahin',
	'address' => 'dhaka'
];

echo $array['name'];

foreach($array as $value){
	echo $value;
}


function shahin($n, $p){
	echo $n + $p;
	};
	
	shahin(12,12);
