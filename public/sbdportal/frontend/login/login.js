jQuery(document).ready(function () {
    validateRegister()
    validateChangePassword()
    validateUpdateUser()
    validateNewTicket()

    changeSelect()
    mobileMenu()
    // formLocation()
});

function mobileMenu(){
    jQuery('.menu-toggle').on('click',function(){
        jQuery('.menu-toggle').find('.fa').toggleClass('fa-bars')
        jQuery('.menu-toggle').find('.fa').toggleClass('fa-times')
        jQuery('.menu-left,.menu-mobile-left').toggleClass('show')
    })
    if(jQuery(window).width() < 768){
        jQuery('.footer-copyright').appendTo(jQuery('.content-right > .inner'))
    }
    jQuery('.nav-user li.menu-has-chilren > a').on('click',function(){
        jQuery(this).toggleClass('active')
    })
}

function changeSelect(){
    if(jQuery('.select2_js').length > 0){
        jQuery('.select2_js').select2()
    }
}

function validateRegister() {
    jQuery('#register_form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 32,
            },
            confirm_password: {
                required: true,
                minlength: 6,
                maxlength: 32,
                equalTo: "#password",
            },
            name: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 8
            },
            agree: {
                required:  true
            },
            // country: {
            //     required: true,
            // },
            // district: {
            //     required: true,
            // },
            // province: {
            //     required: true,
            // },
        },
        messages: {
            email: {
                required: 'Vui lòng nhập Email',
                email: 'Email chưa đúng định dạng'
            },
            password: {
                required: 'Vui lòng nhập mật khẩu.',
                minlength: 'Mật khẩu có ít nhất 6 ký tự.',
                maxlength: 'Mật khẩu có nhiều nhất 32 ký tự.',
            },
            confirm_password: {
                required: 'Vui lòng xác nhận mật khẩu.',
                equalTo: 'Mật khẩu chưa trùng khớp'
            },
            name: {
                required: "Vui lòng nhập họ và tên",
            },
            phone: {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Số máy quý khách vừa nhập là số không có thực"
            },
            agree: "Bạn chưa đồng ý với các điều khoản của chúng tôi"
        }
    })
}

function validateChangePassword() {
    jQuery('#change-password_form').validate({
        rules: {
            old_password: {
                required: true,
            },
            new_password: {
                required: true,
                minlength: 6,
                maxlength: 32,
            },
            new_confirm_password: {
                required: true,
                minlength: 6,
                maxlength: 32,
                equalTo: "#password",
            },
        },
        messages: {
            old_password: {
                required: 'Vui lòng nhập mật khẩu hiện tại của bạn',
            },
            new_password: {
                required: 'Vui lòng nhập mật khẩu mới',
                minlength: 'Mật khẩu có ít nhất 6 ký tự.',
                maxlength: 'Mật khẩu có nhiều nhất 32 ký tự.',
            },
            new_confirm_password: {
                required: 'Vui lòng xác nhận mật khẩu mới',
                equalTo: 'Mật khẩu mới chưa trùng khớp',
                minlength: 'Mật khẩu có ít nhất 6 ký tự.',
                maxlength: 'Mật khẩu có nhiều nhất 32 ký tự.',
            },
        }
    })
}

function validateUpdateUser() {
    jQuery('#update-user_form').validate({
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 8
            },
            country: {
                required: true,
            },
            district: {
                required: true,
            },
            province: {
                required: true,
            },
            address: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Vui lòng nhập họ và tên",
            },
            phone: {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Số máy quý khách vừa nhập là số không có thực"
            },
            country: {
                required: "Vui lòng nhập quốc gia",
            },
            district: {
                required: "Vui lòng nhập tỉnh/thành phố",
            },
            province: {
                required: "Vui lòng nhập quận/huyện",
            },
            address: {
                required: "Vui lòng nhập Địa chỉ",
            },
        }
    })
}

function validateNewTicket() {
    jQuery('#new-ticket_form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 8
            },
            message: {
                required: true,
            },
        },
        messages: {
            email: {
                required: 'Vui lòng nhập Email',
                email: 'Email chưa đúng định dạng'
            },
            name: {
                required: "Vui lòng nhập họ và tên",
            },
            phone: {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Số máy quý khách vừa nhập là số không có thực"
            },
            message: {
                required: "Vui lòng nhập Địa chỉ",
            },
        }
    })
}

function formLocation() {
    if (address_2 = localStorage.getItem('address_2_saved')) {
        jQuery('select[name="district"] option').each(function () {
            if (jQuery(this).text() == address_2) {
                jQuery(this).attr('selected', '')
            }
        })
        jQuery('input.billing_address_2').attr('value', address_2)
    }
    if (district = localStorage.getItem('district')) {
        jQuery('select[name="district"]').html(district)
        jQuery('select[name="district"]').on('change', function () {
            var target = jQuery(this).children('option:selected')
            target.attr('selected', '')
            jQuery('select[name="district"] option').not(target).removeAttr('selected')
            address_2 = target.text()
            jQuery('input.billing_address_2').attr('value', address_2)
            district = jQuery('select[name="district"]').html()
            localStorage.setItem('district', district)
            localStorage.setItem('address_2_saved', address_2)
        })
    }
    jQuery('select[name="province"]').each(function () {
        var _this = jQuery(this),
            stc = ''
        c.forEach(function (i, e) {
            e += +1
            stc += '<option value=' + e + '>' + i + '</option>'
            _this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
            if (address_1 = localStorage.getItem('address_1_saved')) {
                jQuery('select[name="province"] option').each(function () {
                    if (jQuery(this).text() == address_1) {
                        jQuery(this).attr('selected', '')
                    }
                })
                jQuery('input.billing_address_1').attr('value', address_1)
            }
            _this.on('change', function (i) {
                i = _this.children('option:selected').index() - 1
                var str = '',
                    r = _this.val()
                if (r != '') {
                    arr[i].forEach(function (el) {
                        str += '<option value="' + el + '">' + el + '</option>'
                        jQuery('select[name="district"]').html('<option value="">Quận / Huyện</option>' + str)
                    })
                    var address_1 = _this.children('option:selected').text()
                    var district = jQuery('select[name="district"]').html()
                    localStorage.setItem('address_1_saved', address_1)
                    localStorage.setItem('district', district)
                    jQuery('select[name="district"]').on('change', function () {
                        var target = jQuery(this).children('option:selected')
                        target.attr('selected', '')
                        jQuery('select[name="district"] option').not(target).removeAttr('selected')
                        var address_2 = target.text()
                        jQuery('input.billing_address_2').attr('value', address_2)
                        district = jQuery('select[name="district"]').html()
                        localStorage.setItem('district', district)
                        localStorage.setItem('address_2_saved', address_2)
                    })
                } else {
                    jQuery('select[name="district"]').html('<option value="">Quận / Huyện</option>')
                    district = jQuery('select[name="district"]').html()
                    localStorage.setItem('district', district)
                    localStorage.removeItem('address_1_saved', address_1)
                }
            })
        })
    })
}