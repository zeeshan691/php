<?php
       $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "function";


    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if($conn->connect_error){
    die("Connection Faild".$conn->connect_error);
}

?>