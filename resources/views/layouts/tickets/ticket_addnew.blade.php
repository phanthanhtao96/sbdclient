@extends('layouts.index')

@section('title')
    Hổ trợ Ticket | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-change-password wrap-new-ticket">
        <h1 class="title fz-32 fw-700 cl-333 m-bottom-30">Form tạo ticket</h1>
        <div class="row align-center">
            <div class="col-md-7">
                <form class="form-new-ticket cl-666" id="new-ticket_form" action="" method="post">
                    <div class="item-field">
                        <label for="name"><span class="text">Họ và tên</span></label>
                        <input type="text" name="name" id="name" placeholder="Nhập họ và tên">
                    </div>
                    <div class="item-field">
                        <label for="email"><span class="text">Email</span></label>
                        <input type="text" name="email" id="email" placeholder="Nhập email của bạn">
                    </div>
                    <div class="item-field">
                        <label for="phone"><span class="text">Số điện thoại</span></label>
                        <input type="tel" name="phone" id="phone" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="item-field">
                        <label for="message"><span class="text">Thông tin cần hỗ trợ</span></label>
                        <textarea name="message" id="message" rows="3" placeholder="Nhập thông tin cần hỗ trợ"></textarea>
                    </div>
                    <div class="item-field item-field-submit m-top-30">
                        <input class="btn-submit" type="submit" value="Gửi ticket">
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="img m-top-15">
                    <img src="{{ asset('sbdportal/images/new_ticket/ticket-form.png') }}" alt="Tạo ticket">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection