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
    <link rel="icon" type="image/png" href="{{ asset('sbdportal/images/logo-color.svg') }}">
    <link rel="stylesheet" href="sbdportal/fonts/GoogleSans/stylesheet.css">
    <link rel="stylesheet" href="sbdportal/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="sbdportal/fonts/Linearicons/style.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/bootstrap_customized.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/select2.min.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/animate.css">
    <link rel="stylesheet" href="sbdportal/frontend/js/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="sbdportal/frontend/js/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/index.css">
    <link rel="stylesheet" href="sbdportal/frontend/user/user.css">
    <link rel="stylesheet" href="sbdportal/frontend/login/login.css">
    <link rel="stylesheet" href="sbdportal/frontend/css/responsive.css">
</head>
<body class="user-page" id="dashboard">
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
    <header class="header-admin">
        <div class="inner d-flex align-center">
            <div class="logo">
                <img src="{{ asset('sbdportal/images/logo-color.svg') }}" alt="SBD Portal">
            </div>
            <nav class="nav-dashboard">
                <ul class="list-unstyled d-flex align-center">
                    <li><a href="dashboard.html" title="Dashboard"><img src="{{ asset('sbdportal/images/header/Home.svg') }}" alt="Dashboard"></a></li>
                    <li><a href="#" title="Dashboard"><img src="{{ asset('sbdportal/images/header/Buy.svg') }}" alt="Dashboard"></a></li>
                    <li><a href="#" title="Dashboard"><img src="{{ asset('sbdportal/images/header/Unlocked.svg') }}" alt="Dashboard"></a></li>
                </ul>
            </nav>
            <nav class="nav-user">
                <ul class="list-unstyled d-flex align-center">
                    <li><a class="noti" href="dashboard.html" title="Notification"><img src="{{ asset('sbdportal/images/header/Notification.svg') }}" alt="Notification"><span class="alert"></span></a></li>
                    <li><a class="chat" href="#" title="Chat"><img src="{{ asset('sbdportal/images/header/Chat_1.svg') }}" alt="Chat"><span class="alert"></span></a></li>
                    <li class="menu-has-chilren">
                        <a class="user-menu" href="javascript:void(0)" title="Profile"><img src="{{ asset('sbdportal/images/header/Profile.svg') }}" alt="Profile"><span class="arrow-down"></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="login.html" title="Đăng nhập">Đăng nhập</a>
                            </li>
                            <li>
                                <a href="register.html" title="Đăng ký">Đăng ký</a>
                            </li>
                            <li>
                                <a href="change-password.html" title="Đổi mật khẩu">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a href="update-user.html" title="Cập nhật tài khoản">Cập nhật tài khoản</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="mobile-menu d-xl-none">
                <button class="menu-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </header>