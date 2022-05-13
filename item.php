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
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="css/custom-style.css">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/jquery.cookie/jquery.cookie.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script type="text/javascript" src="node_modules/@oroinc/elevatezoom/jquery.elevatezoom.js"></script>
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
    <div class="bg-white" style="width: 80%;margin: auto">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="custom-breadcrumb mb-3 px-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><span class="fa fa-home"></span></a></li>
                        <li class="breadcrumb-item"><a href="#">ساعت مچی</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row watch justify-content-start align-items-start px-5">
            <div class="col-12 col-md-5  border row justify-content-between align-items-start bg-white" style="direction: ltr">
                <div>
                    <div class="py-2"><span class="fa fa-share-alt"></span></div>
                    <div class="py-2"><span class="fa fa-heart-o"></span></div>
                </div>
                <img src="" alt="" class="img-fluid" style="width: 380px;object-fit: cover" data-zoom-image=""
                     id="zoomImg">
            </div>
            <div class="col-12 col-lg-4 col-md-6 mr-3 my-3 h-100">
                <div class="card h-100 position-relative">
                    <p class="">برند :<span data-tag="brand"></span></p>
                    <p class="">ملیت برند :<span data-tag="nationality"></span></p>
                    <p class="">مناسب برای :<span data-tag="for"></span></p>
                    <p class="">کد کالا :<span data-tag="code"></span></p>
                    <p>قیمت نهایی :<span data-tag="price" class="text-success"></span></p>
                    <button class="btn btn-success add-to-shopping-cart">افزودن به سبد خرید<span
                            class="fa fa-shopping-cart"></span></button>
                </div>
            </div>
        </div>

        <div class="row">
            <h6 id="watch-detail" class="col-12 mt-2 mr-3"></h6>
            <div class="col-12">
                <button type="button" class="btn-item active" id="btn-item-tbl">مشخصات فنی</button>
                <button type="button" class="btn-item" id="btn-item-msg">نظرات کاربران</button>
            </div>
            <div class="col-12">
                <table class="show" id="watch-detail-tbl" data-target="#btn-item-tbl">
                    <tbody>
                    <tr>
                        <td>ملیت برند :</td>
                        <td data-tag="nationality"></td>
                    </tr>
                    <tr>
                        <td>گارانتی :</td>
                        <td data-tag="warranty"></td>
                    </tr>
                    <tr>
                        <td>مناسب برای :</td>
                        <td data-tag="for"></td>
                    </tr>
                    <tr>
                        <td>مقاومت در برابر آب :</td>
                        <td data-tag="resistance"></td>
                    </tr>
                    <tr>
                        <th>مشخصات فیزیکی</th>
                    </tr>
                    <tr>
                        <td>فرم هندسی قاب :</td>
                        <td data-tag="formFrame"></td>
                    </tr>
                    <tr>
                        <td>ابعاد قاب ( طولxعرضxضخامت) :</td>
                        <td data-tag="dimensions"></td>
                    </tr>
                    <tr>
                        <td>رنگ صفحه :</td>
                        <td data-tag="colorPage"></td>
                    </tr>
                    <tr>
                        <td>جنس قاب :</td>
                        <td data-tag="materialFrame"></td>
                    </tr>
                    <tr>
                        <td>رنگ قاب :</td>
                        <td data-tag="colorFrame"></td>
                    </tr>
                    <tr>
                        <td>جنس بند :</td>
                        <td data-tag="materialStrap"></td>
                    </tr>
                    <tr>
                        <td>رنگ بند :</td>
                        <td data-tag="colorStrap"></td>
                    </tr>
                    <tr>
                        <td>جنس شیشه :</td>
                        <td data-tag="materialGlass"></td>
                    </tr>
                    <tr>
                        <td>نوع قفل :</td>
                        <td data-tag="lock"></td>
                    </tr>
                    <tr>
                        <td>نحوه بسته شدن درب پشت :</td>
                        <td data-tag="closeType"></td>
                    </tr>
                    <tr>
                        <th>مشخصات موتور</th>
                    </tr>
                    <tr>
                        <td>تکنولوژی موتور :</td>
                        <td data-tag="motorTech"></td>
                    </tr>
                    <tr>
                        <td>شرکت سازنده موتور :</td>
                        <td data-tag="motorCompany"></td>
                    </tr>
                    <tr>
                        <td>تعداد موتور :</td>
                        <td data-tag="motorNumber"></td>
                    </tr>
                    <tr>
                        <td>نیرو محرکه :</td>
                        <td data-tag="power"></td>
                    </tr>
                    <tr>
                        <th>مشخصات تکمیلی</th>
                    </tr>
                    <tr>
                        <td>نوع صفحه نمایش :</td>
                        <td data-tag="bgType"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="slider02 mx-auto my-5 d-none">
                    <p class="font-14">سایر کالاهایی که ممکن است به بررسی آنها نیز علاقه مند باشید.
                    </p>
                    <div class="glide" id="glide_02">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides"></ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><span
                                    class="fa fa-angle-left"></span></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><span
                                    class="fa fa-angle-right"></span></button>
                        </div>
                    </div>
                </div>
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
    $(function () {
        $(".btn-item").click(function () {
            $.each($(".btn-item"), function () {
                $(this).removeClass("active")
            })
            $(this).addClass("active")
            $("[data-target='#" + $(this).attr(id) + "']").addClass("show")
        })
    })
</script>
</body>
</html>