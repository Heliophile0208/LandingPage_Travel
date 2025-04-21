<?php
session_start();
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type']; 

    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}
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
// Tính tổng số người tham dự
$count_sql = "SELECT sum(soluong) AS total_count FROM dang_ky";
$count_result = $conn->query($count_sql);
$total_row = $count_result->fetch_assoc();
$total_people = $total_row['total_count'];
// Tính tổng số người đăng ký
$count_sql_sign = "SELECT count(*) AS total_count FROM dang_ky";
$count_result_sign = $conn->query($count_sql_sign);
$total_row_sign = $count_result_sign->fetch_assoc();
$total_people_sign = $total_row_sign['total_count'];
// Tìm kiếm nếu có yêu cầu tìm kiếm
$search = "";
$sql = "SELECT * FROM dang_ky";

// Kiểm tra nếu có yêu cầu tìm kiếm (GET method)
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    // Sử dụng prepared statement để bảo vệ khỏi SQL Injection
    $sql = "SELECT * FROM dang_ky WHERE hoten LIKE ? OR sodienthoai LIKE ?";
}

// Chuẩn bị và thực thi câu truy vấn
$stmt = $conn->prepare($sql);

if (isset($_GET['search']) && !empty($_GET['search'])) {
    // Thực hiện thay thế dấu % vào search term
    $searchTerm = "%" . $search . "%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm); // Liên kết tham số với câu lệnh chuẩn bị
}

$stmt->execute();
$result = $stmt->get_result();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $hoten = $_POST['hoten'];
    $sodienthoai = $_POST['sodienthoai'];
    $diachi = $_POST['diachi'];
    $soluong = $_POST['soluong'];

    // Câu lệnh SQL để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO dang_ky (hoten, sodienthoai, diachi, soluong) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $hoten, $sodienthoai, $diachi, $soluong); // Liên kết tham số

if ($stmt->execute()) {
        // Đã thêm thành công, lưu thông báo vào session
        $_SESSION['message'] = "Thêm người thành công!";
        $_SESSION['message_type'] = "success"; // Loại thông báo thành công

        // Sau khi thêm thành công, chuyển hướng về trang danh sách
        header("Location: danhsachdangky.php");
        exit(); // Đảm bảo không tiếp tục xử lý các phần mã sau
    } else {
        // Nếu có lỗi
        $_SESSION['message'] = "Lỗi: " . $stmt->error;
        $_SESSION['message_type'] = "error"; // Loại thông báo lỗi

        // Sau khi có lỗi, chuyển hướng về trang danh sách
        header("Location: danhsachdangky.php");
        exit(); // Đảm bảo không tiếp tục xử lý các phần mã sau
    }}
?>
<!-- Thông báo nổi -->
<div id="notification" class="notification" style="display:none;"></div>

<script>
    // Hiển thị thông báo
    function showNotification(message, type) {
        var notification = document.getElementById('notification');
        notification.style.display = "block";
        notification.className = "notification " + type;
        notification.innerHTML = message;

        // Ẩn thông báo sau 5 giây
        setTimeout(function() {
            notification.style.display = "none";
        }, 5000);
    }
    // Thông báo sửa thành công
function showEditNotification(success) {
    if (success) {
        showNotification("Sửa thông tin thành công!", "success");
    } else {
        showNotification("Lỗi khi sửa thông tin. Vui lòng thử lại.", "error");
    }
}

// Thông báo xóa thành công
function showDeleteNotification(success) {
    if (success) {
        showNotification("Xóa người đăng ký thành công!", "success");
    } else {
        showNotification("Lỗi khi xóa người đăng ký. Vui lòng thử lại.", "error");
    }
}

    // Kiểm tra nếu có thông báo
    <?php if (isset($message) && isset($message_type)): ?>
        showNotification("<?php echo $message; ?>", "<?php echo $message_type; ?>");
    <?php endif; ?>
</script>
<style>
/* Thông báo nổi */
.notification {
    position: fixed;
    bottom: 10px;
    right: -25px;
    transform: translateX(-10%);
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    border-radius: 5px;
    font-size: 16px;
    width: 300px;
    text-align: center;
    z-index: 9999;
    display: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     transition: opacity 0.5s ease, transform 0.5s ease; 
}

