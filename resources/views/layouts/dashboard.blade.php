@extends('layouts.index')

@section('title')
    Trang chủ | SBD Client
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-boxs-user-dashboard display-flex just-center text-center">
        <div class="box box-avartar">
            <div class="box-top">
                <div class="avartar m-bottom-20">
                    <img src="{{ asset('sbdportal/images/dashboard/avatat.svg') }}" alt="Minh Quang">
                </div>
                <div class="info">
                    <p class="name lh-1 cl-333 fw-700 fz-26 m-bottom-10">Minh Quang</p>
                    <p class="wrap-status cl-666 fz-14 fw-300"><span class="online status"></span> Hoạt động</p>
                </div>
            </div>
            <div class="box-bottom">
                <p class="text lh-1 cl-666 fw-700 fz-18 m-bottom-20">Số dư tài khoản</p>
                <p class="account-balance lh-1 fz-45 fw-900 cl-main">0 VNĐ</p>
            </div>
        </div>
        <div class="box box-service box-user-item">
            <div class="box-top display-flex just-center align-center">
                <div class="icon">
                    <img src="{{ asset('sbdportal/images/dashboard/dich-vu.svg') }}" alt="Dịch vụ">
                </div>
            </div>
            <div class="box-bottom display-flex just-center align-center">
                <div class="inner">
                    <h4 class="title cl-333 fw-700 fz-22 m-bottom-25">Dịch vụ</h4>
                    <p class="num fz-60 lh-1 fw-900 m-bottom-30 cl-main">5</p>
                    <div class="link"><a href="service.html">Xem chi tiết<span class="arrow-link lnr lnr-arrow-right"></span></a></div>
                </div>
            </div>
        </div>
        <div class="box box-bill box-user-item">
            <div class="box-top display-flex just-center align-center">
                <div class="icon">
                    <img src="{{ asset('sbdportal/images/dashboard/hoa-don.svg') }}" alt="Hóa đơn">
                </div>
            </div>
            <div class="box-bottom display-flex just-center align-center">
                <div class="inner">
                    <h4 class="title cl-333 fw-700 fz-22 m-bottom-25">Hóa đơn</h4>
                    <p class="num fz-60 lh-1 fw-900 m-bottom-30 cl-main">6</p>
                    <div class="link"><a href="bill.html">Xem chi tiết<span class="arrow-link lnr lnr-arrow-right"></span></a></div>
                </div>
            </div>
        </div>
        <div class="box box-support-ticket box-user-item">
            <div class="box-top display-flex just-center align-center">
                <div class="icon">
                    <img src="{{ asset('sbdportal/images/dashboard/ticket.svg') }}" alt="Yêu cầu hỗ trợ">
                </div>
            </div>
            <div class="box-bottom display-flex just-center align-center">
                <div class="inner">
                    <h4 class="title cl-333 fw-700 fz-22 m-bottom-25">Yêu cầu hỗ trợ</h4>
                    <p class="num fz-60 lh-1 fw-900 m-bottom-30 cl-main">5</p>
                    <div class="link"><a href="support-ticket.html">Xem chi tiết<span class="arrow-link lnr lnr-arrow-right"></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-links display-flex just-center">
        <div class="link link-new-ticket">
            <a class="" href="create-new-ticket.html" title="Tạo ticket hỗ trợ">Tạo ticket hỗ trợ <img class="arrow-link" src="images/button/airplane.svg" alt=""></a>
        </div>
        <div class="link link-new-ticket">
            <a href="add-service.html" title="Đăng ký dịch vụ">Đăng ký dịch vụ <img class="arrow-link" src="images/button/buy.svg" alt=""></a>
        </div>
    </div>
</div>             
@endsection