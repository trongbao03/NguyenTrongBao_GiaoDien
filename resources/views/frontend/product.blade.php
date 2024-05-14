<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
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

    <section class="product-list">
        <div class="filter-sort">
            <!-- Chèn các phần lọc và sắp xếp ở đây -->
            <select name="filter">
                <option value="price">Giá</option>
                <option value="name">Tên</option>
                <!-- Thêm các tùy chọn khác nếu cần -->
            </select>
            <button class="sort-btn">Sắp xếp</button>
        </div>
        <div class="type-view">
            <!-- Chèn các nút xem theo danh sách hoặc lưới ở đây -->
            <button class="list-view-btn">Xem danh sách</button>
            <button class="grid-view-btn">Xem lưới</button>
        </div>
        <div class="product-cards">
            <!-- Danh sách các sản phẩm -->
            <div class="product-card">
                <!-- Thẻ sản phẩm -->
                <a href="product_detail.html">
                    <img src="image/product1.jpg" alt="Product 1">
                    <h3>Tên sản phẩm 1</h3>
                    <p>Giá: $100</p>
                    <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
                </a>
            </div>
            <div class="product-card">
                <!-- Thẻ sản phẩm -->
                <a href="product_detail.html">
                    <img src="image/product1.jpg" alt="Product 1">
                    <h3>Tên sản phẩm 1</h3>
                    <p>Giá: $100</p>
                    <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
                </a>
            </div>
            <div class="product-card">
                <!-- Thẻ sản phẩm -->
                <a href="product_detail.html">
                    <img src="image/product1.jpg" alt="Product 1">
                    <h3>Tên sản phẩm 1</h3>
                    <p>Giá: $100</p>
                    <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
                </a>
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
