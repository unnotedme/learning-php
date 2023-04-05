<!-- Let's considere the following PHP with a $a variable. The goal of this exercice is to display the value of $a in several ways:
display the value of $a with single quotes (use concataination and PHP_EOL)
display the value of $a with double quotes
display the value of $a outside the PHP script (use short PHP tags)
<pre>

<?php
// $a = 1234.56;

// Display a=1234.56 using single quotes

// Display a=1234.56 using double quotes

?>

Display a=1324.56 outside PHP script

</pre> -->

<pre>

<?php
$a = 1234.56;

echo 'a='.$a.PHP_EOL;

echo "a=$a\n";

?>

a=<?= $a ?>

</pre>

