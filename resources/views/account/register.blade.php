<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBD Portal</title>
    <meta property="og:title" content="SBD Portal">
    <meta property="og:site_name" content="SBDPortal">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <link rel="icon" type="image/png" href="images/logo-color.svg">
    <link rel="stylesheet" href="sbdportal/fonts/GoogleSans/stylesheet.css">
    <link rel="stylesheet" href="sbdportal/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="sbdportal/fonts/Linearicons/style.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/bootstrap_customized.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/global.css">
    <link rel="stylesheet" href="sbdportal/frontend/login/login.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/responsive.css">
</head>
<body class="login-page">
    <style>
        @keyframes fadeout {
            0% { opacity: 1; }
            50% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; }
        }
        @-webkit-keyframes fadeout {
            0% { opacity: 1; }
            50% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; }
        }
        @-moz-keyframes fadeout {
            0% { opacity: 1; }
            50% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
    <div id="hide_me" style="opacity: 0;background-color: #fff; position: absolute; width: 100%; height: 100%;z-index: 9999; pointer-events: none;top: 0;left: 0;-webkit-animation: fadeout .5s ease-in alternate; -moz-animation: fadeout .5s ease-in alternate; animation:fadeout .5s ease-in alternate;"></div>
    <header class="header-login">
        <nav class="nav-login">
            <div class="back desktop">
                <a href="dashboard.html"><span class="lnr lnr-arrow-left"></span>Trở về</a>
            </div>
        </nav>
    </header>

    <div class="page-content">
        <div class="login register display-flex">
            <div class="left text-center">
                <div class="inner">
                    <img class="img" src="images/login/img-login.png" alt="login">
                    <div class="group_content">
                        <p class="title fz-40 fw-500 m-bottom-30">Chào mừng đến với <span style="color: #007db6;">Sao Bắc Đẩu Telecom!</span></p>
                        <div class="content cl-666">
                            <p>Chúng tôi tiên phong trong đáp ứng đa dạng dịch vụ và công nghệ điện toán đám mây với mong <br>muốn đem lại giải pháp toàn diện và hiệu quả nhất tới khách hàng.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="inner cl-white">
                    <img class="img m-bottom-50" src="images/logo.png" alt="logo SBD Portal">
                    <div class="group_content">
                        <p class="title fz-40 fw-700 m-bottom-10">Đăng ký</p>
                        <div class="content">
                            <p>Địa chỉ email chính là tên đăng nhập vào tài khoản khách hàng, đồng thời cũng chính là địa chỉ email để nhận các thông tin từ Sao Bắc Đẩu Telecom.</p>
                        </div>
                    </div>
                    <div class="wrap-form m-top-40">
                        <form class="form-register" id="register_form" action="" method="post">
                            <div class="display-flex">
                                <div class="item-field col-12 first last">
                                    <label for="email"><span class="text">Email</span></label>
                                    <input type="text" name="email" id="email" placeholder="Nhập email của bạn">
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="password"><span class="text">Mật khẩu</span></label>
                                    <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="confirm_password"><span class="text">Nhập lại mật khẩu</span></label>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu">
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="name"><span class="text">Họ và tên</span></label>
                                    <input type="text" name="name" id="name" placeholder="Nhập họ và tên">
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="phone"><span class="text">Số điện thoại</span></label>
                                    <input type="tel" name="phone" id="phone" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="country"><span class="text">Quốc gia</span></label>
                                    <input type="text" name="country" id="country" placeholder="Nhập quốc gia">
                                    <!-- <select class="select2_js" name="country" id="country">
                                        <option value="">Chọn quốc gia</option>
                                    </select> -->
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="district"><span class="text">Tỉnh/Thành phố</span></label>
                                    <input type="text" name="district" id="district" placeholder="Nhập quốc gia">
                                    <!-- <select class="select2_js" name="district" id="district">
                                        <option value="">Chọn Tỉnh/Thành phố</option>
                                    </select> -->
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="province"><span class="text">Quận/Huyện</span></label>
                                    <input type="text" name="province" id="province" placeholder="Nhập quốc gia">
                                    <!-- <select class="select2_js" name="province" id="province">
                                        <option value="">Chọn Quận/Huyện</option>
                                    </select> -->
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="postcode"><span class="text">Mã bưu chính</span></label>
                                    <input type="text" name="postcode" id="postcode" placeholder="Nhập mã bưu chính">
                                </div>
                                <div class="item-field col-md-6 first text-left acceptance">
                                    <label class="label-checkbox" for="agree">
                                        <span class="text">Tôi đồng ý với Điều khoản dịch vụ và Chính sách bảo mật</span>
                                        <input class="" type="checkbox" name="agree" id="agree">
                                        <span class="check-status"></span>
                                    </label>
                                </div>
                                <div class="item-field col-6 last item-field-submit">
                                    <input class="btn-submit" type="submit" value="ĐĂNG ký">
                                </div>
                                <div class="col-12 m-top-10 first last">
                                    <p class="login-link text-center">Bạn đã có tài khoản? <a class="cl-white" href="login.html">Đăng nhập</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="back-mobile mobile text-center m-top-20">
                        <a class="cl-white fw-700 fz-18" href="dashboard.html">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="footer-login">
    </footer> -->
    <script type="text/javascript" src="sbdportal/frontend/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="sbdportal/frontend/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="sbdportal/frontend/login/login.js"></script>
</body>
</html>