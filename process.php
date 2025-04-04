<?php 
session_start(); 

header("Content-Type: application/json");

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = trim($_POST["hoten"]);
    $sodienthoai = trim($_POST["sodienthoai"]);
    $diachi = trim($_POST["diachi"]);
    $soluong = trim($_POST["soluong"]);

    if (!empty($hoten) && !empty($sodienthoai) && !empty($diachi) && is_numeric($soluong) && $soluong > 0) {
        $stmt = $conn->prepare("INSERT INTO dang_ky (hoten, sodienthoai, diachi, soluong) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            echo json_encode(["success" => false, "message" => "Lỗi SQL: " . $conn->error]);
            exit();
        }

        $stmt->bind_param("sssi", $hoten, $sodienthoai, $diachi, $soluong);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Đăng ký thành công!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Có lỗi xảy ra: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["success" => false, "message" => "Vui lòng nhập đầy đủ thông tin hợp lệ!"]);
    }
}

$conn->close();