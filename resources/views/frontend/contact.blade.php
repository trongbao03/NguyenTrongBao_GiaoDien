<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- Header section -->
    <header>
        <div class="logo">
            <img src="image/logo.png" alt="Logo">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="product.html">Sản phẩm</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <a href="login.html">Đăng nhập</a>
            <a href="cart.html">Giỏ hàng</a>
            <form action="#" method="GET">
                <input type="text" name="search" placeholder="Tìm kiếm...">
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
    </header>

    <div class="contact-container">
        <section class="google-map">
            <!-- Chèn Google map vào đây -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.364112472326!2d-122.40611048561196!3d37.78597797485757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580af23865739%3A0x2a8e7f5d0ae6526b!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2suk!4v1634566660562!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        
        <section class="contact-info">
            <!-- Thông tin liên hệ -->
            <div class="contact-details">
                <h2>Thông tin liên hệ</h2>
                <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ, Quốc gia</p>
                <p>Số điện thoại: 123-456-789</p>
                <p>Email: info@example.com</p>
            </div>
        </section>
    </div>
    
    

    <!-- Contact form -->
    <section class="contact-form">
        <!-- Form liên hệ -->
        <form action="#" method="POST">
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Nội dung:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Gửi</button>
        </form>
    </section>

    <!-- Footer section -->
    <footer>
        <div class="footer-content">
            <p>Footer content</p>
        </div>
        <div class="copyright">
            <p>&copy; 2024 </p>
        </div>
    </footer>
</body>
</html>
