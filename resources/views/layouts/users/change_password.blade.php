@extends('layouts.index')

@section('title')
    Đổi mật khẩu | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-change-password">
        <h1 class="title fz-32 fw-700 cl-333 m-bottom-30">Thay đổi mật khẩu</h1>
        <div class="row align-center">
            <div class="col-md-7">
                <form class="form-change-password cl-666" id="change-password_form" action="" method="post">
                    <div class="item-field">
                        <label for="old_password"><span class="text">Mật khẩu hiện tại</span></label>
                        <input type="password" name="old_password" id="old_password" placeholder="Nhập mật khẩu hiện tại của bạn">
                    </div>
                    <div class="item-field">
                        <label for="new_password"><span class="text">Mật khẩu mới</span></label>
                        <input type="password" name="new_password" id="new_password" placeholder="Nhập mật khẩu mới của bạn">
                    </div>
                    <div class="item-field">
                        <label for="new_confirm_password"><span class="text">Nhập lại mật khẩu</span></label>
                        <input type="password" name="new_confirm_password" id="new_confirm_password" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="item-field m-top-30">
                        <input class="btn-submit" type="submit" value="Lưu thay đổi">
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="img m-top-15">
                    <img src="{{ asset('sbdportal/images/change-password/doi-mk.svg') }}" alt="Thay đổi mật khẩu">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection