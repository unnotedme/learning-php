<!-- index.php -->
<?php
// Starts sessions
session_start();
// If session variable exists
// Copy counters in variables
// $counterPage1 and $ counterPage2 
  // Else, set variables to 0:
$counterPage1 = (isset($_SESSION['page1'])) ? $_SESSION['page1'] : 0 ;
$counterPage2 = (isset($_SESSION['page2'])) ? $_SESSION['page2'] : 0 ;


?>
<h1>Home page</h1>
<p>You visited <a href="page1.php">page 1</a> <?= $counterPage1 ?> times.</p>
<p>You visited <a href="page2.php">page 2</a> <?= $counterPage2 ?> times.</p>

<a href="reset.php">Reset counters</a>

<!-- page1.php -->

<?php
// Starts sessions
session_start();

// Create page 1 counter in a sessions
// variable if necessary
if (!isset($_SESSION['page1'])) $_SESSION['page1']=0;
// Increment counter
$_SESSION['page1']++;

?>

<h1>Page 1</h1>

<p>You visited this page <?= $_SESSION['page1'] ?> times.</p>

<a href="index.php">Home page</a>

<!-- page2.php -->
<?php
// Starts sessions
session_start();

// Create page 2 counter in a sessions
// variable if necessary
if (!isset($_SESSION['page2'])) $_SESSION['page2']=0;
// Increment counter
$_SESSION['page2']++;

?>

<h1>Page 2</h1>

<p>You visited this page <?= $_SESSION['page2'] ?> times.</p>

<a href="index.php">Home page</a>

<!-- reset.php -->
<?php
// Starts sessions
session_start();

// Destroy sessions
session_unset();

?>
<h1>Reset</h1>
<p>Counter has been reset</p>
<a href="index.php">Home page</a>
