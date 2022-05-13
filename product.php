<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ساعت مچی</title>
    <link rel="icon" href="https://www.watchonline.ir/wp-content/themes/watchonline/images/favicon.ico"
          type="image/ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="css/custom-style.css">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/jquery.cookie/jquery.cookie.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script type="text/javascript" src="node_modules/@oroinc/elevatezoom/jquery.elevatezoom.js"></script>
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
    <div class="container">
        <div class="wrapper mx-auto">
            <div class="row justify-content-start align-items-center">
                <div class="col-12">
                    <div class="homeList"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-5 col-md-3 col-lg-2">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header p-1 text-center" style="color: #666">
                            <span class="mb-0">فهرست فیلترها</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-1" id="headingOne">
                            <h5 class="mb-0">
                                <button style="color: #666;" class="btn btn-link btn-block text-right p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseOne" aria-controls="collapseOne">برند<span
                                        class="fa fa-angle-down fa-1x"></span></button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                            <div class="card-body filter-list">
                                <ul data-filter="brand" class="custom-list"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-1" id="headingTwo">
                            <h5 class="mb-0">
                                <button style="color: #666" class="btn btn-link btn-block text-right p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseTwo" aria-controls="collapseTwo">مناسب برای<span
                                        class="fa fa-angle-down fa-1x"></span></button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                            <div class="card-body filter-list">
                                <ul data-filter="for" class="custom-list"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-1" id="headingThree">
                            <h5 class="mb-0">
                                <button style="color: #666" class="btn btn-link btn-block text-right p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseThree" aria-controls="collapseThree">ملیت برند<span
                                        class="fa fa-angle-down fa-1x"></span></button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                            <div class="card-body filter-list">
                                <ul data-filter="nationality" class="custom-list"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 col-md-9 col-lg-10">
                <div class="col-12 p-0 m-0 bg-white">
                    <nav aria-label="breadcrumb" class="custom-breadcrumb bg-white">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><span class="fa fa-home"></span></a></li>
                            <li class="breadcrumb-item active" aria-current="page">ساعت مچی</li>
                        </ol>
                    </nav>
                </div>
                <div class="row no-gutters product_wrapper"></div>
                <nav aria-label="Page navigation" class="mt-2">
                    <ul class="pagination custom_pagination d-flex justify-content-center align-items-center">
                        <li class="page-item" data-arrow="prev">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span>&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item" data-arrow="next">
                            <a class="page-link" href="#" aria-label="Next">
                                <span>&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
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
<script>
    $(".accordion button").click(function () {
        if ($(".accordion button").hasClass("collapsed")) $(".accordion button span").css({transform: "rotate(180deg)"})
        else $(".accordion button span").css({transform: "rotate(0deg)"})
    })
</script>
</body>
</html>