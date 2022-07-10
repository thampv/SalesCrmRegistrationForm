<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành công</title>
</head>
<body>
    <h1>Đăng ký thành công</h1>
    <?php
        // Tạo kết nối với database sử dụng câu lệnh require
        require ('db/connect.php');

        /* Kiểm tra xem nút "Đăng ký" (submit) đã được người dùng nhấn vào hay chưa
        sử dụng giá trị name = 'btn-reg' trong thẻ submit để kiểm tra
        ==> Lưu ý: biến toàn cục $_POST chính là một mảng mặc định của trình duyệt
        */
        if (isset($_POST['btn-reg'])) { // 'btn-reg' là name của button submit ==> Khi người dùng nhấn vào nút submit thì lệnh mới thực thi
            echo "Đã submit";
            echo "<pre>";
            print_r($_POST);
            $registration_info = array();
            $registration_info[0] = $_POST['fullname'];
            $registration_info[1] = $_POST['userad'];
            $registration_info[2] = $_POST['staff_code'];
            $registration_info[3] = $_POST['perdna'];
            $registration_info[4] = $_POST['idcard'];
            $registration_info[5] = $_POST['phone_number'];
            $registration_info[6] = $_POST['title'];
            $registration_info[7] = $_POST['perdna_management'];
            print_r($registration_info);
        }

        // Kiểm tra dữ liệu nhập vào có NULL (empty) hay không, nếu không NULL thì mới nạp vào database

        if (!empty($registration_info[0])&&!empty($registration_info[1])&&!empty($registration_info[2])&&!empty($registration_info[3])&&!empty($registration_info[4])&&!empty($registration_info[5])&&!empty($registration_info[6])&&!empty($registration_info[7])) {
            
        }

    ?>
</body>
</html>