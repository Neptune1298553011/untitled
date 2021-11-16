// 判断:当前元素是否是被筛选元素的子元素或者本身
$.fn.isChildAndSelfOf = function (b) {
    return (this.closest(b).length > 0);
};

//购物车滚动区高度计算
var cartheight = $('body').height();
$('.my_cart .cart-list').css('height', cartheight - 260)

// 返回头部
var back_top = $(".back-top");
back_top.click(function () {
    $("html,body").animate({ scrollTop: 0 }, 300);
})

// if ('scrollRestoration' in history) {
// history.scrollRestoration = 'manual';
// }

// nav和菜单滑出与收起
var nav_menu = $("#head-menu"),
    cart_menu = $("#cart-menu"),
    body = $("body"),
    open_body = $(".nav-sidebar-open"),
    nav_close = $("#nav-close"),
    cart_close = $(".my_cart .top .cart-close");

nav_menu.mouseenter(function () {
    var has_open = body.hasClass("nav-sidebar-open");
    if (!has_open) {
        body.addClass("nav-sidebar-open");
    } else { return }
});

$('.nav-body').mouseleave(function () {
    body.removeClass('nav-sidebar-open');
})

cart_menu.click(function () {
    var isLogin = $(this).attr('data-is-login');
    if (parseInt(isLogin) != 1) {
        // 获取未登录状态购物车
        getNotLoginCart();
        return;
    }

    var has_open = body.hasClass("cart-sidebar-open");
    if (!has_open) {
        body.addClass("cart-sidebar-open");
        var seledCart = autoOpenCart ? autoOpenCart : '';
        $.ajax({
            type: 'post',
            url: '/cart/getCart',
            data: 'seled_cart=' + seledCart,
            dataType: 'json',
            success: function (cartData) {
                if (cartData.code == 1) {
                    if (SHOP_LANGUAGE == 'chs') {
                        Passport.show('loginByPhone');
                    } else {
                        Passport.show('loginByMail');
                    }

                    return;
                }
                var html = cartData.data;
                $("#cart_list_div").html(html);

                // 计算总价
                var totalPrice = sumCartPrice();
                var totalPriceHtml = currencyFormat(totalPrice);
                $("#cart_price_total").html(totalPriceHtml);

                if (cartData.all_err_msg != '') {
                    $("#cart_all_err_div").html(cartData.all_err_msg);
                }

                $('.item_title_top').find('.cart-link').each(function () {
                    if ($(this).height() > 90) {
                        $(this).addClass('shopcar-more')
                    }
                });
            }
        });
    }
});

nav_close.click(function () {
    body.removeClass("nav-sidebar-open");
});
cart_close.click(function () {
    body.removeClass("cart-sidebar-open");
});


