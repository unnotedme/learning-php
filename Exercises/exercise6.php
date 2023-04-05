<!-- The following code displays two buttons (log in and log out):
Conditional statement for log in and log out buttons
<?php
// $isLogged = true; or false;
?>

Display if user is not logged
<div class="button_cont" align="center">
  <a 
    href='#'
    target="_blank" 
    style = "background: #0f0; text-decoration: none; padding: 10px; border-radius: 5px; display:inline-block;
    ">
  Log in
  </a>
</div>

Display if user is logged
<div class="button_cont" align="center">
  <a 
    href='#'
    target="_blank" 
    style = "background: #f00; color:white; text-decoration: none; padding: 10px; border-radius: 5px; display:inline-block;
    ">
  Log out
  </a>
</div>
Add a conditional statement in the script to display the appropriate button according to the current status of the boolean variable $isLogged:
if $isLogged is false, display the Log in button
if $isLogged is true, display the Log out button -->

<?php
$isLogged = true; // or false;
?>

<?php if (!$isLogged): ?>

  <!-- Display if user is not logged -->
  <div class="button_cont" align="center">
    <a 
      href='#'
      target="_blank" 
      style = "background: #0f0; text-decoration: none; padding: 10px; border-radius: 5px;
      ">
    Log in
    </a>
  </div>

<?php else: ?>

  <!-- Display if user is logged -->
  <div class="button_cont" align="center">
    <a 
      href='#'
      target="_blank" 
      style = "background: #f00; color:white; text-decoration: none; padding: 10px; border-radius: 5px;
      ">
    Log out
    </a>
  </div>

<?php endif; ?>