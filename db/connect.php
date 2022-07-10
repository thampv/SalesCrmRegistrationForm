<?php
    // Tạo các biến chứa tham số kết nối database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "salescrmregistration";

    // Tạo kết nối thông qua câu lệnh new mysqli
    $conn = new mysqli($host, $username, $password, $dbname);

    /* Kiểm tra xem đã kết nối database thành công hay chưa
    thông qua cú pháp đã được mặc định bởi mysql
    */
    // if ($conn->connect_error) {
    //     die ("Kết nối database không thành công: ".$conn->connect_error);
    // } else {
    //     echo "Kết nối database thành công rồi nhé <br>";
    // }
?>