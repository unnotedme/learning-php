<!-- Write a PHP script that display the $_SERVER variable in a HTML table. Here is the expected result:

https://lucidar.me/en/web-dev-class/files/server-in-a-table.png -->

<table border="1">
  <?php
  foreach ($_SERVER as $key => $value):
  ?>
    <tr>
      <td><?= $key ?></td>
      <td><?= $value ?></td>
    </tr>

  <?php endforeach; ?>
</table>