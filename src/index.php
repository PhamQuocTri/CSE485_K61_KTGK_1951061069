<?php
    // 1. index.php là TRANG MẶC ĐỊNH sẽ CHẠY ĐẦU TIÊN
    // Nhiệm vụ trong mô hình này: Nó chỉ đơn giản phân tích xem người dùng đang MUỐN GÌ để CHUYỂN TIẾP công việc tới CHỨC NĂNG tương ứng
    session_start();
    //Kiểm tra nếu lỗi thì điều hướng sang trang báo lỗi
    if(isset($_SESSION['error']))
        header("location:error.php");
    //Lấy ra action
    $action = isset($_GET['act']) ? $_GET['act'] : 'index';
    //Gộp tệp tin controller
    require_once "controller/controller.php";

    $object = new controller(); //Tạo ra đối tượng controller
    //Kiểm tra action có tồn tại trong Controller ko
    if (!method_exists($object, $action)) {
        die("Phương thức $action không tồn tại trong controller");
    }
     // Nếu có thì gọi action tương ứng tên phương thức
    $object->$action();

?>