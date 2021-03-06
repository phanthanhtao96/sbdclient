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
                <a href="dashboard.html"><span class="lnr lnr-arrow-left"></span>Tr??? v???</a>
            </div>
        </nav>
    </header>

    <div class="page-content">
        <div class="login register display-flex">
            <div class="left text-center">
                <div class="inner">
                    <img class="img" src="images/login/img-login.png" alt="login">
                    <div class="group_content">
                        <p class="title fz-40 fw-500 m-bottom-30">Ch??o m???ng ?????n v???i <span style="color: #007db6;">Sao B???c ?????u Telecom!</span></p>
                        <div class="content cl-666">
                            <p>Ch??ng t??i ti??n phong trong ????p ???ng ??a d???ng d???ch v??? v?? c??ng ngh??? ??i???n to??n ????m m??y v???i mong <br>mu???n ??em l???i gi???i ph??p to??n di???n v?? hi???u qu??? nh???t t???i kh??ch h??ng.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="inner cl-white">
                    <img class="img m-bottom-50" src="images/logo.png" alt="logo SBD Portal">
                    <div class="group_content">
                        <p class="title fz-40 fw-700 m-bottom-10">????ng k??</p>
                        <div class="content">
                            <p>?????a ch??? email ch??nh l?? t??n ????ng nh???p v??o t??i kho???n kh??ch h??ng, ?????ng th???i c??ng ch??nh l?? ?????a ch??? email ????? nh???n c??c th??ng tin t??? Sao B???c ?????u Telecom.</p>
                        </div>
                    </div>
                    <div class="wrap-form m-top-40">
                        <form class="form-register" id="register_form" action="" method="post">
                            <div class="display-flex">
                                <div class="item-field col-12 first last">
                                    <label for="email"><span class="text">Email</span></label>
                                    <input type="text" name="email" id="email" placeholder="Nh???p email c???a b???n">
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="password"><span class="text">M???t kh???u</span></label>
                                    <input type="password" name="password" id="password" placeholder="Nh???p m???t kh???u">
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="confirm_password"><span class="text">Nh???p l???i m???t kh???u</span></label>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Nh???p l???i m???t kh???u">
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="name"><span class="text">H??? v?? t??n</span></label>
                                    <input type="text" name="name" id="name" placeholder="Nh???p h??? v?? t??n">
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="phone"><span class="text">S??? ??i???n tho???i</span></label>
                                    <input type="tel" name="phone" id="phone" placeholder="Nh???p s??? ??i???n tho???i">
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="country"><span class="text">Qu???c gia</span></label>
                                    <input type="text" name="country" id="country" placeholder="Nh???p qu???c gia">
                                    <!-- <select class="select2_js" name="country" id="country">
                                        <option value="">Ch???n qu???c gia</option>
                                    </select> -->
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="district"><span class="text">T???nh/Th??nh ph???</span></label>
                                    <input type="text" name="district" id="district" placeholder="Nh???p qu???c gia">
                                    <!-- <select class="select2_js" name="district" id="district">
                                        <option value="">Ch???n T???nh/Th??nh ph???</option>
                                    </select> -->
                                </div>
                                <div class="item-field col-md-6 first">
                                    <label for="province"><span class="text">Qu???n/Huy???n</span></label>
                                    <input type="text" name="province" id="province" placeholder="Nh???p qu???c gia">
                                    <!-- <select class="select2_js" name="province" id="province">
                                        <option value="">Ch???n Qu???n/Huy???n</option>
                                    </select> -->
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="postcode"><span class="text">M?? b??u ch??nh</span></label>
                                    <input type="text" name="postcode" id="postcode" placeholder="Nh???p m?? b??u ch??nh">
                                </div>
                                <div class="item-field col-md-6 first text-left acceptance">
                                    <label class="label-checkbox" for="agree">
                                        <span class="text">T??i ?????ng ?? v???i ??i???u kho???n d???ch v??? v?? Ch??nh s??ch b???o m???t</span>
                                        <input class="" type="checkbox" name="agree" id="agree">
                                        <span class="check-status"></span>
                                    </label>
                                </div>
                                <div class="item-field col-6 last item-field-submit">
                                    <input class="btn-submit" type="submit" value="????NG k??">
                                </div>
                                <div class="col-12 m-top-10 first last">
                                    <p class="login-link text-center">B???n ???? c?? t??i kho???n? <a class="cl-white" href="login.html">????ng nh???p</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="back-mobile mobile text-center m-top-20">
                        <a class="cl-white fw-700 fz-18" href="dashboard.html">Quay l???i</a>
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