$(document).on('click', function (event) {
    var has_open_nav = body.hasClass("nav-sidebar-open"),
        has_open_cart = body.hasClass("cart-sidebar-open");
    if (has_open_nav) {
        if (!$(event.target).isChildAndSelfOf(".nav-body") && !$(event.target).isChildAndSelfOf("#head-menu")) {
            body.removeClass("nav-sidebar-open");
        };
    };
    if (has_open_cart) {
        if (!$(event.target).isChildAndSelfOf(".my_cart") && !$(event.target).isChildAndSelfOf("#cart-menu")) {
            body.removeClass("cart-sidebar-open");
        };
    }
}).on('click', '.cart_lower', function () {
    var obj = $(this).parent().find('.cart_buy_num');
    var isDown = obj.attr('data-is-down');
    if (isDown == 1) {
        return;
    }
    var cartId = obj.attr('data-cart-id');
    var buyNum = obj.attr('data-buy-num');
    var newNum = 1;
    if (buyNum <= 1) {
        newNum = 1;
    } else {
        newNum = parseInt(buyNum) - 1;
    }

    var qtyText = $("#cart_list_div").data('qty-text');

    obj.attr("data-buy-num", newNum);
    obj.html(qtyText + " " + newNum);
    if (parseInt(cartId) > 0) {
        editCart(cartId, newNum, function (data) { });
    } else {
        // 编辑本地购物车
        var gsdId = obj.attr('data-gsd-id');
        editCartToCookie(gsdId, newNum);
        setTimeout(function () {
            var limitNum = obj.attr('data-limit-num');
            var stockNum = obj.attr('data-stock-num');

            limitNum = parseInt(limitNum);
            stockNum = parseInt(stockNum);

            if (limitNum > 0) {
                var tmp = $(obj).parents(".item").find(".item_error");

                if (limitNum <= stockNum) {
                    if (newNum > limitNum) {
                        var tip = cartNumLimitTip.replace('%d', limitNum);
                        tmp.html('<p>' + tip + '</p>');

                        obj.attr("data-buy-num", limitNum);
                        obj.html(qtyText + " " + limitNum);
                        tmp.show();
                    } else {
                        tmp.hide();
                    }
                } else {
                    if (newNum > stockNum) {
                        var tip = $("#cart_list_div").data('stocknum-tip');
                        obj.attr("data-buy-num", stockNum);
                        obj.html(qtyText + " " + stockNum);

                        tmp.html('<p>' + tip + '</p>');
                        tmp.show();
                    } else {
                        tmp.hide();
                    }
                }
            } else {
                var tmp = $(obj).parents(".item").find(".item_error");
                if (newNum > stockNum) {
                    var tip = $("#cart_list_div").data('stocknum-tip');
                    obj.attr("data-buy-num", stockNum);
                    obj.html(qtyText + " " + stockNum);

                    tmp.html('<p>' + tip + '</p>');
                    tmp.show();
                } else {
                    tmp.hide();
                }
            }

            var totalPrice = sumCartPrice();
            var totalPriceHtml = currencyFormat(totalPrice);
            $("#cart_price_total").html(totalPriceHtml);
        }, 20);
    }
}).on('click', '.cart_upper', function () {
    var obj = $(this).parent().find('.cart_buy_num');
    var isDown = obj.attr('data-is-down');
    if (isDown == 1) {
        return;
    }

    var qtyText = $("#cart_list_div").data('qty-text');

    var cartId = obj.attr('data-cart-id');
    var buyNum = obj.attr('data-buy-num');
    var newNum = parseInt(buyNum) + 1;
    obj.attr("data-buy-num", newNum);
    obj.html(qtyText + " " + newNum);
    if (parseInt(cartId) > 0) {
        editCart(cartId, newNum, function (data) {

        });
    } else {
        // 编辑本地购物车
        var gsdId = obj.attr('data-gsd-id');
        editCartToCookie(gsdId, newNum);
        setTimeout(function () {
            var limitNum = obj.attr('data-limit-num');
            var stockNum = obj.attr('data-stock-num');

            limitNum = parseInt(limitNum);
            stockNum = parseInt(stockNum);

            if (limitNum > 0) {
                var tmp = $(obj).parents(".item").find(".item_error");

                if (limitNum <= stockNum) {
                    if (newNum > limitNum) {
                        var tip = cartNumLimitTip.replace('%d', limitNum);
                        tmp.html('<p>' + tip + '</p>');

                        obj.attr("data-buy-num", limitNum);
                        obj.html(qtyText + " " + limitNum);
                        tmp.show();
                    } else {
                        tmp.hide();
                    }
                } else {
                    if (newNum > stockNum) {
                        var tip = $("#cart_list_div").data('stocknum-tip');
                        obj.attr("data-buy-num", stockNum);
                        obj.html(qtyText + " " + stockNum);

                        tmp.html('<p>' + tip + '</p>');
                        tmp.show();
                    } else {
                        tmp.hide();
                    }
                }
            } else {
                var tmp = $(obj).parents(".item").find(".item_error");
                if (newNum > stockNum) {
                    var tip = $("#cart_list_div").data('stocknum-tip');
                    obj.attr("data-buy-num", stockNum);
                    obj.html(qtyText + " " + stockNum);

                    tmp.html('<p>' + tip + '</p>');
                    tmp.show();
                } else {
                    tmp.hide();
                }
            }

            var totalPrice = sumCartPrice();
            var totalPriceHtml = currencyFormat(totalPrice);
            $("#cart_price_total").html(totalPriceHtml);
        }, 20);
    }
}).on('click', '.checkout_btn', function () {
    var obj = $(this);

    var IeVersion = IEVersion();
    if (IeVersion > 0 && IeVersion < 11) {
        return false;
    }

    checkout(obj);
}).on('click', '.del_cart', function () {
    $(this).parents(".item").addClass("delect");
}).on('click', '.delect-cancel', function () {
    $(this).parents(".item").removeClass("delect");
}).on('click', '.clear_cart_btn', function () {
    var obj = $(this).parents(".cart_all").find('.cart_all_delect_body');
    var dis = obj.get(0).style.display;
    if (dis == 'none') {
        obj.show();
    } else {
        obj.hide();
    }
}).on('click', '.cancel_clear_all_cart', function () {
    $(this).parent(".cart_all_delect_body").hide();
}).on('click', '.clear_cart_confirm', function () {
    var cartIds = dot = '';
    var isLogin = 1;
    $(".define_select").each(function () {
        var tmpId = $(this).parents(".item").find(".cart_buy_num").attr("data-cart-id");
        if (tmpId != undefined) {
            cartIds += dot + tmpId;
            dot = ',';
            var self = this;
            if (tmpId == 0) {
                var gsdId = $(this).parents(".item").find(".cart_buy_num").attr("data-gsd-id");
                isLogin = 0;
                editCartToCookie(gsdId, 0);
                setTimeout(function () {
                    $(".cancel_clear_all_cart").click();
                    $(self).parents('.item').remove();
                    var totalPrice = sumCartPrice();
                    var totalPriceHtml = currencyFormat(totalPrice);
                    $("#cart_price_total").html(totalPriceHtml);
                }, 20);
            } else {
                // 直接移除dom
                setTimeout(function () {
                    $(".cancel_clear_all_cart").click();
                    $(self).parents('.item').remove();
                    var totalPrice = sumCartPrice();
                    var totalPriceHtml = currencyFormat(totalPrice);
                    $("#cart_price_total").html(totalPriceHtml);
                }, 20);
            }
        }
    });

    if (isLogin == 1 && cartIds != '') {
        $.ajax({
            type: 'post',
            url: '/api/cart/clearCart',
            data: 'cart_ids=' + cartIds,
            dataType: 'json',
            success: function (data) {
                $('.cart-close').click();
                $(".head-cart-num").html(data.cart_total);
            }
        });
    }
    if (cartIds == '') {
        alertMsg(pleaseSelectGoods);
    }
}).on('click', '.cart_sel_all_btn', function () {
    if ($(this).hasClass("define_select")) {
        $(this).removeClass("define_select");

        $(".cart_sel_btn").each(function () {
            $(this).removeClass("define_select");
        });
    } else {
        $(this).addClass("define_select");
        $(".cart_sel_btn").each(function () {
            $(this).addClass("define_select");
        });
    }

    setTimeout(function () {
        var totalPrice = sumCartPrice();
        var totalPriceHtml = currencyFormat(totalPrice);
        $("#cart_price_total").html(totalPriceHtml);
    }, 50)
}).on('click', '.cart_sel_btn', function () {
    if ($(this).hasClass("define_select")) {
        $(this).removeClass("define_select");
        $(".cart_sel_all_btn").removeClass("define_select");
    } else {
        $(this).addClass("define_select");
    }

    var totalPrice = sumCartPrice();
    var totalPriceHtml = currencyFormat(totalPrice);
    $("#cart_price_total").html(totalPriceHtml);
}).on('click', '.del_cart_confirm', function () {
    /* if(!confirm('确定删除？')) {
     return false;
     }*/
    var cartId = $(this).attr('data-cart-id');
    var self = this;
    if (parseInt(cartId) == 0) {
        var gsdId = $(this).attr('data-gsd-id');
        // 删除本地购物车
        editCartToCookie(gsdId, 0);
        setTimeout(function () {
            $(self).parents('.item').remove();
            var totalPrice = sumCartPrice();
            var totalPriceHtml = currencyFormat(totalPrice);
            $("#cart_price_total").html(totalPriceHtml);
        }, 20);
        return;
    }

    $.ajax({
        type: 'post',
        url: '/cart/delCart',
        data: 'cart_id=' + cartId,
        dataType: 'json',
        success: function (data) {
            if (data.data == '1') {
                $(self).parents('.item').remove();
                var totalPrice = sumCartPrice();
                var totalPriceHtml = currencyFormat(totalPrice);
                $("#cart_price_total").html(totalPriceHtml);
            }
        }
    });
}).on('click', '.close_confirm_pop_btn', function () {
    closeConfirmPop();
});

// 下拉条方法
$.fn.hoverAddClassOpenson = function (b) {
    $(this).each(function () {
        $(this).mouseover(function () {
            $(this).addClass(b);
            $(this).click(function () {
                $(this).removeClass(b);
            })
        });
        $(this).mouseout(function () {
            $(this).removeClass(b);
        });
    })
};

// 获得当前语言环境下，货币的显示格式
function currencyFormat(price, currencyFlag, formatString) {
    var lang = SHOP_LANGUAGE;
    if (lang == undefined) {
        lang = getCookie('shop_language');
    }

    var str = '';
    if (currencyFlag == '' || currencyFlag == undefined) {
        currencyFlag = getCurrency();
    }

    if (formatString == undefined) {
        formatString = '';
    }
    switch (currencyFlag) {
        case 'cny':
            if (formatString != '') {
                str += lang == 'chs' ? formatString.replace('%s', price) + '元' : 'CNY' + formatString.replace('%s', price);
            } else {
                str += lang == 'chs' ? price + '元' : 'CNY' + price;
            }
            break;
        case 'usd':
        default:
            if (formatString != '') {
                str += 'US$' + formatString.replace('%s', price);
            } else {
                str += 'US$' + price;
            }
            break;
    }

    return str;
}

// 获得当前货币类型
function getCurrency() {
    var lang = SHOP_LANGUAGE;
    if (lang == undefined) {
        lang = getCookie('shop_language');
    }

    var curr = 'usd';

    // var currency_type = getCookie('shop_currency_type');
    var currency_type = 1;

    if (currency_type) {
        switch (currency_type) {
            case '2':
                curr = 'cny';
                break;
            case '1':
            default:
                curr = 'usd'
                break;
        }

    } else {
        switch (lang) {
            case 'chs':
                curr = 'cny';
                break;
            case 'eng':
            default:
                curr = 'usd'
                break;
        }
    }

    return curr;
}

function getNotLoginCart() {
    var cartStr = getCookie('shop_local_cart');
    $.ajax({
        type: 'post',
        url: '/api/cart/getCartNotLoginPc',
        data: 'cart_str=' + cartStr,
        dataType: 'json',
        success: function (cartData) {
            var has_open = body.hasClass("cart-sidebar-open");
            if (!has_open) {
                body.addClass("cart-sidebar-open");
            }
            var html = cartData.data;
            $("#cart_list_div").html(html);

            // 计算总价
            var totalPrice = sumCartPrice();
            var totalPriceHtml = currencyFormat(totalPrice);
            $("#cart_price_total").html(totalPriceHtml);

            if (cartData.all_err_msg != '') {
                $("#cart_all_err_div").html(cartData.all_err_msg);
            }

            $('.item_title_top').find('.cart-link').each(function () {
                if ($(this).height() > 90) {
                    $(this).addClass('shopcar-more')
                }
            });

            var IeVersion = IEVersion();
            if (IeVersion > 0 && IeVersion < 11) {
                $("#cart_all_err_div").html(cartData.text.ie_tip);
                $(".my_cart .checkout_btn .link").attr("style", 'background-color: #eee;color: #bfbfbf;cursor: not-allowed;');
            }
        }
    });
}

function editCart(cartId, num, callback) {
    $.ajax({
        type: 'post',
        'url': '/api/cart/editCart',
        beforeSend: function () {
            $("#cart_error_" + cartId).hide();
        },
        dataType: 'json',
        data: 'cart_id=' + cartId + '&buy_num=' + num,
        success: function (data) {
            var qtyText = $("#cart_list_div").data('qty-text');
            var o = $(".cart_buy_num[data-cart-id='" + cartId + "']");
            // 正常情况
            if (data.code == 0) {
                o.html(qtyText + ' ' + data.data);
                o.attr('data-buy-num', data.data);

                if (data.msg != '') {
                    $("#cart_error_" + cartId).html('<p>' + data.msg + '</p>');
                    $("#cart_error_" + cartId).show();
                }
            } else if (data.code == 1) {
                // 需要重新登录
                if (SHOP_LANGUAGE == 'chs') {
                    Passport.show('loginByPhone');
                } else {
                    Passport.show('loginByMail');
                }
            } else if (data.code == -3) {
                o.html(qtyText + ' ' + data.data);
                o.attr('data-buy-num', data.data);

                // o.attr('data-is-down', 1);
                $("#cart_error_" + cartId).html('<p>' + data.msg + '</p>');
                $("#cart_error_" + cartId).show();
            } else if (data.code == -1) {
                o.html(qtyText + ' ' + data.data);
                o.attr('data-buy-num', data.data);

                $("#cart_error_" + cartId).html('<p>' + data.msg + '</p>');
                $("#cart_error_" + cartId).show();
            }

            // 计算总价
            var totalPrice = sumCartPrice();
            var totalPriceHtml = currencyFormat(totalPrice);
            $("#cart_price_total").html(totalPriceHtml);

            // 用于处理独立的逻辑
            callback(data);
        }
    });
}

function addCartToCookie(gsdId, buyNum) {
    var newCart = addStr = gsdId + '_' + buyNum;
    var oldCartStr = getCookie('shop_local_cart');
    if (oldCartStr) {
        var oldCart = oldCartStr.split('-');
        if (oldCart.length > 0) {
            var C = {};
            for (var i in oldCart) {
                var tmpCart = oldCart[i].split('_');
                if (C[tmpCart[0]] != undefined) {
                    C[tmpCart[0]] += parseInt(tmpCart[1]);
                } else {
                    C[tmpCart[0]] = parseInt(tmpCart[1]);
                }
            }

            if (C[gsdId] != undefined) {
                C[gsdId] += parseInt(buyNum);
            } else {
                C[gsdId] = parseInt(buyNum);
            }

            var sp = '';
            var newStr = '';
            for (var i in C) {
                newStr += sp + i + '_' + C[i];
                sp = '-';
            }

            newCart = newStr;
        }
    }
    setCookie('shop_local_cart', newCart);
}

