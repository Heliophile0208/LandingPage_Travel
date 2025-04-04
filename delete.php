<?php
session_start();

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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Câu lệnh SQL để xóa
    $sql = "DELETE FROM dang_ky WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Thêm thông báo vào session
        $_SESSION['message'] = "Xóa người đăng ký thành công!";
        $_SESSION['message_type'] = "success"; // Loại thông báo thành công
    } else {
        // Thêm thông báo lỗi vào session
        $_SESSION['message'] = "Lỗi khi xóa người đăng ký. Vui lòng thử lại.";
        $_SESSION['message_type'] = "error"; // Loại thông báo lỗi
    }
    
    // Sau khi xóa, chuyển hướng về trang danh sách
    header("Location: danhsachdangky.php");
    exit();
}
?>
