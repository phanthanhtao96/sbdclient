@extends('layouts.index')

@section('title')
    Giỏ hàng | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-checkout">
        <div class="wrap-steps-checkout">
            <ul class="list-unstyled display-flex align-center m-bottom-0">
                <li class="step-active"><a href="add-service.html">Chọn sản phẩm</a></li>
                <li class="step-active"><a href="cart.html">Giỏ hàng</a></li>
                <li class=""><a href="payment.html">Thanh toán</a></li>
                <li class=""><a href="complete.html">Hoàn tất</a></li>
            </ul>
        </div>
        <div class="wrap-add-service m-top-40 display-flex">
            <div class="wrap-cart">
                <h2 class="title cl-333 fz-18 fw-700 m-bottom-20">Giỏ hàng của bạn</h2>
                <div class="inner display-flex">
                    <div class="left">
                        <div class="body table">
                            <div class="table-head fz-18 cl-666 display-flex">
                                <div class="thead col-md-6">
                                    <div class="inner d-flex align-center">
                                        <div class="icon"><img src="{{ asset('sbdportal/images/button/buy.svg') }}" alt=""></div>
                                        <p class="title">Dịch vụ</p>
                                    </div>
                                </div>
                                <div class="thead col-md-6">
                                    <div class="inner d-flex align-center">
                                        <div class="icon"><img src="images/cart/dollar.svg" alt="">
                                        </div>
                                        <p class="title">Đơn giá</p>
                                    </div>
                                </div>
                            </div>
                            <div class="table-body cl-333">
                                <div class="order-detail-item trow row display-flex align-center" id="order_0000">
                                    <div class="tbody col-md-6" data-label="Dịch vụ">
                                        <div class="inner">
                                            <p class="name m-bottom-15 fw-700">Cloud 02 Gb - 01 Tháng</p>
                                            <p class="text cl-666 fz-14">Tên (Hostname): demo</p>
                                            <p class="text cl-666 fz-14">Hệ điều hành: Centos_8_1x86_64_SBDTel</p>
                                        </div>
                                    </div>
                                    <div class="tbody col-md-6" data-label="Đơn giá">
                                        <div class="inner">
                                            <p class="price fz-20 fw-700 text-uppercase">1.400.000VNĐ</p>
                                            <a class="delete_order" href="javascript:void(0)" data-id="0000"><img src="{{ asset('sbdportal/images/cart/delete.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-detail-item trow row display-flex align-center" id="order_0001">
                                    <div class="tbody col-md-6" data-label="Dịch vụ">
                                        <div class="inner">
                                            <p class="name m-bottom-15 fw-700">Cloud 02 Gb - 06 Tháng</p>
                                            <p class="text cl-666 fz-14">Tên (Hostname): demo</p>
                                            <p class="text cl-666 fz-14">Hệ điều hành: Centos_8_1x86_64_SBDTel</p>
                                        </div>
                                    </div>
                                    <div class="tbody col-md-6" data-label="Đơn giá">
                                        <div class="inner">
                                            <p class="price fz-20 fw-700 text-uppercase">5.196.000VNĐ</p>
                                            <p class="price-vat fz-16 cl-666 fw-400 text-uppercase">519.600 VNĐ</p>
                                            <a class="delete_order" href="javascript:void(0)" data-id="0001"><img src="{{ asset('sbdportal/images/cart/delete.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="action-cart m-top-40 display-flex align-center">
                            <div class="link">
                                <a class="delete_all_cart" href="javascript:void(0)" data-id="all">Xóa giỏ hàng <img src="{{ asset('sbdportal/images/cart/delete.svg') }}" alt=""></a>
                            </div>
                            <div class="link">
                                <a class="" href="add-service.html">Thêm dịch vụ <img src="{{ asset('sbdportal/images/cart/plus.png') }}" alt=""></a>
                            </div>
                            <div class="coupon">
                                <form class="coupon_form" id="coupon_form" action="" method="post">
                                    <input type="text" name="coupon" id="coupon" placeholder="Nhập mã khuyến mãi">
                                    <button class="btn-submit" type="submit">Nhập <span class="lnr lnr-arrow-right"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="table-total">
                            <div class="head d-flex align-center">
                                <div class="icon"><img src="images/cart/dollar.svg" alt=""></div>
                                <h2 class="title m-bottom-0 fz-18 cl-666 fw-400">Thành tiền</h2>
                            </div>
                            <div class="body">
                                <div class="item sub d-flex m-bottom-10">
                                    <p class="label fz-18 cl-666 m-bottom-0">Cộng</p>
                                    <p class="text fz-20 fw-700 cl-333">1.400.000VNĐ</p>
                                </div>
                                <div class="item vat d-flex m-bottom-10">
                                    <p class="label fz-18 cl-666 m-bottom-0">Thuế (VAT)</p>
                                    <p class="text fz-20 fw-700 cl-333">519.000 VNĐ</p>
                                </div>
                                <div class="item sale d-flex">
                                    <p class="label fz-18 cl-666 m-bottom-0">Giảm giá</p>
                                    <p class="text fz-20 fw-700 cl-333">0 VNĐ</p>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="total d-flex">
                                    <p class="label fz-18 cl-666 m-bottom-0">Tổng</p>
                                    <p class="text fz-20 fw-700 cl-main">7.115.6000 VNĐ</p>
                                </div>
                                <div class="link link-submit-cart">
                                    <a href="payment.html">Thanh toán đơn hàng <img src="{{ asset('sbdportal/images/cart/submit.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection