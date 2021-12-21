jQuery(document).ready(function () {
    filterServices()
    filterOrders()

    //add service
    slides()
    changeSelect()
    add_tooltip()
    horizontal_scroll_mousewheel()
    add_service_form()
    validateCoupon()
    actionCart()
    mobileMenu()
});

function mobileMenu() {
    jQuery('.menu-toggle').on('click', function () {
        jQuery('.menu-toggle').find('.fa').toggleClass('fa-bars')
        jQuery('.menu-toggle').find('.fa').toggleClass('fa-times')
        jQuery('.menu-left,.menu-mobile-left').toggleClass('show')
    })
    if (jQuery(window).width() < 768) {
        jQuery('.footer-copyright').appendTo(jQuery('.content-right > .inner'))
    }
    jQuery('.nav-user li.menu-has-chilren > a').on('click', function () {
        jQuery(this).toggleClass('active')
    })

    // jQuery("input[type=text], textarea").mouseover(zoomDisable).mousedown(zoomEnable);

    // function zoomDisable() {
    //     jQuery('head meta[name=viewport]').remove();
    //     jQuery('head').prepend('<meta name="viewport" content="user-scalable=0" />');
    // }

    // function zoomEnable() {
    //     jQuery('head meta[name=viewport]').remove();
    //     jQuery('head').prepend('<meta name="viewport" content="user-scalable=1" />');
    // }
}

function actionCart() {
    jQuery(document).delegate('.delete_order', 'click', function () {
        let id = jQuery(this).data('id')
        jQuery('#order_' + id).remove()
        if (jQuery('.wrap-cart').find('.order-detail-item').length < 1) {
            jQuery('.wrap-cart .left').empty()
            jQuery('.wrap-cart .right').empty()
            jQuery('.wrap-cart .left').append('<p class="m-top-30 fz-20 fw-500">Không có sản phẩm nào. Quay lại chọn sản phẩm tại <a class="cl-main" href="add-service.html">đây</a></p>')
        }
    })
}

function uniqId() {
    return Math.round(new Date().getTime() + (Math.random() * 100));
}

function validateCoupon() {
    if (jQuery('#coupon_form').length) {
        jQuery('#coupon_form').validate({
            rules: {
                coupon: {
                    required: true
                },
            },
            messages: {
                coupon: {
                    required: "Vui lòng nhập mã giảm giá",
                },
            },
        })
    }
}

function add_service_form() {
    if (jQuery('#add-service_form').length) {
        jQuery('#add-service_form').validate({
            rules: {
                product_cat: {
                    required: true
                },
                product: {
                    required: true,
                },
                package: {
                    required: true,
                },
                billing_time: {
                    required: true,
                },
                host_name: {
                    required: true,
                },
                operating_system: {
                    required: true,
                },
            },
            messages: {
                product_cat: {
                    required: "Vui lòng chọn nhóm sản phẩm",
                },
                product: {
                    required: "Vui lòng chọn sản phẩm",
                },
                package: {
                    required: "Vui lòng chọn gói",
                },
                billing_time: {
                    required: "Vui lòng chọn chu kỳ thanh toán",
                },
                host_name: {
                    required: "Vui lòng nhập tên (Hostname)",
                },
                operating_system: {
                    required: "Vui lòng chọn Hệ điều hành",
                },
            },
            submitHandler: function (form) {
                var values = {};
                jQuery.each(jQuery(form).serializeArray(), function (i, field) {
                    values[field.name] = field.value;
                });

                jQuery('.wrap-order-services .empty-cart').empty().removeClass('empty-cart')

                let html = '<div class="wrap-service-order" id="order_' + uniqId() + '">'
                html += '<div class="head display-flex align-center">'

                html += '<h4 class="name">' + values['product'] + ' - ' + values['product_cat'] + ' </h4>'

                html += ' <a href="#edit_order" data-id="' + uniqId() + '"><img src="images/add-service/pencil-fill.svg" alt="edit_order"></a>'
                html += '</div>'
                html += '<div class="body">'
                html += '    <div class="item package">'
                html += '       <p class="label">Gói</p>'
                html += '        <p class="text">' + values['package'] + '</p>'
                html += '   </div>'
                html += '   <div class="item billing_time">'
                html += '       <p class="label">Chu kỳ thanh toán</p>'
                html += '       <p class="text">' + values['billing_time'] + '</p>'
                html += '   </div>'
                html += '   <div class="item host_name">'
                html += '      <p class="label">Tên (Hostname)</p>'
                html += '      <p class="text">' + values['host_name'] + '</p>'
                html += '   </div>'
                html += '   <div class="item operating_system">'
                html += '       <p class="label">Hệ điều hành</p>'
                html += '         <p class="text">' + values['operating_system'] + '</p>'
                html += '     </div>'
                if (values['add_ip'].length > 0 || values['add_capacity'].length > 0) {
                    html += '   <div class="item service_added">'
                    html += '       <p class="label">Dịch vụ bổ sung</p>'
                    html += '       <div class="text">'
                    if (values['add_ip'].length > 0) {
                        html += '           <p>' + values['add_ip'] + '</p>'
                    }
                    if (values['add_capacity'].length > 0) {
                        html += '           <p>' + values['add_capacity'] + '</p>'
                    }
                    html += '       </div>'
                    html += '   </div>'
                }
                html += ' </div>'
                html += '      </div>'

                jQuery('.wrap-order-services .inner').append(html)

                let submit_btn = '<button type="submit" class="btn-submit">Thêm vào giỏ hàng</button>'
                jQuery('.wrap-order-services .inner').append(submit_btn)


                return false; // block the default submit action
            }
        })
    }
}

function formatOperatingSystemOption(state) {
    if (!state.id) {
        return state.text;
    }
    var baseUrl = "../images/add-service/operating_system";
    var $state = jQuery(
        '<span><img src="' + baseUrl + '/' + jQuery(state.element).data('icon').toLowerCase() + '.svg" class="img-flag" /> ' + state.text + '</span>'
    );
    return $state;
};

function changeSelect() {
    if (jQuery(".select2_operating_system-js").length) {
        jQuery(".select2_operating_system-js").select2({
            templateResult: formatOperatingSystemOption,
            minimumResultsForSearch: Infinity,
        });
    }
    if (jQuery(".select2-js").length) {
        jQuery(".select2-js").select2({
            minimumResultsForSearch: Infinity,
        });
    }
}

function horizontal_scroll_mousewheel() {
    jQuery.fn.hScroll = function (amount) {
        amount = amount || 120;
        jQuery(this).bind("DOMMouseScroll mousewheel", function (event) {
            var oEvent = event.originalEvent,
                direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
                position = jQuery(this).scrollLeft();
            position += direction > 0 ? -amount : amount;
            jQuery(this).scrollLeft(position);
            event.preventDefault();
        })
    };
    jQuery('.horizontal-scrollbar').hScroll(10);
}

function add_tooltip() {
    jQuery('.product-options .link-tooltip').each(function () {
        let id_content = jQuery(this).data('id')
        jQuery(this).tooltip({
            items: ".link-tooltip",
            content: jQuery(id_content).html()
        })
    })
}

function filterServices() {
    if (jQuery("#search_services").length > 0) {
        jQuery("#search_services").on("keyup", function () {
            var value = jQuery(this).val().toLowerCase();
            jQuery(".wrap-services .table-body .trow").filter(function () {
                jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
}

function filterOrders() {
    if (jQuery("#search_order").length > 0) {
        jQuery("#search_order").on("keyup", function () {
            var value = jQuery(this).val().toLowerCase();
            jQuery(".wrap-order .table-body .trow").filter(function () {
                jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
}

function slides() {
    if (jQuery('.swiper').length) {
        product_cats = new Swiper('.group-products .swiper', {
            // Optional parameters
            loop: false,
            slidesPerView: 6,
            spaceBetween: 10,
            speed: 300,
            pagination: false,
            // Navigation arrows
            navigation: {
                nextEl: '.group-products .swiper-button-next',
                prevEl: '.group-products .swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                },
                // when window width is >= 640px
                1440: {
                    slidesPerView: 4,
                }
            }
        });
        product_list = new Swiper('.list-products .swiper', {
            // Optional parameters
            loop: false,
            slidesPerView: 2,
            spaceBetween: 20,
            speed: 300,
            pagination: false,
            // Navigation arrows
            navigation: {
                nextEl: '.list-products .swiper-button-next',
                prevEl: '.list-products .swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                },
                // when window width is >= 640px
                1440: {
                    slidesPerView: 4,
                }
            }
        });
    }
}