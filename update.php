<?php

session_start(); // Bắt đầu phiên làm việc

$servername = "localhost";
$username   = "rbgdcnwyhosting_manager"; 
$password   = "Admin@123"; 
$dbname     = "rbgdcnwyhosting_manager";         

// Kết nối database
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Kết nối thất bại: " . $conn->connect_error]);
    exit();
}

// Kiểm tra xem có gửi yêu cầu POST hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $id = $_POST['id'];
    $hoten = $_POST['hoten'];
    $sodienthoai = $_POST['sodienthoai'];
    $diachi = $_POST['diachi'];
    $soluong = $_POST['soluong'];

    // Câu lệnh SQL để cập nhật thông tin người đăng ký
    $sql = "UPDATE dang_ky SET hoten=?, sodienthoai=?, diachi=?, soluong=? WHERE id=?";

    // Chuẩn bị và thực thi câu lệnh SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $hoten, $sodienthoai, $diachi, $soluong, $id); // Liên kết tham số

    if ($stmt->execute()) {
        // Lưu thông báo thành công vào session
        $_SESSION['message'] = "Cập nhật thành công!";
        $_SESSION['message_type'] = "success"; // Hoặc "error" nếu có lỗi

        // Chuyển hướng về trang danh sách
        header("Location: danhsachdangky.php");
        exit();
    } else {
        // Lưu thông báo lỗi vào session
        $_SESSION['message'] = "Cập nhật thất bại!";
        $_SESSION['message_type'] = "error";

        // Chuyển hướng về trang danh sách
        header("Location: danhsachdangky.php");
        exit();
    }
}
?>
