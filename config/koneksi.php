<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "news_karet";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($con){
    // echo 'berhasil';
    
} else{
    echo 'gagal';
}
?>