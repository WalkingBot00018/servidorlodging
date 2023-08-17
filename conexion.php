<?php
/* Database credentials. Asuming you are  running mysql

- server whit default setting (user 'root' whit no password)
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id21140238_rlsr');
define('DB_PASSWORD', 'Dtge.*Pe1');
define('DB_NAME', 'id21140238_baselodging');

/*Attempt to connect to mysql database*/

$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

/*check connection*/
if($link===false){
    die("ERROR: Could no connection.". mysqli_connect_error());
}
else{
    echo "conecto";
}

?>
