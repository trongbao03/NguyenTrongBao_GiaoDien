<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- Header section -->
    <header>
        <div class="logo">
            <img src="{{asset('image/logo.png')}}" alt="Logo">
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

    <section class="product-detail">
        
        <div class="product-info">
            
            <img src="{{asset('image/product1.jpg')}}" alt="Product 1">
            <h2>Tên sản phẩm</h2>
            <p>Giá: $100</p>
            <p>Mã sản phẩm: ABC123</p>
            <p>Thương hiệu: XYZ</p>
            <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
            <button class="add-to-cart-btn">Mua</button>
        </div>
        
        <div class="product-description">
            
            <h3>Mô tả sản phẩm</h3>
            <p>Đây là mô tả chi tiết về sản phẩm. Bạn có thể thêm bất kỳ thông tin nào bạn muốn ở đây.</p>
        </div>
        
        <div class="same-category-products">
            <h3>Các sản phẩm cùng danh mục</h3>
            <div class="product-card">
                <img src="{{asset('image/product1.jpg')}}" alt="Product 2">
                <h3>Tên sản phẩm 2</h3>
                <p>Giá: $120</p>
                <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
            </div>
        </div>
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