// 编辑本地购物车
function editCartToCookie(gsdId, buyNum) {
    var newCart = addStr = gsdId + '_' + buyNum;
    var oldCartStr = getCookie('shop_local_cart');
    if (oldCartStr) {
        var oldCart = oldCartStr.split('-');
        if (oldCart.length > 0) {
            var C = {};
            for (var i in oldCart) {
                var tmpCart = oldCart[i].split('_');
                if (C[tmpCart[0]] != undefined) {
                    C[tmpCart[0]] += parseInt(tmpCart[1]);
                } else {
                    C[tmpCart[0]] = parseInt(tmpCart[1]);
                }
            }

            if (parseInt(buyNum) == 0) {
                // 0时为删除购物车
                delete C[gsdId];
            } else {
                // 编辑的话，直接存下当前购买数量即可
                C[gsdId] = parseInt(buyNum);
            }

            var sp = '';
            var newStr = '';
            for (var i in C) {
                newStr += sp + i + '_' + C[i];
                sp = '-';
            }

            newCart = newStr;
        }
    }
    setCookie('shop_local_cart', newCart);
}

// 合并购物车
function mergeCart() {
    var newCart = '';
    var oldCartStr = getCookie('shop_local_cart');
    if (oldCartStr) {
        var oldCart = oldCartStr.split('-');
        if (oldCart.length > 0) {
            // 发起加入购物车的请求，成功后移除本地购物车
            $.ajax({
                type: 'post',
                url: '/api/cart/mergeCart',
                data: 'cart_str=' + oldCartStr,
                dataType: 'json',
                success: function (data) {
                    var dat = data.data;
                    if (data.code == 0 && dat == 'merged') {
                        setCookie('shop_local_cart', newCart);
                        $(".head-cart-num").html(data.cart_num);
                    }
                }
            });
        }
    }
}

function jsUpdateCartNum() {
    var oldCartStr = getCookie('shop_local_cart');
    if (oldCartStr) {
        var oldCart = oldCartStr.split('-');
        if (oldCart.length > 0) {
            $(".head-cart-num").html(oldCart.length);
        }
    }
}

// 计算购物车的总价
function sumCartPrice(closeAutoLoadCart) {
    var total = 0;
    var cartNum = 0;
    $(".cart_buy_num").each(function () {
        var isDown = $(this).attr('data-is-down');
        var isSelected = $(this).parents("li.item").find(".cart_sel_btn").hasClass("define_select");
        if (isDown == 0) {
            var price = $(this).attr('data-price');
            var cartId = $(this).attr('data-cart-id');
            var num = $(this).attr('data-buy-num');
            if (parseInt(cartId) == 0) {
                // 未登录
                var gsdId = $(this).attr('data-gsd-id');
                if (num > 0) {
                    var tmpTotal = floatMul(price, num);
                    var tmpHtml = currencyFormat(formatNumber(tmpTotal, ''));
                    $(".price_total[data-gsd-id='" + gsdId + "']").html(tmpHtml);
                    if (isSelected) {
                        total = floatAdd(total, tmpTotal);
                    }
                }
            } else {
                if (num > 0) {
                    var tmpTotal = floatMul(price, num);
                    var tmpHtml = currencyFormat(formatNumber(tmpTotal, ''));
                    $(".price_total[data-cart-id='" + cartId + "']").html(tmpHtml);
                    if (isSelected) {
                        total = floatAdd(total, tmpTotal);
                    }
                } else {
                    var tmpHtml = currencyFormat(formatNumber(0, ''));
                    $(".price_total[data-cart-id='" + cartId + "']").html(tmpHtml);
                }
            }
        }

        cartNum++;
    });

    total = formatNumber(total);
    countCartDiscountPrice(total, closeAutoLoadCart);

    $(".head-cart-num").html(cartNum);
    return total;
}

// 计算购物车的总价
function countCartDiscountPrice(goodsPriceTotal, closeAutoLoadCart) {
    var total = 0;
    var discount_coupon_title = '';
    var cart_ids = new Array();
    $(".cart_buy_num").each(function () {
        var isDown = $(this).attr('data-is-down');
        var isSelected = $(this).parents("li.item").find(".cart_sel_btn").hasClass("define_select");

        if (isDown == 0) {
            var price = $(this).attr('data-discount-price');
            var cartId = $(this).attr('data-cart-id');
            var num = $(this).attr('data-buy-num');

            if (num > 0) {
                var tmpTotal = floatMul(price, num);
                var tmpHtml = currencyFormat(formatNumber(tmpTotal, ''));
                $(".discount_price_total[data-cart-id='" + cartId + "']").html(tmpHtml);
                if (isSelected) {
                    total = floatAdd(total, tmpTotal);
                    cart_ids.push(cartId);
                }
            } else {
                // var tmpHtml = currencyFormat(formatNumber(0, ''));
                // $(".price_total[data-cart-id='"+cartId+"']").html(tmpHtml);
            }
        }

        discount_coupon_title = $(this).attr('data-coupon-title');
        if (discount_coupon_title == undefined) {
            discount_coupon_title = '';
        }
    });

    totalPrice = formatNumber(total);

    var totalPrice = floatSub(goodsPriceTotal, totalPrice);
    if (totalPrice > 0) {
        var totalPriceHtml = currencyFormat(totalPrice);
        $("#price_discount_div").html(discount_coupon_title + ' ' + totalPriceHtml);
    } else {
        $("#price_discount_div").html('');
    }

    if (!closeAutoLoadCart) {
        checkGetCart(cart_ids);
    }
}

