@extends('layouts.index')

@section('title')
    Đơn hàng | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-order">
        <div class="head display-flex align-center m-bottom-25">
            <h1 class="fz-26 fw-700 cl-333 m-bottom-0">Đơn hàng</h1>
            <div class="box-search">
                <input type="text" name="search_order" id="search_order" placeholder="Nhập tên đơn hàng bạn cần tìm kiếm">
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
                <div class="thead td-2" data-label="Trạng thái">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/status.svg') }}" alt=""></div>
                        <p class="title">Trạng thái</p>
                    </div>
                </div>
                <div class="thead td-3" data-label="Mã đơn hàng">
                </div>
            </div>
            <div class="table-body cl-333">
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text"><a href="order-detail.html">HDO000035-2021081014584381 - <span class="order-type cl-666">Đơn online</span></a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Chưa thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-3">
                        <div class="link-payment text-center"><a href="payment.html">Thanh toán</a></div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text"><a href="order-detail.html">HDO000035-2021081014584521 - <span class="order-type cl-666">Đơn offline</span></a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Chưa thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-3">
                        <div class="link-payment text-center"><a href="payment.html">Thanh toán</a></div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text"><a href="order-detail.html">HDO000035-202108101457528 - <span class="order-type cl-666">Đơn online</span></a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-3">
                        <div class="link-payment text-center"><a class="disable" href="payment.html">Thanh toán</a></div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text"><a href="order-detail.html">HDO000035-202108101457251 - <span class="order-type cl-666">Đơn online</span></a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-3">
                        <div class="link-payment text-center"><a class="disable" href="payment.html">Thanh toán</a></div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã đơn hàng">
                        <div class="inner">
                            <p class="text"><a href="order-detail.html">HDO000035-202108101455562 - <span class="order-type cl-666">Đơn online</span></a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã thanh toán</p>
                        </div>
                    </div>
                    <div class="tbody td-3">
                        <div class="link-payment text-center"><a class="disable" href="payment.html">Thanh toán</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection