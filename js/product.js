let watchesArr;
let numberSheet;
let folderImg;
let watchesRes;
let shoppingCartArr;

if (typeof $.cookie('shoppingList') === "undefined") shoppingCartArr = []
else {
    shoppingCartArr = JSON.parse($.cookie('shoppingList'))
    $("#header-cart-shop").html(JSON.parse($.cookie('shoppingList')).length)
}
$.ajax({
//   url: "http://localhost/watchProject/js/watchList.xml",
     url: "js/watchList.xml",
    success: function (response) {
        watchesRes = response
        watchesArr = $(response).find("watch")
        setFilter('brand')
        setFilter('for')
        setFilter('nationality')

        if (window.location.href.indexOf("shoppingCart") != -1) {
            addToShoppingTable()
        } else if (window.location.href.indexOf("item") != -1) {
            showWatchItem()
        } else {
            $(".imgWrap a").each(function (i, elem) {
                $(elem).click(function () {
                    folderImg = $(this).attr("data-group")
                    $(this).attr("href", "product.php?category=" + folderImg + "")
                })
            })
            folderImg = (window.location.href.indexOf("category=") !== -1) ? window.location.href.split("=")[1] : -1
            if (folderImg !== -1) {
                watchesArr = watchesArr.filter(function () {
                    return $(this).attr("data-group") == folderImg
                })
            }
            createWatchItem(1)
            createPagination()
        }
    },
    error: function () {
        alert("error")
    }
})

function createWatchItem(current, watchId = null) {
    window.scroll({behavior: "smooth", top: 0})
    $(".product_wrapper").html("")
    if (!isNaN(current)) {
        for (let i = 12 * (current - 1); i < current * 12; i++) {
            if (i >= watchesArr.length) return
            $(".product_wrapper").append(`<div class="col-12 col-md-6 col-lg-3"><a href="item.php?${$(watchesArr).eq(i).attr("id")}"><div class="card product_item">
                                <div class="card-body">
                                    <div class="product_item__img">
                                       <img src="image/${$(watchesArr).eq(i).attr("data-group")}/${$(watchesArr).eq(i).attr("id")}.jpg" class="img-fluid" alt="">
                                    </div>
                                    <hr>
                                    <div class="product_item__info">
                                        <div class="row justify-content-around align-items-center mt-0">
                                            <small class="price text-success text-center">
                                                ${numberWithCommas($(watchesArr).eq(i).children("price").text())} <small>${($(watchesArr).eq(i).children("price").text() === "ناموجود") ? "" : "تومان"}</small>
                                            </small>
                                            <div class="product_detail text-center">
                                                <small class="brand">${$(watchesArr).eq(i).children("brand").text()}</small>
                                                <small class="code">${$(watchesArr).eq(i).children("code").text()}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></a></div>`)
        }
    } else {
        watchesArr = watchesArr.filter(function () {
            return $(this).find("brand").text() === current && $(this).attr("id") != watchId;
        })
        if (watchesArr.length > 0) {
            $(".slider02").removeClass("d-none")
            $.each(watchesArr, function (i, watch) {
                $(".glide__slides").append(`<li class="glide__slide"><a href="item.php?${$(watchesArr).eq(i).attr("id")}"><div class="card product_item">
                                <div class="card-body">
                                    <div class="product_item__img">
                                       <img src="image/${$(watchesArr).eq(i).attr("data-group")}/${$(watchesArr).eq(i).attr("id")}.jpg" class="img-fluid" alt="">
                                    </div>
                                    <hr>
                                    <div class="product_item__info">
                                        <div class="row justify-content-around align-items-center mt-0">
                                            <small class="price text-success text-center">
                                                ${numberWithCommas($(watchesArr).eq(i).children("price").text())} <small></small>
                                            </small>
                                            <div class="product_detail text-center">
                                                <small class="brand">${$(watchesArr).eq(i).children("brand").text()}</small>
                                                <small class="code">${$(watchesArr).eq(i).children("code").text()}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></a></li>`)
            })
            if ($("#glide_02")) {
                new Glide('#glide_02', {
                    type: "slider",
                    perView: 4,
                    autoplay: false,
                    animationDuration: 500,
                    direction: "rtl",
                    gap: 0,
                    rewind: false,
                    rewindDuration: 500
                }).mount()
            }
        }
    }
}

function createPagination() {
    $(".custom_pagination").children("li:not([data-arrow])").remove()
    numberSheet = Math.ceil(watchesArr.length / 12)

    for (let i = 1; i <= numberSheet; i++) {
        $(".custom_pagination").children(".page-item").last().before(`<li class="page-item"><a class="page-link" href="#">${i}</a></li>`)
    }

    $(".custom_pagination .page-item:not([data-arrow]) .page-link").click(function (e) {
        e.preventDefault()
        $(".custom_pagination .page-item.active").removeClass("active")
        let currentPage = Number($(this).text())
        $(this).parent().addClass("active")
        createWatchItem(currentPage)
        movePage($(this).text())
    })

    $(".custom_pagination .page-item .page-link[aria-label='Previous']").parent().addClass("disabled")
    if ($(".custom_pagination .page-item:not([data-arrow])").length === 1) {
        $(".custom_pagination .page-item .page-link[aria-label='Previous']").parent().addClass("disabled")
        $(".custom_pagination .page-item .page-link[aria-label='Next']").parent().addClass("disabled")
    }
    $(".custom_pagination .page-item").eq(1).addClass("active").end().on("click", ".page-link[aria-label='Next']", function (e) {
        e.preventDefault()
        let next = Number($(".custom_pagination .page-item.active").text()) + 1
        movePage(next)

    }).on("click", ".page-link[aria-label='Previous']", function (e) {
        e.preventDefault()
        let prev = Number($(".custom_pagination .page-item.active").text()) - 1
        movePage(prev)
    })
}

function movePage(dir) {
    if (dir === 1) {
        $(".custom_pagination .page-item .page-link[aria-label='Previous']").parent().addClass("disabled")
        $(".custom_pagination .page-item .page-link[aria-label='Next']").parent().removeClass("disabled")
    } else if (dir >= numberSheet - 1) {
        $(".custom_pagination .page-item .page-link[aria-label='Next']").parent().addClass("disabled")
        $(".custom_pagination .page-item .page-link[aria-label='Previous']").parent().removeClass("disabled")
    } else {
        $(".custom_pagination .page-item .page-link[aria-label='Previous']").parent().removeClass("disabled")
        $(".custom_pagination .page-item .page-link[aria-label='Next']").parent().removeClass("disabled")
    }
    createWatchItem(dir)
    $(".custom_pagination .page-item.active").removeClass("active")
    $(".custom_pagination .page-item").eq(dir).addClass("active")
}

function showWatchItem() {
    const ID = window.location.href.split("?")[1]
    if (ID === undefined) error404()
    watchesArrItem = watchesArr.filter((i, watch) => {
        if ($(watch).attr("id") == ID)
            folderImg = $(watch).attr("data-group")
        return $(watch).attr("id") == ID
    })
    if (watchesArrItem.length === 0) error404()

    $(".watch img").attr("src", "image/" + folderImg + "/" + ID + ".jpg").attr("data-zoom-image", "image/" + folderImg + "/" + ID + ".jpg")

    $(".watch p span").each((i, elem) => {
        if ($(elem).attr("data-tag") == "price" && watchesArrItem.find($(elem).attr("data-tag")).text() != "ناموجود") {
            $(elem).html(numberWithCommas(watchesArrItem.find($(elem).attr("data-tag")).text()) + "<small> تومان</small>")
        } else $(elem).html(watchesArrItem.find($(elem).attr("data-tag")).text())
    })

    $.each($("table tr td[data-tag]"), function () {
        $(this).text(watchesArrItem.find($(this).attr("data-tag")).text())
    })

    $("#zoomImg").elevateZoom({
        zoomType: "lens",
        lensShape: "round",
        lensSize: 200
    });
    createWatchItem(watchesArrItem.find("brand").text(), ID)
    breadcrumb()
    addToShoppingCart(ID, folderImg)
}

function breadcrumb() {
    $(".custom-breadcrumb .breadcrumb").append("<li class=\"breadcrumb-item\" aria-current=\"page\"><a href='product.php' class='brad-crumb'>" + watchesArrItem.find('brand').text() + "</a></li><li class=\"breadcrumb-item\" aria-current=\"page\"> ساعت مچی " + watchesArrItem.find('for').text() + " " + watchesArrItem.find('brand').text() + " " + " ، کد " + watchesArrItem.find('code').text() + "</li>")
    $("#watch-detail").html("ساعت مچی " + watchesArrItem.find('for').text() + " " + watchesArrItem.find('brand').text() + " " + " ، کد " + watchesArrItem.find('code').text())
    $(".breadcrumb .breadcrumb-item").click(function () {
        setFilter('brand')
    })
}

function setFilter(item) {
    watchesArr.children("" + item + "").each(function () {
        if ($("[data-filter='" + item + "']").text().indexOf($(this).text()) === -1) {
            if (item === 'brand') {
                $("<li class='row justify-content-between py-1'><span> " + $(this).attr("name") + "</span><small>" + $(this).text() + "</small></li>").appendTo("[data-filter='" + item + "']")
            }else if (item === 'nationality') {
                $("<li class='row justify-content-between py-1'>gvrtfvtrf</li>").appendTo("[data-filter='" + item + "']")
            }
            else {
                $("<li class='row justify-content-between py-1'><small style='font-family: ir-sans;'>" + $(this).text() + "</small></li>").appendTo("[data-filter='" + item + "']")
            }
        }
    })
    $("[data-filter='" + item + "'] li").each(function () {
        $(this).click(function () {
            let filterBrand = $(this).children("small").text()
            watchesArr = $(watchesRes).find("watch")
            watchesArr = watchesArr.filter(function (i, elem) {
                return $(elem).find(item).text() == filterBrand
            })
            createWatchItem(1)
            createPagination()
        })
    })

}

function addToShoppingCart(id, folderImg) {
    $(".add-to-shopping-cart").click(function () {
        let flag = false
        $.each(shoppingCartArr, function (i, o) {
            if (o.id == id) return flag = true
        })
        let code = $(this).parent().find("[data-tag='code']").text()
        let price = $(this).parent().find("[data-tag='price']").text()
        let For = $(this).parent().find("[data-tag='for']").text()
        if (!flag) {
            let obj = {
                'code': code,
                'price': price.split(" ")[0].replace(/(\d+),(\d+)(,(\d+))?/g, "$1$2$4"),
                'id': id
            }
            shoppingCartArr.push(obj)
            $.cookie('shoppingList', JSON.stringify(shoppingCartArr), {expires: 1});
            $("#header-cart-shop").html(shoppingCartArr.length)

            Swal.fire({
                text: ' ساعت مچی ' + For + ' با کد ' + code + 'به سبد خرید شما اضافه شد',
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#4cb050',
                confirmButtonText: '<a href="shoppingCart.php?' + folderImg + '" style="color: white">ثبت سفارش و تکمیل خرید</a>',
                cancelButtonText: 'بازگشت و ادامه خرید'
            })
        } else {
            Swal.fire({
                text: ' ساعت مچی ' + For + ' با کد ' + code + ' قبلا به سبد خرید شما اضافه شده است',
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#4cb050',
                confirmButtonText: '<a href="shoppingCart.php?' + folderImg + '" style="color: white">ثبت سفارش و تکمیل خرید</a>',
                cancelButtonText: 'بازگشت و ادامه خرید'
            })
        }
    })
}

function addToShoppingTable() {
    let folder = window.location.href.split("?")[1]
    $.each(shoppingCartArr, function (i, watch) {
        $("table tbody").append("<tr data-id='" + watch.id + "'>")
        $("table tbody tr").last().append("<td><img src= 'image/" + folder + "/" + watch.id + ".jpg' alt=''></td><td>ساعت مچی" + watch.code + "</td><td data-item='price'>" + watch.price + "</td><td><input class='form-control' value='1' type='number' min='1'></td><td data-item='sum'><small>تومان</small></td><td><span class='fa fa-trash text-danger'></span></td>")
        calculateSum()

        function calculateSum() {
            let priceOneItem
            if ($("table tbody tr td[data-item='price']").eq(i).text() == 'ناموجود') priceOneItem = '0'
            else priceOneItem = $("table tbody tr td input").eq(i).val() * $("table tbody tr td[data-item='price']").eq(i).text()
            $("table tbody tr td[ data-item='sum']").eq(i).text(priceOneItem)
        }

        $("table tbody tr td input").change(function () {
            calculateSum()
            calculateResultPrice()
        })

        $("table tbody tr .fa-trash").click(function () {
            let deleteId = $(this).parent().parent().attr("data-id")
            $(this).parent().parent().remove()
            if ($(this).parentsUntil('table').length == 1) {
                shoppingCartArr = []
                $("#header-cart-shop").html('0')
                $.removeCookie('shoppingList')
            } else {
                shoppingCartArr = $.grep(shoppingCartArr, function (elem) {
                    return elem.id != deleteId
                })
                $("#header-cart-shop").html(shoppingCartArr.length)
                if ($.removeCookie('shoppingList')) $.cookie('shoppingList', JSON.stringify(shoppingCartArr));

                window.location.reload(true)
            }
            calculateResultPrice()
        })

    })
    calculateResultPrice()
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function calculateResultPrice() {
    let result = 0
    $("table tbody tr").each(function () {
        result += Number($(this).find("td:nth-of-type(5)").text())
        return result
    })
    $("#countSumPrice").text(numberWithCommas(result) + "تومان  ")
}

function error404() {
    $("main .container").html("<img alt='error404' src='image/404.jpg' class='img-fluid'/>")
}






