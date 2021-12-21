@extends('layouts.index')

@section('title')
    Hoá đơn | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-services wrap-bills">
        <div class="head display-flex align-center m-bottom-25">
            <h1 class="fz-26 fw-700 cl-333 m-bottom-0">Hóa đơn</h1>
            <div class="box-search">
                <input type="text" name="search_services" id="search_services" placeholder="Nhập tên hóa đơn bạn cần tìm kiếm">
            </div>
        </div>
        <div class="body table">
            <div class="table-head fz-18 cl-666 display-flex">
                <div class="thead td-1" data-label="Mã đơn hàng">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/button/buy.svg') }}" alt=""></div>
                        <p class="title">Mã đơn hàng</p>
                    </div>
                </div>
                <div class="thead td-2" data-label="Mã hóa đơn">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/bills/company.svg') }}" alt=""></div>
                        <p class="title">Mã hóa đơn</p>
                    </div>
                </div>
                <div class="thead td-3" data-label="Tên công ty">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/bills/bag.svg') }}" alt=""></div>
                        <p class="title">Tên công ty</p>
                    </div>
                </div>
                <div class="thead td-4" data-label="Số tiền">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/order/dollar.png') }}" alt=""></div>
                        <p class="title">Số tiền</p>
                    </div>
                </div>
            </div>
            <div class="table-body cl-333">
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-2021081014584381 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Mã hóa đơn">
                        <div class="inner">
                            <p class="text">HDO000035-2548</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Tên công ty">
                        <div class="inner">
                            <p class="text">Công ty TNHH Dương Minh Hiếu</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Số tiền">
                        <div class="inner">
                            <p class="text">5.600.000 VNĐ</p>
                        </div>
                    </div>
                    <a href="order-detail.html" class="box_link"></a>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-2021081014584381 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Mã hóa đơn">
                        <div class="inner">
                            <p class="text">HDO000035-2548</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Tên công ty">
                        <div class="inner">
                            <p class="text">Công ty TNHH Dương Minh Hiếu</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Số tiền">
                        <div class="inner">
                            <p class="text">5.600.000 VNĐ</p>
                        </div>
                    </div>
                    <a href="order-detail.html" class="box_link"></a>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-2021081014584381 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Mã hóa đơn">
                        <div class="inner">
                            <p class="text">HDO000035-2548</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Tên công ty">
                        <div class="inner">
                            <p class="text">Công ty TNHH Dương Minh Hiếu</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Số tiền">
                        <div class="inner">
                            <p class="text">5.600.000 VNĐ</p>
                        </div>
                    </div>
                    <a href="order-detail.html" class="box_link"></a>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-2021081014584381 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Mã hóa đơn">
                        <div class="inner">
                            <p class="text">HDO000035-2548</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Tên công ty">
                        <div class="inner">
                            <p class="text">Công ty TNHH Dương Minh Hiếu</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Số tiền">
                        <div class="inner">
                            <p class="text">5.600.000 VNĐ</p>
                        </div>
                    </div>
                    <a href="order-detail.html" class="box_link"></a>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-2021081014584381 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Mã hóa đơn">
                        <div class="inner">
                            <p class="text">HDO000035-2548</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Tên công ty">
                        <div class="inner">
                            <p class="text">Công ty TNHH Dương Minh Hiếu</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Số tiền">
                        <div class="inner">
                            <p class="text">5.600.000 VNĐ</p>
                        </div>
                    </div>
                    <a href="order-detail.html" class="box_link"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection