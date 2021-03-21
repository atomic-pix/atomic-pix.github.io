<?php 
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', 'lol');
define('DBNAME', 'demo');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if ($db === false){
    die("Error : Connection Error (0001)" .mysqli_connect_error())
}
?>