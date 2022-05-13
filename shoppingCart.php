<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ساعت مچی</title>
    <link rel="icon" href="https://www.watchonline.ir/wp-content/themes/watchonline/images/favicon.ico"
          type="image/ico">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="css/custom-style.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/@glidejs/glide/dist/glide.js"></script>
    <script src="node_modules/jquery.cookie/jquery.cookie.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
    <script src="js/product.js" defer></script>
</head>
<body>
<!--Header-->
<header id="header">
    <nav class="navbar-custom d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="#"><img src="image/xwatchonline-logo-1.png.pagespeed.ic.5XcovwL84S.webp" alt=""></a>
        </div>
        <div class="search-inp-wrap">
            <input type="search" id="search" placeholder="محصول خود را جستجو کنید" name="search" autocomplete="false">
            <button type="button"><span class="fa fa-search"></span></button>
        </div>

        <div class="header-account">
            <div class="header-account-btn">
                <a href="#"><span class="fa fa-user"></span> ثبت نام / ورود</a>
            </div>
        </div>
        <div class="header-cart">
            <div class="header-cart-btn">
                <a href="#"><span class="fa fa-shopping-bag"></span> سبد خرید <span
                        class="header-cart-shop" id="header-cart-shop">0</span></a>
            </div>
        </div>
    </nav>
    <nav class="navbar-menu">
        <li class="navbar-menu-item active">
            <a class="navbar-menu-link" href="#">صفحه نخست</a>
        </li>
        <li class="navbar-menu-item">
            <a class="navbar-menu-link" href="#">ساعت مردانه</a>
        </li>
        <li class="navbar-menu-item">
            <a class="navbar-menu-link" href="#">ساعت زنانه</a>
        </li>
        <li class="navbar-menu-item">
            <a class="navbar-menu-link" href="#">ساعت های ست</a>
        </li>
    </nav>
</header>
<!--Main-->
<main id="main">
    <div class="container-fluid pt-4 p-md-5" style="background: #F4F4F4">
        <div class="row justify-content-center align-items-center" style="overflow: hidden">
            <div class="col-12 col-md-8 col-lg-9">
                <h3 class="mb-3 text-secondary">محصولات خریداری شده توسط شما :</h3>
                <table class="table bg-white table-bordered">
                    <thead>
                    <tr>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th>قیمت واحد (تومان)</th>
                        <th>تعداد</th>
                        <th>جمع واحد (تومان)</th>
                        <th>جزئیات</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                    <caption>قیمت کل : <span class="text-danger" id="countSumPrice"></span></caption>
                </table>
            </div>
        </div>
    </div>
</main>
<!--Footer-->
<footer id="footer">
    <div class="container-fluid">
        <div class="wrapper footer-wrapper mx-auto">
            <div class="col-12">
                <div class="row justify-content-between align-items-start">
                    <div class="col-12 col-lg-4">
                        <div class="content text-center">
                            <h6 class="title">درباره واچ آنلاین</h6>
                            <ul>
                                <li><a href="#">درباره واچ آنلاین</a></li>
                                <li><a href="#">درباره وومگ</a></li>
                                <li><a href="#">تماس با واچ آنلاین</a></li>
                                <li><a href="#">فرصت های شقلی</a></li>
                                <li><a href="#">حریم خصوصی</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="content text-center">
                            <h6 class="title">راهنمای مشتریان</h6>
                            <ul>
                                <li><a href="#">راهنمای خرید از واچ آنلاین</a></li>
                                <li><a href="#">روش های ارسال سفارش</a></li>
                                <li><a href="#">روش های پرداخت</a></li>
                                <li><a href="#">روش های متداول</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="content text-center">
                            <h6 class="title">خدمات مشتریان</h6>
                            <ul>
                                <li><a href="#">گارانتی و خدمات پس از فروش</a></li>
                                <li><a href="#">ضمانت اصالت و گارانتی کالا</a></li>
                                <li><a href="#">7روز ضمانت بازگشت کالا</a></li>
                                <li><a href="#">تضمین بهترین قیمت</a></li>
                                <li><a href="#">شرایط و قوانین</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" style="background: #f7f7f7">
            <div class="row justify-content-around align-items-center p-4">
                <p class="para"><a href="#">تماس با واچ آنلاین (ساعات اداری) : 021 - 91 30 40 85 - 021 - 88 65 50 57 |
                    واتس اپ : 0910 762 55 65</a></p>
                <div class="socialIcon">
                    <span class="fab fa-telegram"></span>
                    <span class="fab fa-instagram"></span>
                    <span class="fab fa-youtube"></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>