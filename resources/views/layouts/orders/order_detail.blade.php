@extends('layouts.index')

@section('title')
    Chi tiết đơn hàng | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-order-detail">
        <div class="head display-flex align-center m-bottom-40">
            <h1 class="fz-26 fw-700 cl-333 m-bottom-0">HDO000035-2021081014584381 - Đơn hàng online</h1>
            <div class="link">
                <a class="text-uppercase" href="javascript:void(0)" title="Đăng ký dịch vụ">Đã thanh toán</a>
            </div>
        </div>
        <div class="body display-flex">
            <div class="left">
                <div class="table">
                    <div class="table-head fz-18 cl-666 display-flex">
                        <div class="thead td-1" data-label="Dịch vụ">
                            <div class="inner d-flex align-center">
                                <div class="icon"><img src="{{ asset('sbdportal/images/button/buy.svg') }}" alt=""></div>
                                <p class="title">Dịch vụ</p>
                            </div>
                        </div>
                        <div class="thead td-2" data-label="Đơn giá">
                            <div class="inner d-flex align-center">
                                <div class="icon"><img src="{{ asset('sbdportal/images/order/dollar.png') }}" alt=""></div>
                                <p class="title">Đơn giá</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-body cl-333">
                        <div class="item-order trow display-flex align-center">
                            <div class="tbody td-1" data-label="Dịch vụ">
                                <div class="inner order-service cl-666">
                                    <p class="service-name fw-700 fz-16 m-bottom-10">Cloud 02 Gb - 01 Tháng</p>
                                    <p class="host fz-14 m-bottom-0">Tên (Hostname): demo</p>
                                    <p class="operating_system fz-14 m-bottom-0">Hệ điều hành: Centos_8_1x86_64_SBDTel</p>
                                </div>
                            </div>
                            <div class="tbody td-2" data-label="Đơn giá">
                                <div class="inner">
                                    <p class="price fw-700 fz-22 text-uppercase">1.400.000VNĐ</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-order trow display-flex align-center">
                            <div class="tbody td-1" data-label="Dịch vụ">
                                <div class="inner order-service cl-666">
                                    <p class="service-name fw-700 fz-16 m-bottom-10">Cloud 02 Gb - 6 Tháng</p>
                                    <p class="host fz-14 m-bottom-0">Tên (Hostname): demo</p>
                                    <p class="operating_system fz-14 m-bottom-0">Hệ điều hành: Centos_8_1x86_64_SBDTel</p>
                                </div>
                            </div>
                            <div class="tbody td-2" data-label="Đơn giá">
                                <div class="inner">
                                    <p class="price fw-700 fz-22 text-uppercase m-bottom-0">5.196.000VNĐ</p>
                                    <p class="price-normal cl-666 text-uppercase">519.600 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="order-payment">
                    <div class="order-payment-head">
                        <div class="inner d-flex align-center">
                            <div class="icon"><img src="images/order/dollar.png" alt=""></div>
                            <p class="title">Mã đơn hàng</p>
                        </div>
                    </div>
                    <div class="order-payment-body">
                        <div class="order-payment-item m-bottom-10 order-payment-subtotal d-flex">
                            <p class="label m-bottom-0 cl-666 fz-18">Cộng</p>
                            <p class="mony cl-333 fw-700 fz-20 text-uppercase">1.400.000VNĐ</p>
                        </div>
                        <div class="order-payment-item m-bottom-10 order-payment-vat d-flex">
                            <p class="label m-bottom-0 cl-666 fz-18">Thuế (VAT)</p>
                            <p class="mony cl-333 fw-700 fz-20 text-uppercase">519.000 VNĐ</p>
                        </div>
                        <div class="order-payment-item m-bottom-10 order-payment-sale d-flex">
                            <p class="label m-bottom-0 cl-666 fz-18">Giảm giá</p>
                            <p class="mony cl-333 fw-700 fz-20 text-uppercase">0 VNĐ</p>
                        </div>
                    </div>
                    <div class="order-payment-footer">
                        <div class="order-payment-total d-flex">
                            <p class="label m-bottom-0 cl-666 fz-18">Tổng</p>
                            <p class="mony cl-main fw-700 fz-20 text-uppercase">7.115.6000 VNĐ</p>
                        </div>
                        <div class="link text-center">
                            <a href="#">Gia hạn dịch vụ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection