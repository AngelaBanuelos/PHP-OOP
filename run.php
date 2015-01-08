<!-- lesson 3 -->
<!-- is_array -->
<?php
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';
?>
<br>
<!-- is_bool -->
<?php
$a = false;
$b = 0;

if (is_bool($a) === true) {
    echo "Yes, this is a boolean";
}

// Since $b is not a boolean, it will return false
if (is_bool($b) === false) {
    echo "No, this is not a boolean";
}
?>
<br>
<!-- is_null -->
<?php  
$var_name = TRUE;  
		if (is_null($var_name))  {  
			echo 'Variable is  NULL';  
	}  
	else  {  
		echo 'Variable is not NULL';  
	}  
?>  
