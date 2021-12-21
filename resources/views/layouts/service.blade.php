@extends('layouts.index')

@section('title')
    Dịch vụ | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-services">
        <div class="head display-flex align-center m-bottom-25">
            <h1 class="fz-26 fw-700 cl-333 m-bottom-0">Dịch vụ</h1>
            <div class="box-search">
                <input type="text" name="search_services" id="search_services" placeholder="Nhập tên dịch vụ bàn cần tìm kiếm">
            </div>
            <div class="link main-2">
                <a class="text-uppercase" href="add-service.html" title="Đăng ký dịch vụ">Đăng ký dịch vụ <img src="{{ asset('sbdportal/images/button/buy-main-2.svg') }}" alt="Đăng ký dịch vụ"></a>
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
                <div class="thead td-2" data-label="Dịch vụ">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/service.svg') }}" alt=""></div>
                        <p class="title">Dịch vụ</p>
                    </div>
                </div>
                <div class="thead td-3" data-label="Trạng thái">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/status.svg') }}" alt=""></div>
                        <p class="title">Trạng thái</p>
                    </div>
                </div>
                <div class="thead td-4" data-label="Ngày đăng ký">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/time.svg') }}" alt=""></div>
                        <p class="title">Ngày đăng ký</p>
                    </div>
                </div>
                <div class="thead td-5" data-label="Ngày hết hạn">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/time.svg') }}" alt=""></div>
                        <p class="title">Ngày hết hạn</p>
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
                    <div class="tbody td-2" data-label="Dịch vụ">
                        <div class="inner">
                            <p class="name">Cấu hình Web Basic -  3 tháng</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Ngày đăng ký">
                        <div class="inner">
                            <p class="text">02/09/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Ngày hết hạn">
                        <div class="inner">
                            <p class="text">02/09/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-2021081014584521 - <span class="order-type cl-666">Đơn offline</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Dịch vụ">
                        <div class="inner">
                            <p class="name">Cloud 08 GB - 01 Năm</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Ngày đăng ký">
                        <div class="inner">
                            <p class="text">27/08/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Ngày hết hạn">
                        <div class="inner">
                            <p class="text">27/08/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-202108101457528 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Dịch vụ">
                        <div class="inner">
                            <p class="name">xFone 1 - 01 Năm</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Ngày đăng ký">
                        <div class="inner">
                            <p class="text">19/08/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Ngày hết hạn">
                        <div class="inner">
                            <p class="text">19/08/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-202108101457251 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Dịch vụ">
                        <div class="inner">
                            <p class="name">Cloud 02 GB - 01 Năm</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Ngày đăng ký">
                        <div class="inner">
                            <p class="text">11/08/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Ngày hết hạn">
                        <div class="inner">
                            <p class="text">11/08/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text">HDO000035-202108101455562 - <span class="order-type cl-666">Đơn online</span></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Dịch vụ">
                        <div class="inner">
                            <p class="name">Nạp tài khoản 2.000.000 VNĐ - Thanh toán Một lần</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Ngày đăng ký">
                        <div class="inner">
                            <p class="text">06/08/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Ngày hết hạn">
                        <div class="inner">
                            <p class="text">06/08/2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection