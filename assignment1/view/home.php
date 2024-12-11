<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="./public/css.css">
</head>

<body>
    <!-- Thẻ chứa toàn bộ nội dung của trang chủ -->
    <div id="app">
        <!-- Header của trang chủ -->
        <header>
            <!-- Trong header có 3 phần -->
            <!-- logo -->
            <img src="./public/image/logo-poly.png" alt="" class="header__logo">
            <!-- menu -->
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li>
                        <a href="">Shop</a>
                        <div class="nav__sub">
                            <ul>
                                <li><a href="">Light</a></li>
                                <li><a href="">Sofa</a></li>
                                <li><a href="">Ketchen</a></li>
                                <li><a href="">Table</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <div class="header__action">
                <!-- user -->
                <span id="login"><i class="fa-regular fa-user"></i></span>
                <!-- search -->
                <i class="fa-solid fa-magnifying-glass"></i>
                <!-- heart -->
                <i class="fa-regular fa-heart"></i>
                <!-- cart -->
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </header>

        <div id="modal" class="modal">
            <div id="modal__overlay" class="modal__overlay"></div>
            <div class="modal__content">
                <!-- thẻ của phần đăng nhập -->
            </div>
        </div>
        <div class="box__banner">
            <h1 class="box__banner_h1">Trang chủ</h1>
            <p class="box__banner_p">Home</p>
        </div>
        <main>
            <div class="box__product">
                <h3 class="home__box_h3">Danh sách sản phẩm</h3>
                <hr class="home__box_hr" />
                <div class="products">
                    <?php
                    debug($products);
                    foreach ($products as $product) {
                    ?>
                        <article>
                            <img class="product__img" src="./public/image/<? $product['img'] ?>" alt="">
                            <div class="product__info">
                                <h3 class="info__title"><? $product['title'] ?></h3>
                                <div class="info__price">
                                    <span class="price__sale"><? $product['sale'] ?></span>
                                    <span class="price__init"><? $product['init'] ?></span>
                                </div>
                            </div>
                            <div class="product__overlay">
                                <button class="btn btn__view">View product</button>
                                <button class="btn btn__addCart">Add to cart</button>
                                <div class="overlay_action">
                                    <div class="action">
                                        <span class="action__icon"><i class="fa-solid fa-share-nodes"></i></span>
                                        <span class="action__name">Share</span>
                                    </div>
                                    <div class="action">
                                        <span class="action__icon"><i class="fa-solid fa-right-left"></i></span>
                                        <span class="action__name">Compare</span>
                                    </div>
                                    <div class="action">
                                        <span class="action__icon"><i class="fa-regular fa-heart"></i></span>
                                        <span class="action__name">Like</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
        <div class="footer__top">
            <div class="footer__top_box">
                <i class="fa-solid fa-medal"></i>
                <div class="footer__top_box_nd">
                    <h3>Hight Quality</h3>
                    <p>crafted from top materials</p>
                </div>
            </div>
            <div class="footer__top_box">
                <i class="fa-solid fa-award"></i>

                <div class="footer__top_box_nd">
                    <h3>Warranty Protection</h3>
                    <p>Over 2 years</p>
                </div>
            </div>
            <div class="footer__top_box">
                <i class="fa-solid fa-truck-fast"></i>

                <div class="footer__top_box_nd">
                    <h3>Free Shipping</h3>
                    <p>Order over 150 $</p>
                </div>
            </div>
            <div class="footer__top_box">
                <i class="fa-solid fa-headset"></i>

                <div class="footer__top_box_nd">
                    <h3>24 / 7 Support</h3>
                    <p>Dedicated support</p>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer">
                <div class="footer_row">
                    <img class="footer_row_logo" src="./public/image/logo-poly.png" alt="logo">
                    <p class="footer_row_p">400 University Drive Suite 200 Coral Gables,</p>
                    <p class="footer_row_p">FL 33134 USA</p>
                </div>
                <div class="footer_row">
                    <h5 class="footer_row_h5">Links</h5>
                    <p class="footer_row_nd">Home</p>
                    <p class="footer_row_nd">shop</p>
                    <p class="footer_row_nd">About</p>
                    <p class="footer_row_nd">Contact</p>
                </div>
                <div class="footer_row">
                    <h5 class="footer_row_h5">Help</h5>
                    <p class="footer_row_nd">Payment Options</p>
                    <p class="footer_row_nd">Returns</p>
                    <p class="footer_row_nd">Privacy Policies</p>
                </div>
                <div class="footer_row">
                    <h5 class="footer_row_h5">Newsletter</h5>
                    <div class="footer_row_noidung">
                        <p class="footer_row_trai">Enter Your Email Address</p>
                        <p class="footer_row_phai">SUBSCRIBE</p>
                    </div>
                </div>
            </div>
            <hr class="footer__bottom_hr">
            <p class="footer__bottom_p">2023 furino. All rights reverved</p>
        </footer>
    </div>
</body>

</html>