.notification.success {
    background-color: #4CAF50; 
}

.notification.error {
    background-color: #f44336;
}

.notification.warning {
    background-color: #ff9800; 
}

.notification.info {
    background-color: #2196F3; 
}
.search { width: 60% !important;}
</style>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/x-icon" href="../assets/img/LogoLaHaTravel.png" />
    <title>Danh sách đăng ký</title>
</head>
<body>
    <h1>Danh sách đăng ký</h1>
<p style="text-align: center; font-size: 18px; font-weight: bold; margin: 20px 0;">
    Tổng số người tham gia: <?php echo $total_people; ?> &
    Tổng số người đăng ký: <?php echo $total_people_sign; ?>
</p>

<div style="display: flex; align-items: center; ">
    <!-- Form tìm kiếm -->
<form method="GET" action="" class="find" style="flex-grow: 1;" id="search-form">
    <input class="search" type="text" name="search" placeholder="Tìm kiếm..." value="<?php echo $search; ?>">
    <button style="margin-left:30px;" type="submit">Tìm Kiếm</button>
</form>

    <!-- Thêm người mới -->
    <button style="margin-right:30px;" id="myBtn">Đăng Ký</button>

    <!-- Nút In -->
<button style="margin-left:10px; margin-right:140px;" id="printButton" onclick="hideActionsAndPrint();">In</button>
</div>
<script>
// Hàm để ẩn cột hành động, form tìm kiếm, các nút và nút In, sau đó in trang
function hideActionsAndPrint() {
    // Lấy tất cả các ô trong cột "Hành động" và tiêu đề cột "Hành động"
    var actionCells = document.querySelectorAll("td.actions, th#actions-column");

    // Ẩn cột "Hành động" và tiêu đề cột
    actionCells.forEach(function(cell) {
        cell.style.display = "none"; 
    });

    // Ẩn form tìm kiếm và các nút
    document.getElementById("search-form").style.display = "none"; 
    document.getElementById("myBtn").style.display = "none";
    document.getElementById("printButton").style.display = "none"; 

    // In trang
    window.print();

    // Sau khi in xong, hiển thị lại các phần tử
    setTimeout(function() {
        // Hiển thị lại cột "Hành động" và tiêu đề cột
        actionCells.forEach(function(cell) {
            cell.style.display = ""; // Hiển thị lại cột "Hành động"
        });

        // Hiển thị lại form tìm kiếm và các nút
        document.getElementById("search-form").style.display = "block"; 
        document.getElementById("myBtn").style.display = "inline-block"; 
        document.getElementById("printButton").style.display = "inline-block"; 
    }, 1000); 
}

