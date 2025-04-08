<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <title>Đánh giá</title>
</head>

<body>
    <!-- Start Navbar -->
    <div class="container">
        <nav class="navbar">
            <ul>
                <li><a href="#">Shop Thời Trang</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Đồ chạy bộ</a></li>
                <li><a href="#">Phụ kiện</a></li>
                <li><a href="#">Đồ bơi</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Liên hệ</a></li>
                <div class="nav-icon">
                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li><i class="fa-solid fa-cart-shopping"></i></li>
                    <li><i class="fa-solid fa-circle-user"></i></li>
                </div>
            </ul>
        </nav>
    </div>
    <!-- End Navbar -->

    <!-- Start Section Review -->
    <section>
        <div class="nav-back">
            <div class="back"><i class="fa-solid fa-arrow-left"></i></div>
            <div class="content-back">Đánh giá sản phẩm</div>
        </div>
        <div class="review">
            <div class="container-review">
                <form action="#" method="POST">
                    <div class="lab-review">
                        <div class="data-product-review">
                            <div class="product-image-review"><img src="aothunnam.jpg" alt="" id="image_url" name="image_url"></div>
                            <div class="product-name-review" id="name" name="name">Áo thun nam</div>
                        </div>
                        <span>Đánh giá sản phẩm</span>
                        <div class="number-review">
                            <div class="star" id="rating" name="rating" data-value="1"></div>
                            <div class="star" id="rating" name="rating" data-value="2"></div>
                            <div class="star" id="rating" name="rating" data-value="3"></div>
                            <div class="star" id="rating" name="rating" data-value="4"></div>
                            <div class="star" id="rating" name="rating" data-value="5"></div>
                        </div>
                        <div class="bark-review">
                            <span>Viết đánh giá</span>
                            <textarea name="comment" id="comment" placeholder="Viết đánh giá sản phẩm tại đây..."></textarea>
                            <button type="submit" class="btn-submit-review">Gửi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Section Review -->

    <script>
        const stars = document.querySelectorAll('.star');
        // var comment = document.getElementById('comment').value;

        //star
        stars.forEach(star => {
            star.addEventListener('click', function() {
                //get value star when click
                const rateStar = this.getAttribute('data-value');

                //delete active out star
                stars.forEach(s => {
                    s.classList.remove('active');
                })

                //add active in star when click
                for (let i = 1; i <= rateStar; i++) {
                    document.querySelector(`.star[data-value="${i}"]`).classList.add('active');
                }
            });
        });

        // function checkComment() {
        //     if (comment.trim() === "") {
        //         alert("Vui lòng nhập đánh giá của bạn");
        //         return false;
        //     }
        //     return true;
        // }
    </script>
</body>

</html>