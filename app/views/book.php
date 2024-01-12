<?php require_once 'inc/appstart.php'; ?>


<h1>Dashboard page</h1>

<?php

foreach($data as $d)
{
  echo $d->name;
  echo "<br />";
}
?>


<?php require_once 'inc/append.php'; ?>