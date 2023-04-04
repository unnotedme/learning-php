<!-- Let's consider the following PHP variable declarations:
<pre>
<?php
//$begin = "I love this ";
//$middle = "class, PHP is";
//$end = " awesome!";

//$string = '5';
//$integer = 6;
//$float = 3.2;
?>
</pre>
Concatanate and display $begin, $middle and $end.
Add $string, $integer and $float. Display the result.
Calculate 2 power 10, display the result. -->

<pre>
<?php
$begin = "I love this ";
$middle = "class, PHP is";
$end = " awesome!";

$string = '5';
$integer = 6;
$float = 3.2;

echo $begin.$middle.$end.'<br>';

echo $string + $integer + $float;
echo '<br>';

echo 2**10;
?>
</pre>