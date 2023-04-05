<!-- The following code creates three PHP varaiables and displays a table with three rows. Use short tags to display the variable content in each row of the table:

<?php
//$firstRow="This text must be placed in the first row";
//$secondRow="This text must be placed in the second row";
//$thirdRow="This text must be placed in the third row";
?>

<table border="1">
  <tr><td> </td></tr>
  <tr><td> </td></tr>
  <tr><td> </td></tr>
</table> -->

<?php
$firstRow="This text must be placed in the first row";
$secondRow="This text must be placed in the second row";
$thirdRow="This text must be placed in the third row";
?>

<table border="1">
  <tr><td><?= $firstRow; ?></td></tr>
  <tr><td><?= $secondRow; ?></td></tr>
  <tr><td><?= $thirdRow; ?></td></tr>
</table>

<!-- Used short tags to display the variable content in each row of the table -->