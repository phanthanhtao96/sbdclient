@extends('layouts.index')

@section('title')
    Cập nhật tài khoản | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <div class="wrap-update-user">
                    <h1 class="title fz-32 fw-700 cl-333 m-bottom-30">Cập nhật tài khoản</h1>
                    <form class="form-update-user cl-666" id="update-user_form" action="" method="post">
                        <div class="wrap-fields">
                            <div class="item-field">
                                <label for="name"><span class="text">Họ và tên</span></label>
                                <input type="text" name="name" id="name" placeholder="Nhập họ và tên" value="Minh Quang">
                            </div>
                            <div class="item-field">
                                <label for="company"><span class="text">Tên công ty</span></label>
                                <input type="text" name="company" id="company" placeholder="Nhập tên công ty" value="Công ty TNHH Dương Minh Hiếu">
                            </div>
                            <div class="item-field">
                                <label for="phone"><span class="text">Số điện thoại</span></label>
                                <input type="tel" name="phone" id="phone" placeholder="Nhập số điện thoại" value="0856585958">
                            </div>
                            <div class="item-field">
                                <label for="country"><span class="text">Quốc gia</span></label>
                                <input type="text" name="country" id="country" placeholder="Nhập quốc gia" value="Việt Nam">
                                <!-- <select class="select2_js" name="country" id="country">
                                    <option value="">Chọn quốc gia</option>
                                </select> -->
                            </div>
                            <div class="item-field">
                                <label for="district"><span class="text">Tỉnh/Thành phố</span></label>
                                <input type="text" name="district" id="district" placeholder="Nhập quốc gia" value="Hồ Chí Minh">
                                <!-- <select class="select2_js" name="district" id="district">
                                    <option value="">Chọn Tỉnh/Thành phố</option>
                                </select> -->
                            </div>
                            <div class="item-field">
                                <label for="province"><span class="text">Quận/Huyện</span></label>
                                <input type="text" name="province" id="province" placeholder="Nhập quốc gia" value="Bình Thạnh">
                                <!-- <select class="select2_js" name="province" id="province">
                                    <option value="">Chọn Quận/Huyện</option>
                                </select> -->
                            </div>
                            <div class="item-field">
                                <label for="postcode"><span class="text">Mã bưu chính</span></label>
                                <input type="text" name="postcode" id="postcode" placeholder="Nhập mã bưu chính" value="7000">
                            </div>
                            <div class="item-field ">
                                <label class="disagree-mail display-flex align-center" for="disagree-mail">
                                    <span class="text">Không gửi mail</span>
                                    <input type="checkbox" name="disagree-mail" id="disagree-mail" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="item-field">
                                <label for="language"><span class="text">Ngôn ngữ</span></label>
                                <select class="select2_js" name="language" id="language">
                                    <option value="vn">Tiếng Việt</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            <div class="item-field">
                                <label for="address"><span class="text">Địa chỉ</span></label>
                                <textarea name="address" id="address" rows="2">28 Phan Bội Châu, Phường 14, Bình Thạnh, Thành phố Hồ Chí Minh</textarea>
                            </div>
                            <div class="item-field item-field-submit">
                                <input class="btn-submit" type="submit" value="Lưu thay đổi">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img text-right">
                    <img src="{{ asset('sbdportal/images/update-user/cap-nhat-tai-khoan.png') }}" alt="Cập nhật tài khoản">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection