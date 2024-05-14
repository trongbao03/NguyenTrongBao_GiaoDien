<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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


    <div class="marquee">
        <marquee direction="left" scrollamount="12" ;="">
           <div style="white-space: nowrap;display: flex;align-items: center;">
              <p>Giảm giá các mặt hàng đồ jean lên đến 20% tại NTBSHOP - GenZ Fashion New </p>
           </div>
        </marquee>
     </div>
    <!-- Slider -->
    <section class="slider">
        <div class="slider-container">
            <div class="slide">
                <img src="image/banner-bg.png" alt="Slider Image 1" class="slide-image">
                <div class="slide-caption"></div>
            </div>
        </div>
    </section>
    
    <!-- Product category -->
    <section class="product-category">
        <!-- Chèn danh sách các danh mục sản phẩm ở đây -->
    </section>

    <!-- Product new -->
    <section class="product-new">
        <!-- Chèn danh sách sản phẩm mới ở đây -->
    </section>

    <!-- Product sale -->
    <section class="product-sale">
        <!-- Chèn danh sách sản phẩm đang giảm giá ở đây -->
    </section>

    <!-- Post new -->
    <section class="post-new">
        <!-- Chèn danh sách bài viết mới ở đây -->
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
