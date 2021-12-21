@extends('layouts.index')

@section('title')
    Thanh Toán | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-checkout">
        <div class="wrap-steps-checkout">
            <ul class="list-unstyled display-flex align-center m-bottom-0">
                <li class="step-active"><a href="add-service.html">Chọn sản phẩm</a></li>
                <li class="step-active"><a href="cart.html">Giỏ hàng</a></li>
                <li class="step-active"><a href="payment.html">Thanh toán</a></li>
                <li class=""><a href="complete.html">Hoàn tất</a></li>
            </ul>
        </div>
        <div class="wrap-add-service m-top-40 display-flex">
            <div class="wrap-payment">
                <h2 class="title cl-333 fz-18 fw-700 m-bottom-20">Phương thức thanh toán</h2>
                <div class="wrap-payment-inner display-flex">
                    <div class="left">
                        <form action="#" method="post" class="payment_form" id="payment_form">
                            <div class="inner">
                                <div class="payment-methods">
                                    <div class="item-method">
                                        <label class="label-checkbox" for="payment_method_1">
                                            <div class="box d-flex align-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/payment/thanh-toan-the.png') }}" alt="thanh-toan-the">
                                                </div>
                                                <div class="content cl-666 fz-16">
                                                    <h4 class="title fz-20 cl-333 fw-700 m-bottom-10">Chuyển khoản</h4>
                                                    <p>Chủ tài khoản: Công ty cổ phần dịch vụ viên thông Sao Bắc Đẩu</p>
                                                    <p>Tài khoản ngân hàng: <span style="color: #007db6">12345678</span></p>
                                                    <p>Ngân hàng Viecombank: Chi nhánh Mễ Trì</p>
                                                </div>
                                            </div>
                                            <input class="" type="radio" name="payment_method" id="payment_method_1" value="Bank transfer" checked>
                                            <span class="check-status"></span>
                                        </label>
                                    </div>
                                    <div class="item-method m-top-20">
                                        <label class="label-checkbox" for="payment_method_2">
                                            <div class="box d-flex align-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/payment/vn-pay.png') }}" alt="thanh-toan-vnpay">
                                                </div>
                                                <div class="content cl-666 fz-16">
                                                    <h4 class="title fz-20 cl-333 fw-400 m-bottom-10"><span class="fw-700 ">Thanh toán qua VNPAY</span> (Qrcode, ví VNPAY, Credit Card)</p>
                                                </div>
                                            </div>
                                            <input class="" type="radio" name="payment_method" id="payment_method_2" value="VNPAY transfer">
                                            <span class="check-status"></span>
                                        </label>
                                    </div>
                                    <div class="vnpay-method m-top-40">
                                        <h2 class="title fz-20 cl-333 fw-700 m-bottom-15">Thanh toán quét mã qua VNPay</h2>
                                        <img src="{{ asset('sbdportal/images/payment/vnpay.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="payment-details">
                                    <div class="item payment-details-bank">
                                        <div class="head">
                                            <h2 class="title fz-20 cl-333 fw-700 m-bottom-0">Thẻ ATM hoặc tài khoản ngân hàng</h2>
                                        </div>
                                        <div class="body">
                                            <div class="inner-body display-flex">
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-35.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-37.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-38.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-39.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-40.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-41.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-42.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-43.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-44.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-45.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-46.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-47.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-49.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-50.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-51.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-52.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-53.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-54.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-55.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/bank/Layer-56.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item payment-details-global">
                                        <div class="head">
                                            <h2 class="title fz-20 cl-333 fw-700 m-bottom-0">Thẻ thanh toán quốc tế</h2>
                                        </div>
                                        <div class="body">
                                            <div class="inner-body display-flex">
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/global/american-express.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/global/Visa-Classic.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/global/Mastercard.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/global/JCB.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="item-bank">
                                                    <div class="bank-img">
                                                        <img src="{{ asset('sbdportal/images/payment/global/UnionPay.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item payment-details-vnpay">
                                        <h2 class="title fz-20 cl-333 fw-700 m-bottom-15">Ví điện tử VNPAY</h2>
                                        <div class="body">
                                            <div class="item-bank">
                                                <div class="bank-img">
                                                    <img src="{{ asset('sbdportal/images/payment/vn-pay-logo.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner m-top-30">
                                <div class="red-bill">
                                    <label class="label-checkbox m-bottom-25" for="red_bill">
                                        <h2 class="title cl-333 fz-18 fw-700 m-bottom-0">Xuất hóa đơn đỏ</h2>
                                        <input class="" type="checkbox" name="red_bill" id="red_bill">
                                        <span class="check-status"></span>
                                    </label>
                                    <div class="item-field">
                                        <label for="company_name"><span class="text">Tên công ty</span></label>
                                        <input type="text" name="company_name" id="company_name" placeholder="Nhập tên công ty của bạn">
                                    </div>
                                    <div class="item-field m-top-20">
                                        <label for="tax_code"><span class="text">Mã số thuế</span></label>
                                        <input type="text" name="tax_code" id="tax_code" placeholder="Nhập mã số thuế của bạn">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-links d-flex m-top-40">
                                <div class="link white">
                                    <a href="cart.html"><span class="lnr lnr-arrow-left"></span> Quay lại</a>
                                </div>
                                <button type="submit" class="btn-submit">Thêm vào đơn hàng <span class="lnr lnr-arrow-right"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <div class="table-total">
                            <div class="head d-flex align-center">
                                <div class="icon"><img src="{{ asset('sbdportal/images/button/buy.svg') }}" alt=""></div>
                                <h2 class="title m-bottom-0 fz-18 cl-666 fw-400">Đơn hàng</h2>
                            </div>
                            <div class="body body-order-services">
                                <div class="item sub d-flex m-bottom-10">
                                    <p class="label fz-16 cl-666 m-bottom-0">Cloud 02 Gb - 01 Tháng</p>
                                    <p class="text fz-20 fw-700 cl-333">1.400.000VNĐ</p>
                                </div>
                                <div class="item vat d-flex m-bottom-0">
                                    <p class="label fz-16 cl-666 m-bottom-0">Cloud 02 Gb - 06 Tháng</p>
                                    <p class="text fz-20 fw-700 cl-333">5.196.000VNĐ</p>
                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection