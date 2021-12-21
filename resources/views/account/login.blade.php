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
        <div class="login display-flex">
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
                        <p class="title fz-40 fw-700 m-bottom-10">Đăng nhập</p>
                        <div class="content">
                            <p>Sử dụng thông tin đăng nhập để truy cập Sao Bắc Đẩu Telecom!</p>
                        </div>
                    </div>
                    <div class="wrap-form m-top-40">
                        <form class="form-login" action="" method="post">
                            <div class="item-field">
                                <label for="username"><span class="text">Tài khoản</span></label>
                                <input type="text" name="username" id="username" placeholder="Nhập tên tài khoản của bạn">
                            </div>
                            <div class="item-field m-bottom-20">
                                <label for="password"><span class="text">Mật khẩu</span></label>
                                <input type="text" name="password" id="password" placeholder="Nhập mật khẩu của bạn">
                            </div>
                            <a class="forgot-password cl-white" href="#">Quên mật khẩu?</a>
                            <div class="item-field m-top-30">
                                <input class="btn-submit" type="submit" value="ĐĂNG NHẬP">
                            </div>
                            <p class="register-link text-center">Bạn chưa có tài khoản? <a class="cl-white" href="register.html">Đăng ký</a></p>
                        </form>
                        <div class="back-mobile mobile text-center m-top-20">
                            <a class="cl-white fw-700 fz-18" href="dashboard.html">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-login">
    </footer>
    <script type="text/javascript" src="sbdportal/frontend/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="sbdportal/frontend/js/scrolly.min.js"></script>
</body>
</html>