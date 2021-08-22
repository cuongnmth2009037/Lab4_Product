<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "dynamic_website";
$connection = mysqli_connect($host, $user, $pass, $database);
if (!$connection) {
    echo "Kết nối database thất bại!";
} else {
    echo "Kết nối database thành công!";
}
