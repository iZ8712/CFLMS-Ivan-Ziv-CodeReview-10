<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cr10-ivan-ziv-biglibrary";

$conn =  mysqli_connect($localhost, $username, $password, $dbname);


if(!$conn) {
    echo "ERROR!";

}

?>