
<?php
$connection = mysqli_connect('mysqlweb.clans.hu', 'forizonplay143', 'A6aBeLYHESuPEGY');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'artxgames');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
