<?php
define('DBSERVER','localhost');// Database Server
define('DBUSERNAME','root');// Database username
define('DBPASSWORD','');// Database password
define('DBNAME','demo');// Database name

/* connect to MySQL database */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME)

// check db connection
if($db === false){
    die("Error: connection error." .mysql_error());
}
?>
