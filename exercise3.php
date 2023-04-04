<!-- Create a PHP script that displays
the content of the variable $_SERVER,
the content of the variable $_SERVER["REMOTE_ADDR"],
the content of the variable $_SERVER["HTTP_REFERER"]. -->

<pre>
<?php
print_r ($_SERVER);
echo $_SERVER["REMOTE_ADDR"].'<br>';
print_r ($_SERVER["HTTP_PREFER"]);
?>
</pre>