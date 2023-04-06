<!-- Let's considere the following array:

$array = array ( 152 , 20, 30, 40, 60 );
Remove the first element of the array
Add 10 at the beginning of the array
Add 70 and 80 at the end of the array
Sort the array in reverse order
Display the final array -->

<pre>
    <?php
        $array = array ( 152, 20, 30, 40, 60 );
        array_shift($array);
        array_unshift($array, 10)
        array_push($array, 70);
        array_push($array, 80);
        rsort($array);
        print_r ($array);
    ?>
</pre>