function checkGetCart(cartIds) {
    var data_available_count = $("#discount_base_price").attr('data-available_coupon_count');
    var data_coupon_count = $("#discount_base_price").attr('data-coupon_count');

    if (cartIds.length > 0 && data_coupon_count > 0) {
        $.ajax({
            type: 'post',
            url: '/cart/getCart',
            data: 'seled_cart=' + cartIds.join(","),
            dataType: 'json',
            success: function (cartData) {
                if (cartData.code == 1) {
                    // 需要重新登录
                    if (SHOP_LANGUAGE == 'chs') {
                        Passport.show('loginByPhone');
                    } else {
                        Passport.show('loginByMail');
                    }

                    return;
                }

                var html = cartData.data;
                $("#cart_list_div").html(html);

                // 计算总价
                var totalPrice = sumCartPrice(1);
                var totalPriceHtml = currencyFormat(totalPrice);
                $("#cart_price_total").html(totalPriceHtml);

                if (cartData.all_err_msg != '') {
                    $("#cart_all_err_div").html(cartData.all_err_msg);
                }

                $('.item_title_top').find('.cart-link').each(function () {
                    if ($(this).height() > 90) {
                        $(this).addClass('shopcar-more')
                    }
                });
            }
        });
    }
}

// 结算
function checkout(obj) {
    var str = dot = '';
    var limitBuyNumCount = 0; // 被限制购买的商品数
    $(".cart_buy_num").each(function () {
        var cartId = $(this).attr('data-cart-id');
        var isDown = $(this).attr('data-is-down');
        var buyNum = $(this).attr('data-buy-num');
        if (isDown == 0 && parseInt(buyNum) > 0) {
            var tmpDom = $(this).parents('.item').find('.cart_sel_btn');
            if (tmpDom.hasClass('define_select')) {
                str += dot + cartId;
                dot = ',';
            }
        }

        if (parseInt(buyNum) == 0) {
            limitBuyNumCount++;
        }

        if (cartId == 0) {
            setSelectedGsd();
            setCookie('shop_after_merge_auto_checkout', '1');
        }
    });

    if (str) {
        obj.find(".link").addClass('loading-general');
        setTimeout(function () {

            if (!Passport.isLoggedIn()) {
                $(".cart-close").click();

                if (SHOP_LANGUAGE == 'chs') {
                    Passport.show('loginByPhone');
                } else {
                    Passport.show('loginByMail');
                }

                obj.find(".link").removeClass('loading-general');

                return;
            }

            window.location.href = '/cart/check?ids=' + str;
        }, 300);
    } else {
        if (limitBuyNumCount > 0) {
            alertMsg(cartGoodsMaxLimitTip);
        } else {
            alertMsg(pleaseAddGoods);
        }
    }
}

function setSelectedGsd() {
    var gsd = dot = '';
    $(".cart_sel_btn").each(function () {
        if ($(this).hasClass("define_select")) {
            var tmpGsd = $(this).parents(".item").find(".cart_buy_num").attr("data-gsd-id");
            gsd += dot + tmpGsd;
            dot = '_';
        }
    });
    setCookie('shop_local_seled_gsd', gsd);
}

// ===========float 精度问题处理=============
//加法
function floatAdd(arg1, arg2) {
    var r1, r2, m;
    try { r1 = arg1.toString().split(".")[1].length } catch (e) { r1 = 0 }
    try { r2 = arg2.toString().split(".")[1].length } catch (e) { r2 = 0 }
    m = Math.pow(10, Math.max(r1, r2));
    return (arg1 * m + arg2 * m) / m;
}

//减法
function floatSub(arg1, arg2) {
    var r1, r2, m, n;
    try { r1 = arg1.toString().split(".")[1].length } catch (e) { r1 = 0 }
    try { r2 = arg2.toString().split(".")[1].length } catch (e) { r2 = 0 }
    m = Math.pow(10, Math.max(r1, r2));
    //动态控制精度长度
    n = (r1 >= r2) ? r1 : r2;
    return ((arg1 * m - arg2 * m) / m).toFixed(n);
}

//乘法
function floatMul(arg1, arg2) {
    var s1 = '0.00';
    if (arg1 != undefined) {
        s1 = arg1.toString();
    }

    var m = 0;
    var s2 = arg2.toString();

    try { m += s1.split(".")[1].length } catch (e) { }
    try { m += s2.split(".")[1].length } catch (e) { }
    return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m);
}


//除法
function floatDiv(arg1, arg2) {
    var t1 = 0, t2 = 0, r1, r2;
    try { t1 = arg1.toString().split(".")[1].length } catch (e) { }
    try { t2 = arg2.toString().split(".")[1].length } catch (e) { }
    with (Math) {
        r1 = Number(arg1.toString().replace(".", ""));

        r2 = Number(arg2.toString().replace(".", ""));
        return (r1 / r2) * pow(10, t2 - t1);
    }
}
//========================

function formatNumber(data) {
    return Number(data).toFixed(2);
}

$(document).ready(function () {
    $(".lang_switch").click(function () {
        var lang = $(this).attr('data-language');
        setCookie('shop_language', lang);

        $.ajax({
            type: 'post',
            'url': '/index/changeLang',
            dataType: 'json',
            data: 'lang=' + lang,
            success: function (data) {
                window.location.reload();
            }
        });
    });

    $(".currency_switch").click(function () {
        var type = $(this).attr('data-type');
        window.location.href = "/index/changeCurrency?type=" + type;
    });
});

function setCookie(name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);

    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/";
}

function getCookie(name) {
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(reg))
        return unescape(arr[2]);
    else
        return null;
}

// head语言切换
var head_language = $(".head-select");
head_language.hoverAddClassOpenson("open-son");

// head_search_close.click(function(){
// var that = this;
// setTimeout(function() {
// $(that).parents(".head-search-btn").removeClass("open-son");
// }, 100);
// });

$(".head-search-body input[name=sale_name]").keydown(function (event) {
    if (event.keyCode == 13) { //绑定回车
        var searachValue = $(this).val();
        window.location.href = "/product/index?sale_name=" + searachValue;
    }
});

$(".head-search-search_btn").click(function (event) {
    if ($(".head-search").hasClass("open-son")) {
        var searachValue = $(".head-search-body input[name=sale_name]").val();
        window.location.href = "/product/index?sale_name=" + searachValue;
    }
});

function getLoginUrl() {
    return $("a[data-login-flag='1']").attr('data-login-url');
}

// 付款倒计时
function timer(intDiff, day_id, hour_id, minute_id, sec_id) {
    window.setInterval(function () {
        var day = 0,
            hour = 0,
            minute = 0,
            second = 0;//时间默认值
        if (intDiff > 0) {
            day = Math.floor(intDiff / (60 * 60 * 24));
            hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
            minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
            second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
        } else {
            window.location.href = window.location;
        }
        if (minute <= 9) minute = '0' + minute;
        if (second <= 9) second = '0' + second;
        /*
        $('#' + day_id).html(day+"d");
        $('#' + hour_id).html('<s id="h"></s>'+hour+'h');
        $('#' + minute_id).html('<s></s>'+minute+'m');
        $('#' + sec_id).html('<s></s>'+second+'s');
        */
        $('#' + day_id).html(day);
        $('#' + hour_id).html(hour);
        $('#' + minute_id).html(minute);
        $('#' + sec_id).html(second);
        intDiff--;
    }, 1000);
}

/**
 * 通用弹窗
 *
 * @param string msg 信息
 * @param int type 非必须，默认0为错误弹窗，正常弹窗请传1
 */
function alertMsg(msg, type) {
    type = !type ? 0 : 1;
    var cla = 'error';

    var title = $('.js_lang_package').data('fail-title');

    if (type == 1) {
        cla = 'right';
        title = $('.js_lang_package').data('success-title');
    }

    var str = '<div class="alert" id="alert_msg_div"> <div class="alert_content">\
            <div class="alert_head '+ cla + '">\
            <div class="alert_icon"> </div> </div>\
            <div class="alert_body"> <div class="dt">'+ title + '</div> <div class="dd">' + msg + '</div> </div> <a class="alert_close" onclick="closeAlertMsg();"></a> </div> </div>';

    $("#alert_msg_div").remove();
    $(str).appendTo('body');
}

function closeAlertMsg() {
    $("#alert_msg_div").remove();
}

// nav子菜单展开
var menu_item = $(".nav-body .menu-list .more");
menu_item.each(function () {
    $(this).children(".link").click(function () {
        var menu_item_hasClass = $(this).parents(".more").hasClass("open-son");
        if (menu_item_hasClass) {
            menu_item.removeClass("open-son");
        } else {
            menu_item.removeClass("open-son");
            $(this).parents(".menu-item").addClass("open-son");
        }
    });
});
// 三级
var menu_item3 = $(".menu-item-third");
menu_item3.each(function () {
    $(this).children(".link-link").click(function () {
        var menu_item_hasClass3 = $(this).parents(".more-third").hasClass("open-third");
        if (menu_item_hasClass3) {
            menu_item3.removeClass("open-third");
        } else {
            menu_item3.removeClass("open-third");
            $(this).parents(".menu-item-third").addClass("open-third");
        }
    });
});


//input获取焦点
$("input").focus(function () {
    $(this).addClass("is_focus")
})
$("input").blur(function () {
    $(this).removeClass("is_focus")
})

// logout出现
var head_user = $(".head-user");
head_user.hoverAddClassOpenson("open-son");

// currency select
var currencyItem = $(".submitLogistics_body .subimt_body .inbody .item"), currency;
currencyItem.each(function () {
    currency = $(this).find(".currency");
    currency.hoverAddClassOpenson("open-son");
});

// 使用方式：confirmPop({'title': '标题', 'question': 'question?', 'cancelBtn': '按钮文字', 'confirmBtn': '按钮文字'}, function(param){console.log(param)}, {'param111': 111});
function confirmPop(options, callback, params) {
    var html = '<div class="alert" id="confirm_pop_div">\
            <div class="alert_content areyousure" style="">\
                <div class="alert_head">\
                    <h3>'+ options.title + '</h3>\
                </div>\
                <div class="alert_body">\
                    <p>'+ options.question + '</p>\
                    <div class="alert_btns">\
                        <a href="javascript:void(0);" class="link define click_confirm_pop_btn">'+ options.confirmBtn + '</a>\
                        <a href="javascript:void(0);" class="link cancel close_confirm_pop_btn">'+ options.cancelBtn + '</a>\
                    </div>\
                </div>\
            </div>\
        </div>';
    $("#confirm_pop_div").remove();
    $(html).appendTo('body');

    $('.click_confirm_pop_btn').unbind('click').click(function () {
        if (typeof (callback) == 'function') {
            callback(params);
            closeConfirmPop();
        }
    });
}

function closeConfirmPop() {
    $("#confirm_pop_div").remove();
}

$(document).ready(function () {

    //判断文本框是否有焦点
    var textarea = $(".sunmary_body .message .input");
    textarea.focus(function () {
        $(this).addClass("isFocuse");
    })
    textarea.blur(function () {
        $(this).removeClass("isFocuse");
    })

    // 历史订单
    var item = $(".home_content .home_order_history .order_table .order_table_tr")
    item.each(function () {
        var $this = $(this), img;
        img = $this.find(".table_img_list").find(".img_link");
        if (img.length === 1) {
            $this.find(".table_img_list").find(".img_link").addClass("only");
        } else { return }
    });

    // 首页二维码
    $('.show-qr').mouseenter(function () {
        $(this).find('.QR').css('display', 'inline-block')
    })

    $('.show-qr').mouseleave(function () {
        $(this).find('.QR').css('display', 'none')
    })


    $('.sellout').prev('img').css({
        opacity: '.5'
    });
    
    
    $("body").on("click", ".head-tips-close", function() {
        $(this).parent('.common-head-tips').hide();
    });
});

var IeVersion = IEVersion();
if (IeVersion > 0 && IeVersion < 11) {
    $(".ie-browser-tip").show();
    $(".low-ie-version-hide").hide();
}

function IEVersion() {
    var userAgent = navigator.userAgent;  
    var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1; //判断是否IE<11浏览器  
    var isEdge = userAgent.indexOf("Edge") > -1 && !isIE; //判断是否IE的Edge浏览器  
    var isIE11 = userAgent.indexOf('Trident') > -1 && userAgent.indexOf("rv:11.0") > -1;
    if(isIE) {
        var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
        reIE.test(userAgent);
        var fIEVersion = parseFloat(RegExp["$1"]);
        if(fIEVersion == 7) {
            return 7;
        } else if(fIEVersion == 8) {
            return 8;
        } else if(fIEVersion == 9) {
            return 9;
        } else if(fIEVersion == 10) {
            return 10;
        } else {
            return 6;//IE版本<=7
        }   
    } else if(isEdge) {
        return -1;
        return 'edge';//edge
    } else if(isIE11) {
        return 11; //IE11  
    }else{
        return -1;//不是ie浏览器
    }
}

    
Passport.on('ready', function () {
    var lang = 'zh-cn';
    if (SHOP_LANGUAGE == 'chs_tw') {
        lang = 'zh-tw';
    } else if (SHOP_LANGUAGE == 'eng') {
        lang = 'en';
    }

    Passport.setLanguage(lang);

    Passport.on('hideInfo', function () {
        window.location.reload()
    })

    // eslint-disable-next-line no-undef
    Passport.on('switchIggId', function () {
        window.location.reload()
    })

    // eslint-disable-next-line no-undef
    Passport.on('logoutSuccess', function () {
        window.location.reload()
    })
});

// 绑定注册按钮
$("body").on('click', '.register-btn', function () {
    Passport.show('reg')
});

// 绑定登录按钮
$("body").on("click", '.login-btn', function () {
    if (SHOP_LANGUAGE == 'chs') {
        Passport.show('loginByPhone');
    } else {
        Passport.show('loginByMail');
    }
});

// 绑定退出按钮
$("body").on('click', '.logout-btn', function () {
    Passport.logout(function () {
        location.reload()
    })
});