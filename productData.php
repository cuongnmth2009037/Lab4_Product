<?php
$query = "CREATE TABLE product(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    price DOUBLE,
    thumbnail VARCHAR (255), 
    reg_date TIMESTAMP
)";
if (!empty($connection)) {
    $ret = mysqli_query($connection,$query);
}
if ($ret){
    echo "<p>Tạo bảng thành công!</p>";
}else{
    echo "<p>Tạo bảng thất bại!</p>";
}

$name = "";
$price = "";
$thumbnail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["price"])) { $price = $_POST['price']; }
    if(isset($_POST["thumbnail"])) { $thumbnail = $_POST['thumbnail']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO product (name, price, thumbnail)
    VALUES ('$name', '$price', '$thumbnail')";

    if ($connection->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công!";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
$sql = "SELECT id, name, price,thumbnail FROM product";
$result = $connection->query($sql);
//Đóng database
$connection->close();