</script>

      <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span onclick="closeModal()" class="close">&times;</span>
            <h2>Thêm Người Đăng Ký</h2>
            <form method="POST" action="">
    <label for="hoten">Họ và tên</label>
    <input type="text" id="hoten" name="hoten" placeholder="Họ và tên" required><br>

    <label for="sodienthoai">Số điện thoại</label>
    <input type="text" id="sodienthoai" name="sodienthoai" placeholder="Số điện thoại" required><br>

    <label for="diachi">Địa chỉ</label>
    <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ" required><br>

    <label for="soluong">Số lượng</label>
    <input type="number" id="soluong" name="soluong" placeholder="Số lượng" required><br>

    <input type="submit" value="Thêm">

            </form>
        </div>
    </div>

    <script>
        // Lấy modal và nút
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        // Khi người dùng nhấn vào nút, mở modal
        btn.onclick = function() {
            modal.style.display = "block";
        }


    </script>

    <!-- Danh sách đăng ký -->
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Số lượng</th>
                <th>Ngày đăng ký</th>
                <th id="actions-column">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $index++ . "</td>
                            <td>" . $row["hoten"] . "</td>
                            <td>" . $row["sodienthoai"] . "</td>
                            <td>" . $row["diachi"] . "</td>
                            <td>" . $row["soluong"] . "</td>
                            <td>" . $row["ngay_dang_ky"] . "</td>
                           <td class='actions'> <!-- Class cho cột hành động -->
                            <button onclick='openModalEdit(" . $row["id"] . ", \"" . addslashes($row["hoten"]) . "\", \"" . addslashes($row["sodienthoai"]) . "\", \"" . addslashes($row["diachi"]) . "\", " . $row["soluong"] . ")'>Sửa</button>
                            <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Bạn có chắc chắn muốn xóa?\");'>Xóa</a>
                        </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Không có dữ liệu</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <!-- Modal sửa thông tin -->
    <div id="myModalEdit" class="modal">
        <div class="modal-content">
            <span onclick="closeModal()" class="close">&times;</span>
            <h2>Sửa Người Đăng Ký</h2>
            <form method="POST" action="update.php">
                <input type="hidden" id="edit-id" name="id" value="">

                <label for="hoten">Họ và tên</label>
                <input type="text" id="edit-hoten" name="hoten" required><br>

                <label for="sodienthoai">Số điện thoại</label>
                <input type="text" id="edit-sodienthoai" name="sodienthoai" required><br>

                <label for="diachi">Địa chỉ</label>
                <input type="text" id="edit-diachi" name="diachi" required><br>

                <label for="soluong">Số lượng</label>
                <input type="number" id="edit-soluong" name="soluong" required><br>

                <input type="submit" value="Cập nhật">
            </form>
        </div>
    </div>

    <script>
        // Mở modal
        function openModalEdit(id, hoten, sodienthoai, diachi, soluong) {
            // Điền dữ liệu vào modal
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-hoten').value = hoten;
            document.getElementById('edit-sodienthoai').value = sodienthoai;
            document.getElementById('edit-diachi').value = diachi;
            document.getElementById('edit-soluong').value = soluong;

            // Hiển thị modal
            document.getElementById("myModalEdit").style.display = "block";
        }

        // Đóng modal
        document.getElementsByClassName("close")[0].onclick = function() {
            document.getElementById("myModalEdit").style.display = "none";
        }

        // Đóng modal nếu nhấn vào ngoài cửa sổ
        window.onclick = function(event) {
            if (event.target == document.getElementById("myModalEdit")) {
                document.getElementById("myModalEdit").style.display = "none";
            }
        }
// Đóng modal khi nhấn vào dấu "×"
document.getElementsByClassName("close")[0].onclick = function() {
    closeModal();
}

// Đóng modal khi nhấn vào nút Đóng trong modal
function closeModal() {
    document.getElementById("myModalEdit").style.display = "none";
       document.getElementById("myModal").style.display = "none";
}


    </script>
</body>
</html>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}

h1 {
    text-align: center;
    color: #333;
    padding: 10px 0 -20px;
}


button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Thêm người mới */
a {
    display: inline-block;
    margin: 10px 0;
    text-align: center;
    text-decoration: none;  
    color: #0056b3;
    background-color: white; 
    border: 1px solid black;
    padding: 10px 15px;
    border-radius: 5px;
}


a:hover {
    background-color: #0056b3;
    color:white;
    text-decoration:none;
}

/* Bảng dữ liệu */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #333;
}

td {
    background-color: #fff;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

.find {
    margin-top:15px;
}

td[colspan="7"] {
    text-align: center;
    color: #666;
    font-style: italic;
}
  .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5px auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

      label {
    font-weight: bold;
    margin-bottom: 8px;
    display: block;
    color: #333;
}

/* Các trường nhập liệu */
input[type="text"],
input[type="number"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; 
}



br {
    display: block;
    margin-bottom: 10px;
}

input:focus {
    border-color: #4CAF50;
    background-color: #f1f1f1;
}

.find {
    padding:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-left:90px;
}
input[type="submit"] {
    color:white;
    background-color:green;
        transition: background-color 0.3s ease, color 0.3s ease; 
}
input[type="submit"]:hover {
    cursor:pointer;
    background-color:#90EE90;
    color:white;

}
/* Media Query cho điện thoại di động */
@media screen and (max-width: 768px) {
    .find {
        display: flex;
    }

    .search{
        width: 400px !important;
    }

    #search-form button {
        margin-left: 0;
        margin-top: 10px;
        width: 70%;
    }

    #myBtn, #printButton {
        width: 40%;
        margin: 10px 0;
    }

 div[style*="display: flex"] {
        overflow-x: auto;
        white-space: nowrap;
    }
}

</style>
