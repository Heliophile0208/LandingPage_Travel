<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laha Travel - Tour du lịch Nhật Bản</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/LogoLaHaTravel.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Google Translate Element -->
<div id="google_translate_element" style="position: fixed; bottom: 10px; left: 10px; z-index: 9999;"></div>

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      {
        pageLanguage: 'vi',
        includedLanguages: 'vi,en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      },
      'google_translate_element'
    );
  }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <style>
        .masthead {
  position: relative;
  width: 100%;
  height: auto;
  min-height: 35rem;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("../assets/img/banner.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}
.tour {
    font-size: 4rem !important;
    font-weight: bold;
    color: white !important;
    text-transform: uppercase;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    letter-spacing: 2px;
    padding: 20px 0;
    animation: fadeIn 1.5s ease-in-out;
}
.nav-link {
color:white !important;
font-size:16px !important;
transition: color 0.3s ease;
}
.nav-link.scrolled {
color: black !important; }
section {
margin-bottom: 40px;
}
/* Phần tiêu đề tour */
.tour-header {
text-align: center;

}

.tour-header h1 {
font-size: 36px;
color: #f39c12;
    font-weight:bold;
}

.tour-header p {
font-size: 18px;
color: #bdc3c7; 
}

/* Thông tin tour */
.tour-info {
margin-bottom: 40px;
}

/* Tiêu đề các phần thông tin */
.tour-info h2 {
font-size: 30px;
color: #3498db; 
margin-bottom: 20px;
text-align: center; 
    font-weight:bold;
}

/* Mô tả chi tiết của từng phần */
.tour-info p, .tour-info ul {
font-size: 18px;
color: #ecf0f1; /* Màu chữ cho mô tả chung sáng */
line-height: 1.8;
margin-bottom: 20px;
}
/* Container để chứa cả 2 phần tử */
.tour-container {
display: flex;
justify-content: space-between; 
gap: 20px; 
}

@media (max-width: 768px) {
.tour-container {
flex-direction: row; 
overflow-x: auto; 
justify-content: flex-start;
margin-bottom:70px;
}

.tour-itinerary,
.tour-services {
flex: 0 0 auto; 
width: 50%; 
min-width: 350px; 
}
}
/* Chỉnh sửa cho phần .tour-itinerary */
.tour-itinerary, .tour-services {
flex: 1; 
background-color: #34495e;
padding: 20px;
border-radius: 10px;
transition: background-color 0.3s ease, transform 0.3s ease; 
}

/* Thêm hiệu ứng hover */
.tour-itinerary:hover, .tour-services:hover {
background-color: #2c3e50; 
transform: scale(1.05); 
}
/* Tiêu đề trong các phần */
.tour-itinerary h2, .tour-services h2 {
color: #3498db; 
margin-bottom: 15px;
font-size: 24px;
font-weight:bold;
}

/* Danh sách trong các phần */
.tour-itinerary ul, .tour-services ul {
padding-left: 10px;
text-align:left;
}

/* Các mục trong danh sách */
.tour-itinerary li, .tour-services li {
font-size: 16px;
color: #ecf0f1; /* Màu chữ sáng */
margin-bottom: 10px;
}

/* Phần mô tả, làm nổi bật chữ nghiêng cho điểm đến */
.tour-itinerary em, .tour-services em {
font-style: italic;
color: #f39c12; /* Màu chữ nghiêng vàng sáng */
}

/* Dịch vụ bao gồm */
.tour-services ul {
list-style-type: square;
padding-left: 20px;
color: white;
text-align:left;
}



/* Phần liên hệ và đặt tour */
.tour-booking ul {
list-style-type: none;
padding-left: 0;
text-align: center;
}

.tour-booking ul li {
margin: 10px 0;
}

.tour-booking a {
color: #3498db; 
text-decoration: none;
font-weight: bold;
}

.tour-booking a:hover {
color: #1abc9c;
}

/* Footer */
.tour-footer {
text-align: center;
font-size: 14px;
color: #bdc3c7; 
margin-top: 40px;
}

/* Tạo hiệu ứng hover cho các liên kết */
.nav-link:hover {
color: #2980b9;

}

/* Media queries cho các màn hình nhỏ */
@media (max-width: 768px) {

.tour-header h1 {
font-size: 28px;
}

.tour-info h2 {
font-size: 24px;
}

.tour-info p, .tour-info ul, .tour-price p {
font-size: 16px;
}
}
.navbar-nav .nav-item .nav-link.active {
    color: black !important; /* Đặt màu đen khi được chọn */
    background-color: transparent; /* Có thể thêm nền trong suốt nếu cần */
}
.tour-price {
    margin-top:20px;
}
.tour-price h2 {
    color:blue;
    font-weight:bold;
}
.tour-price .price-tour {
color: blue; 
font-size:24px;
margin-bottom:20px;
}
/* CSS trên PC */
.nhom {
font-style: italic;
color: #f39c12;
padding: 15px;
border: 3px solid #e74c3c;
border-radius: 10px;
background-color: rgba(255, 255, 255, 0.8);
box-shadow: 0 0 15px rgba(231, 76, 60, 0.7);
transition: all 0.3s ease;
margin-bottom: -130px;
}

.nhom:hover {
background-color: rgba(255, 255, 255, 1);
box-shadow: 0 0 20px rgba(231, 76, 60, 1);
}

.nhom em {
color: inherit;
}

.tour-price em {
color: red;
font-size: 24px;
}

/* CSS riêng cho Mobile */
@media (max-width: 768px) {
/* Điều chỉnh margin của container để phù hợp với màn hình nhỏ */
.tour-price {
margin: 20px 10px;
text-align: center;
}

/* Giảm padding, font-size và loại bỏ margin âm của khối .nhom */
.nhom {
padding: 10px;
margin-bottom: 10px; 
font-size: 14px; 
}


.nhom:hover {
background-color: rgba(255, 255, 255, 0.8);
box-shadow: 0 0 15px rgba(231, 76, 60, 0.7);
}


  .tour-price em {
    font-size: 20px;
  }
}
        </style>
        <script>
        // Hàm kiểm tra khi cuộn trang
        window.onscroll = function() {
        let navLinks = document.querySelectorAll('.nav-link');
        let scrollPosition = window.scrollY;
        
        // Kiểm tra nếu người dùng cuộn xuống
        navLinks.forEach(function(link) {
        if (scrollPosition > 0) { 
        link.classList.add('scrolled'); 
        } else {
        link.classList.remove('scrolled'); 
        }
        });
        };
  

        </script>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
               <a class="navbar-brand" href="#page-top">
   <img src="../assets/img/LogoLaHaTravel.png" alt="Logo" width="80">

</a>

                <button style="width:100px" class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li  class="nav-item"><a  class="nav-link" href="#about">THÔNG TIN DỊCH VỤ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">LỘ TRÌNH</a></li>
                        <li class="nav-item"><a class="nav-link" href="#price">GIÁ VÉ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="">
                <div class="">
                    <div class="text-center">
                        <div class="tour">TOUR DU LỊCH NHẬT BẢN</div>
                        <a STYLE="background-color:green" class="btn btn-primary" href="#signup">ĐĂNG KÝ NGAY</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
<div class="tour-header">
    <h1>Tour Du Lịch Nhật Bản</h1>
    <p>Khám phá vẻ đẹp của những địa danh nổi tiếng với hành trình đặc sắc, đầy ắp kỷ niệm.</p>
</div>

<div class="tour-info">
    <h2>Thông Tin Tour</h2>
    <p>Tham gia tour du lịch Nhật Bản - Đất Nước Mặt Trời Mọc, bạn sẽ có cơ hội khám phá những địa điểm du lịch nổi bật và thưởng thức các
        món ăn đặc sản tại các điểm đến hấp dẫn. Tour này bao gồm đầy đủ các dịch vụ cần thiết từ việc di chuyển, ăn
        uống đến hướng dẫn viên chuyên nghiệp.</p>
</div>

<div class="tour-container">
    <div class="tour-itinerary">
        <h2>Lịch Trình Tour</h2>
        <ul>
            <li><strong>Ngày 1:</strong> Khởi hành và tham quan <em>Điểm đến 1</em></li>
            <li><strong>Ngày 2:</strong> Tham quan <em>Điểm đến 2</em>, tham gia các hoạt động vui chơi</li>
            <li><strong>Ngày 3:</strong> Khám phá <em>Điểm đến 3</em>, dạo chơi khu vực trung tâm</li>
            <li><strong>Ngày 4:</strong> Tham quan <em>Điểm đến 4</em>, tham gia buổi gala đặc biệt</li>
            <li><strong>Ngày 5:</strong> Trở về, kết thúc tour và ra sân bay</li>
        </ul>
    </div>

    <div class="tour-services">
        <h2>Dịch Vụ Bao Gồm</h2>
        <ul>
            <li>Vé máy bay khứ hồi (nếu có)</li>
            <li>Chỗ ở khách sạn 3-5 sao</li>
            <li>Ăn uống theo chương trình (bữa sáng, trưa, tối)</li>
            <li>Hướng dẫn viên du lịch chuyên nghiệp</li>
            <li>Vận chuyển bằng xe du lịch chất lượng cao</li>
            <li>Phí tham quan và vé vào cửa các điểm du lịch</li>
        </ul>
         </div>
        </div>              
     </div>
          
            </div>
        </section>
        <div  style="background-color:#242424; margin-top:-150px">
        <img  width="100%"  src="assets/img/phusi.png" alt="..." /></div>
        <h2 id="projects" STYLE="MARGIN-TOP:30PX; COLOR:BLUE; text-align:center; margin-bottom:-130px; padding:10px;">CÁC ĐỊA DANH NỔI TIẾNG NHẬT BẢN</h2>
        <section class="projects-section bg-light" >
            <div class="container px-4 px-lg-5">
                
<style>

.project-container,
.project-container-right {
position: relative;
overflow: hidden;
margin-top: 20px;
}

.project-image,
.project-image-right {
transition: transform 0.5s ease, opacity 0.5s ease;
width: 100%;
}

/* Hiệu ứng thu nhỏ ảnh khi hover */
.project-container:hover .project-image,
.project-container-right:hover .project-image-right {
transform: scale(0.8);
opacity: 0.7;
}

/* Hiển thị thông tin bên phải khi hover vào mục 1 */
.project-info {
position: absolute;
top: 0;
left: 100%; /* Ban đầu ẩn ở bên phải */
width: 40%;
height: 100%;
background-color: rgba(0, 0, 0, 0.7);
color: white;
padding: 20px;
opacity: 0;
transition: opacity 0.5s ease, left 0.5s ease;
display: flex;
flex-direction: column;
justify-content: center;
}

/* Hiển thị thông tin bên trái khi hover vào mục 2 */
.project-info-right {
position: absolute;
top: 0;
right: 100%; /* Ban đầu ẩn ở bên trái */
width: 40%;
height: 100%;
background-color: rgba(0, 0, 0, 0.7);
color: white;
padding: 20px;
opacity: 0;
transition: opacity 0.5s ease, right 0.5s ease;
display: flex;
flex-direction: column;
justify-content: center;
}

/* Khi hover vào .project-container, hiển thị thông tin bên phải */
.project-container:hover .project-info {
opacity: 1;
left: 60%; /* Thông tin sẽ di chuyển vào từ bên phải */
}

/* Khi hover vào .project-container-right, hiển thị thông tin bên trái */
.project-container-right:hover .project-info-right {
opacity: 1;
right: 60%; /* Thông tin sẽ di chuyển vào từ bên trái */
}

@media (max-width: 768px) {
/* Xóa hoặc vô hiệu hóa hiệu ứng hover phức tạp trên mobile */
.project-container:hover .project-image,
.project-container-right:hover .project-image-right {
transform: none;
opacity: 1;
}

/* Chuyển nội dung sang bố cục dọc */
.project-container,
.project-container-right {
position: static; 
margin-top: 10px;
}

/* Ảnh full-width, không hover scale */
.project-image,
.project-image-right {
width: 100%;
margin-bottom: 10px; 
transition: none;
}

/* Bỏ kiểu absolute, cho hiển thị thông tin dưới ảnh */
.project-info,
.project-info-right {
position: static;
width: auto;
height: auto;
opacity: 1;
background-color: #f8f8ff; 
color: #000; 
padding: 0;
transition: none;
display: block;
}
}


</style>


    <div class="container my-4">
            <div class="project-container-right">
                <img class="project-image-right" src="assets/img/TOKYOVIEW.jpg" alt="Mount Fuji">
                <div class="project-info-right">
                    <h2>Tokyo</h2>
                   
                    <ul>
                    <li>Tokyo là thủ đô hiện đại của Nhật Bản, nổi tiếng với những công trình biểu tượng như:</li>
                        <li><strong>Tháp Tokyo</strong>: Một trong những công trình biểu tượng của Tokyo, mang đến cho du khách tầm nhìn
                            toàn cảnh thành phố.</li>
                        <li><strong>Senso-ji Temple</strong>: Chùa cổ tại Asakusa, nơi bạn có thể tìm thấy không khí truyền thống và khu phố
                            đi bộ Nakamise-dori.</li>
                        <li><strong>Shibuya Crossing</strong>: Ngã tư đông đúc nhất thế giới, là biểu tượng của nhịp sống sôi động ở Tokyo.
                        </li>
                    </ul>
                </div>
            </div>
        <!-- Project One -->
        <div class="project-container">
            <img class="project-image" src="assets/img/kyoto.jpg" alt="Kyoto">
            <div class="project-info">
                <h2>Kyoto</h2>
                <p>Kyoto là thành phố cổ kính với nhiều di tích lịch sử và văn hóa đặc sắc:</p>
                <ul>
                    <li><strong>Chùa Vàng Kinkaku-ji</strong>: Ngôi chùa nổi tiếng với mái vàng óng ánh, nằm bên hồ nước
                        yên bình.</li>
                    <li><strong>Chùa Kiyomizu-dera</strong>: Chùa cổ với tầm nhìn tuyệt đẹp ra toàn cảnh thành phố
                        Kyoto.</li>
                    <li><strong>Khu phố Gion</strong>: Nơi bạn có thể thấy các geisha và maiko trong trang phục truyền
                        thống.</li>
                </ul>
            </div>
        </div>

        <!-- Project Two -->
        <div class="project-container-right">
            <img class="project-image-right" src="assets/img/nuiphusi.png" alt="Mount Fuji">
            <div class="project-info-right">
                <h2>Mount Fuji</h2>
                <ul>
                <li>Núi Phú Sĩ (Fujisan) là ngọn núi cao nhất Nhật Bản, với chiều cao 3.776 mét.</li>
                <li> Nằm trên đảo Honshu, gần Tokyo và Yokohama </li>
                <li>Phú Sĩ là biểu tượng nổi tiếng của đất nước này, được UNESCO công nhận là di sản thế giới. </li>
                <li>Núi có hình dạng đối xứng đẹp mắt và là điểm đến yêu thích cho du lịch, leo núi và ngắm cảnh. </li>
                <li>Phú Sĩ cũng gắn liền với nhiều truyền thuyết và văn hóa Nhật Bản.</li>
                </ul>
            </div>
        </div>
        </div>
        <!-- Project 3 -->
        <div class="project-container">
            <img class="project-image" src="assets/img/hokkaido.jpg" alt="hokkaido">
            <div class="project-info">
                <h2>Hokkaido</h2>
                <p>Hokkaido là đảo lớn thứ hai của Nhật Bản, nằm ở phía bắc của đất nước.  </p>
                <ul>
                    <li>Hokkaido có nhiều dãy núi, hồ nước, suối nước nóng và đặc biệt là những cánh đồng hoa rộng lớn. </li>
                    <li>Mùa đông ở Hokkaido rất
                    lạnh và là điểm đến lý tưởng cho các hoạt động thể thao mùa đông như trượt tuyết.</li>
                    <li>Nổi bật với cảnh quan thiên nhiên tươi đẹp, Sapporo, thủ phủ của Hokkaido, nổi tiếng với lễ hội tuyết vào mùa đông và món mì ramen đặc trưng.</li>

                </ul>
            </div>
        </div>
        <!-- Project 4 -->
        <div class="project-container-right">
            <img class="project-image-right" src="assets/img/Osaka.jpg" alt="Mount Fuji">
            <div class="project-info-right">
                <h2>Osaka</h2>
                <ul>
                    <li>Osaka là thành phố lớn thứ ba của Nhật Bản, nổi tiếng với ẩm thực đặc sắc như takoyaki, okonomiyaki và kushikatsu.</li>
                    <li>Thành phố này cũng có nhiều địa danh lịch sử như Lâu đài Osaka và đền Shitenno-ji. Osaka là điểm đến hấp dẫn với các khu vui chơi như Universal Studios Japan và khu phố Dotonbori sôi động.</li>
                    <li>Phú Sĩ là biểu tượng nổi tiếng của đất nước này, được UNESCO công nhận là di sản thế giới. </li>
                    <li>Đây là nơi hòa quyện giữa văn hóa truyền thống và nhịp sống hiện đại, thu hút du khách bởi sự đa dạng trong ăn uống, mua sắm và giải trí.</li>
                </ul>
            </div>
        </div>
        </div>
            </div>
          <h2 id="projects" STYLE="MARGIN-TOP:30PX; COLOR:BLUE; text-align:center;  padding:10px;">GIÁ THAM KHẢO VÀ ĐẶT VÉ</h2>
            <div id="price" style="margin:20px 30px; text-align:center" class="tour-price">
<?php
$servername = "localhost";
$username   = "rbgdcnwyhosting_manager"; 
$password   = "Admin@123"; 
$dbname     = "rbgdcnwyhosting_manager";         

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Kết nối thất bại: " . $conn->connect_error;
    exit();
}

$categoryIds = [1, 3, 4]; // Các danh mục muốn hiển thị

// CSS
echo '<style>
.slider-container {
    position: relative;
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    margin: 30px auto;
    box-sizing: border-box; /* Thêm vào để tránh lệch khi có padding hoặc border */
}

a {
    text-decoration: none;
    color: black;
}

.category-title {
    font-size: 22px;
    font-weight: bold;
    margin: 10px 0 10px 10px;
}

.slider-track {
    display: flex;
    transition: transform 0.5s ease;
    width: max-content;
    min-width: 100%;
    justify-content: center; /* Đảm bảo các slide trong track được căn giữa */
}

.slide {
    width: 340px;
    margin: 0 10px;
    background: #fff;
    border-radius: 8px;
    border: 1px solid #ccc;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}

.slide img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.slide-content {
    padding: 10px;
    text-align: left;
}

.slide-title {
    font-size: 18px;
    font-weight: bold;
    text-align: left;
}

.slide-info {
    font-size: 16px;
    margin-top: 4px;
    text-align: left;
}

.slide-info span {
    color: red;
}

.slide-price {
    font-size: 18px;
    color: #d60000;
    font-weight: bold;
    margin-top: 6px;
    text-align: left;
}

.slider-buttons {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.slider-button {
    background: rgba(0,0,0,0.5);
    color: white;
    border: none;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
}

.slider-button:hover {
    background: rgba(0,0,0,0.8);
}

</style>';

foreach ($categoryIds as $catId) {
    $sql = "SELECT t.title, t.duration, t.departure, t.price, t.image_url, c.name AS category_name, t.slug AS tour_slug
            FROM tours t
            JOIN tour_categories c ON t.category_id = c.id
            WHERE c.id = $catId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $firstRow = $result->fetch_assoc();
        $categoryName = $firstRow['category_name'];

        echo '<div  class="slider-container" id="sliderContainer_' . $catId . '">
                <h3 class="category-title" style="color:red; font-size:28px; text-transform: uppercase;">' . $categoryName . '</h3>
                <div class="slider-track" id="sliderTrack_' . $catId . '">' ;

        mysqli_data_seek($result, 0); // reset pointer

        while($row = $result->fetch_assoc()) {
            $tourLink = $row['tour_slug'];
            echo '<a target="_blank" href="' . $tourLink . '" class="slide">
                    <img src="' . $row['image_url'] . '" alt="' . $row['title'] . '" />
                    <div class="slide-content">
                        <div class="slide-title">' . $row['title'] . '</div>
                        <div class="slide-info">🕒 Thời gian: <span>' . $row['duration'] . '</span></div>
                        <div class="slide-info">📍 Xuất phát: <span>' . $row['departure'] . '</span></div>
                        <div class="slide-price">' . number_format($row['price'], 0, ',', '.') . '₫</div>
                    </div>
                  </a>';
        }

        echo '</div>
              <div class="slider-buttons">
                <button class="slider-button" onclick="slideLeft(' . $catId . ')">❮</button>
                <button class="slider-button" onclick="slideRight(' . $catId . ')">❯</button>
              </div>
              </div>';
    } else {
        echo "<p>Không có tour trong danh mục ID $catId.</p>";
    }
}

$conn->close();
?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Lặp qua tất cả các container slider
    const sliderContainers = document.querySelectorAll('.slider-container');

    sliderContainers.forEach((sliderContainer) => {
        const catId = sliderContainer.id.split('_')[1]; // Lấy ID từ phần tử
        const track = document.getElementById('sliderTrack_' + catId);
        let currentPosition = 0;
        let slideWidth;
        let autoSlideInterval;  // Đảm bảo biến autoSlideInterval được khai báo

        updateSlideWidth(track); // Cập nhật chiều rộng của slide khi trang tải
        window.addEventListener('resize', () => updateSlideWidth(track)); // Cập nhật khi thay đổi kích thước

        // Kiểm tra xem track có đủ nội dung để tự động trượt không
        if (track.scrollWidth > sliderContainer.clientWidth) {
            startAutoSlide(track); // Bắt đầu tự động trượt

            // Dừng auto slide khi hover
            sliderContainer.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
            // Tiếp tục auto slide khi bỏ chuột
            sliderContainer.addEventListener('mouseout', () => startAutoSlide(track));
        }

        // Hàm bắt đầu tự động chạy slide
        function startAutoSlide(track) {
            autoSlideInterval = setInterval(() => {
                slideRight(track); // Gọi hàm slideRight mỗi 3 giây
            }, 3000); // Mỗi 3 giây chuyển slide
        }

        // Cập nhật lại chiều rộng slide
        function updateSlideWidth(track) {
            const slideEl = track.querySelector('.slide');
            if (slideEl) {
                slideWidth = slideEl.offsetWidth + 20; // Tính chiều rộng của một slide
            }
        }

        // Di chuyển slider sang trái
        function slideLeft(track) {
            if (currentPosition < 0) {
                currentPosition += slideWidth;
                track.style.transform = `translateX(${currentPosition}px)`; // Cập nhật vị trí của track
            }
        }

        // Di chuyển slider sang phải
        function slideRight(track) {
            const maxScroll = -(track.scrollWidth - sliderContainer.offsetWidth);
            if (currentPosition > maxScroll) {
                currentPosition -= slideWidth;
                track.style.transform = `translateX(${currentPosition}px)`; 
            } else {
                currentPosition = 0;
                track.style.transform = `translateX(0px)`;
            }
        }

 
        sliderContainer.querySelector('.slider-buttons .slider-button:first-child').addEventListener('click', () => slideLeft(track));
        sliderContainer.querySelector('.slider-buttons .slider-button:last-child').addEventListener('click', () => slideRight(track));
    });
});
</script>

            </div>
        </section>
        <style>
        label {
            font-size:20px;
            font-weight:bold;
            color:white;
           
        }
        .col {
             text-align:left !important;
        }
        .contact_laha {
            text-decoration:none;
            color:black;
            font-size:17px;
        }
        .signup-section {
    background: url('../assets/img/japan.jpg') no-repeat center center;
    background-size: cover; 
    width: 100%;
    height: 800px; 
    position: relative;
}

        </style>
    <!-- Signup -->
<section class="signup-section" id="signup" >



    <style>

        /* Thông báo nổi */
        .notification {
            position: fixed !important;
            bottom: 20px  !important;
            right: 20px  !important;
            min-width: 250px  !important;
            background-color: #4CAF50  !important;
            color: white  !important;
            text-align: center  !important;
            border-radius: 5px  !important;
            padding: 16px  !important;
            z-index: 1000  !important;
            font-size: 16px  !important;
            opacity: 0  !important;
            transform: translateY(-20px)  !important;
            transition: opacity 0.5s, transform 0.5s  !important;
        }

        .notification.show {
            opacity: 1  !important;
            transform: translateY(0)  !important;
        }

        .notification.hide {
            opacity: 0  !important;
            transform: translateY(-20px)  !important;
            transition: opacity 0.5s, transform 0.5s  !important;
        }
registerForm {
    margin-top: 0px;
    width: 100%;
    max-width: 700px;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Căn chỉnh phần liên hệ */
.contact-section {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
}

/* Form inputs */
.registerForm .form-control {
    border-radius: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    transition: all 0.3s ease-in-out;
}

.registerForm .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Nút submit */
#submitButton {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    margin-top:15px;
}
.form-control {
    width:100%;
}
#submitButton:hover {
    background-color: #0056b3;
}

    </style>
      
        <div style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; width: 80%; margin:-100px auto 0px; border-radius: 15px;">
<div class="contact-section" style="display: flex; align-items: center; justify-content: center; gap: 10px;">
    <h2 style="margin: 0;">LIÊN HỆ NGAY!</h2>

</div>

        <form id="registerForm" class="registerForm" style="margin: 20px 0px; max-width:900px; margin-left: auto; margin-right: auto;">
            <div class="mb-3">
                <label for="hoten" class="form-label">Họ và tên</label>
                <input class="form-control" id="hoten" type="text" name="hoten" placeholder="Nhập họ tên..." required>
            </div>

            <div class="mb-3">
                <label for="sodienthoai" class="form-label">Số điện thoại</label>
                <input class="form-control" id="sodienthoai" type="tel" name="sodienthoai" placeholder="Nhập số điện thoại..." pattern="[0-9]{10,11}" required>
            </div>

            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ</label>
                <input class="form-control" id="diachi" type="text" name="diachi" placeholder="Nhập địa chỉ..." required>
            </div>

            <div class="mb-3">
                <label for="soluong" class="form-label">Số lượng người</label>
                <input class="form-control" id="soluong" type="number" name="soluong" placeholder="Nhập số lượng người..." min="1" required>
            </div>

            <div class="text-center">
                <button class="btn btn-primary" id="submitButton" type="submit">Gửi thông tin</button>
            </div>
        </form>

        <div id="notification" class="notification"></div>
    </div>
    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault(); 

            let formData = new FormData(this);

            fetch("process.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                showNotification(data.message, data.success);
                if (data.success) {
                    document.getElementById("registerForm").reset();
                }
            })
            .catch(error => console.error("Error:", error));
        });

        function showNotification(message, success = true) {
            let notification = document.getElementById("notification");
            notification.innerHTML = message;
            notification.style.backgroundColor = success ? "#4CAF50" : "#f44336";
            notification.classList.add("show");

            setTimeout(() => {
                notification.classList.add("hide");
            }, 3000);

            setTimeout(() => {
                notification.classList.remove("show", "hide");
            }, 3500);
        }
    </script>


        </div>
    </section>

<!-- Contact-->
<footer class="contact-section bg-black">
    <h2 style="text-align:center; margin-bottom:20px; margin-top:-20px; color:white">THÔNG TIN CÔNG TY</h2>
    <div class="container-fluid"> <!-- Chuyển từ container thành container-fluid để bỏ padding 2 bên -->
        <div class="row gx-4"> <!-- Sử dụng gx-4 để tạo khoảng cách giữa các cột -->
            <!-- Ô 1: Address -->
            <div class="col-md-2 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center" style="color:black;">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4 mx-auto" />
                        <div class=" text-black-90">A6 - Nguyễn Ái Quốc, Tân Phong, Biên Hòa, Đồng Nai</div>
                    </div>
                </div>
            </div>
            <!-- Ô 2: Email -->
            <div class="col-md-2 mb-3 mb-md-0">
                <a style="text-decoration:none; color:black" class="contact_laha" href="mailto:sub5phut@gmail.com">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class=" text-black-90">sub5phut@gmail.com</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Ô 3: Facebook -->
            <div class="col-md-2 mb-3 mb-md-0">
                <a style="text-decoration:none; color:black" target="_blank" class="contact_laha" href="https://www.facebook.com/lahahouse">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fab fa-facebook-f text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Facebook</h4>
                            <hr class="my-4 mx-auto" />
                            <div class=" text-black-90">Laha's House</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Ô 4: Website -->
            <div class="col-md-2 mb-3 mb-md-0">
                <a style="text-decoration:none; color:black" target="_blank" class="contact_laha" href="https://lahatravel.com/">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Website</h4>
                            <hr class="my-4 mx-auto" />
                            <div class=" text-black-90">Công ty TNHH TMDV Laha's house</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Ô 5: Đơn Vị Hợp Tác -->
            <div class="col-md-2 mb-3 mb-md-0">
                <a style="text-decoration:none; color:black" target="_blank" class="contact_laha" href="https://hktraveljapan.jp/">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-handshake text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Đơn Vị Hợp Tác</h4>
                            <hr class="my-4 mx-auto" />
                            <div class=" text-black-90">HK Travel Japan</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <p style="color:white; margin-top:10px">Copyright &copy by <a target="_blank" style="text-decoration:none; color:#87cefa" href="https://nidtech.vn/">Nidtech</a></p>
        </div>
    </div>
</footer>

<style>
.contact-section .container-fluid {
    padding: 10px; /* Loại bỏ padding của container */
}

.contact-section .row {
    margin: 0; /* Loại bỏ margin của row */
    padding: 0; /* Loại bỏ padding của row */
}

/* Cấu hình các cột cho desktop */
.contact-section .col-md-2,
.contact-section .col-md-3 {
    padding: 0 5px; /* Thêm khoảng cách giữa các ô */
}

/* Các cột sẽ có độ rộng linh động */
.contact-section .col-md-2 {
    flex: 1 1 20%; /* Các cột sẽ có tỷ lệ rộng 20% */
}

.contact-section .col-md-3 {
    flex: 1 1 30%; /* Các cột sẽ có tỷ lệ rộng 30% */
}

/* Media Query cho điện thoại và tablet */
@media (max-width: 768px) {
    .contact-section .col-12 {
        padding: 0 10px !important; /* Thêm padding giữa các ô trên điện thoại */
    }

    /* Các cột sẽ chiếm toàn bộ chiều rộng */
    .contact-section .col-md-2,
    .contact-section .col-md-3 {
        flex: 1 1 100%; /* Chiếm toàn bộ chiều rộng trên màn hình nhỏ */
    }
}

</style>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
