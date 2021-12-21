@extends('layouts.index')

@section('title')
    Mua dịch vụ | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-checkout">
        <div class="wrap-steps-checkout">
            <ul class="list-unstyled display-flex align-center m-bottom-0">
                <li class="step-active"><a href="add-service.html">Chọn sản phẩm</a></li>
                <li class=""><a href="cart.html">Giỏ hàng</a></li>
                <li class=""><a href="payment.html">Thanh toán</a></li>
                <li class=""><a href="complete.html">Hoàn tất</a></li>
            </ul>
        </div>
        <div class="wrap-add-service m-top-40 display-flex">
            <div class="left">
                <form action="" method="post" class="add-service" id="add-service_form">
                    <div class="group-products">
                        <h2 class="title cl-333 fz-18 fw-700 m-bottom-20">Nhóm sản phẩm</h2>
                        <div class="wrap-swiper">
                            <div class="inner swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product_cat" id="0" value="Cloud" checked>
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/cloud.svg') }}" alt="Cloud">
                                                </div>
                                                <p class="name cl-333 fw-500">Cloud</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product_cat" id="1" value="CDN">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/CDN.svg') }}" alt="CDN">
                                                </div>
                                                <p class="name cl-333 fw-500">CDN</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product_cat" id="2" value="Smart Corporation">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/Smart_Corporation.svg') }}" alt="Smart Corporation">
                                                </div>
                                                <p class="name cl-333 fw-500">Smart Corporation</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product_cat" id="3" value="AWS Lightsail">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/AWS_Lightsail.svg') }}" alt="AWS Lightsail">
                                                </div>
                                                <p class="name cl-333 fw-500">AWS Lightsail</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product_cat" id="4" value="Tài khoản">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/account.svg') }}" alt="Tài khoản">
                                                </div>
                                                <p class="name cl-333 fw-500">Tài khoản</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product_cat" id="4" value="WorkIT">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/WorkIT.svg') }}" alt="WorkIT">
                                                </div>
                                                <p class="name cl-333 fw-500">WorkIT</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <div class="group-product-options m-top-20" id="product-options">
                        <div class="list-products">
                            <div class="inner swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="Public Cloud" checked>
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/Publid_Cloud.svg') }}" alt="Public Cloud">
                                                </div>
                                                <p class="name fz-14 cl-333">Public Cloud</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Workpress">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforWorkpress.svg') }}" alt="SBD Cloud for Workpress">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Workpress</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Database">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforDatabase.svg') }}" alt="SBD Cloud for Database">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Database</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Prupal">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforPrupal.svg') }}" alt="SBD Cloud for Prupal">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Prupal</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Model">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforWorkpress.svg') }}" alt="SBD Cloud for Model">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Model</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Database">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforDatabase.svg') }}" alt="SBD Cloud for Database">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Database</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Prupal">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforPrupal.svg') }}" alt="SBD Cloud for Prupal">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Prupal</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="swiper-slide">
                                        <label class="item swiper-no-swiping">
                                            <input type="radio" name="product" id="0" value="SBD Cloud for Model">
                                            <div class="item-show text-center">
                                                <div class="img">
                                                    <img src="{{ asset('sbdportal/images/add-service/SBDCloudforWorkpress.svg') }}" alt="SBD Cloud for Model">
                                                </div>
                                                <p class="name fz-14 cl-333">SBD Cloud for Model</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="product-options" id="product_0">
                            <div class="list-packages">
                                <h4 class="title cl-666 fw-400 fz-16 m-bottom-15">Chọn gói</h4>
                                <div class="list horizontal-scrollbar d-flex align-center">
                                    <div class="item">
                                        <label class="label-checkbox" for="package_1">
                                            <span class="text">Cloud 02 GB<span class="link-tooltip" data-id="#tooltip_1"></span></span>
                                            <input class="" type="radio" name="package" id="package_1" value="Cloud 02 GB">
                                            <span class="check-status"></span>
                                            <div class="tool_tip-content" id="tooltip_1" style="display: none;">
                                                <ul>
                                                    <li>CPU: 01 vCORE</li>
                                                    <li>Băng thông trong nước: 100mBps</li>
                                                    <li>RAM: 02 GB</li>
                                                    <li>Băng thông quốc tế: 10 mBps</li>
                                                    <li>Dung lượng: 40 GB</li>
                                                    <li>Địa chỉ IP Publit: 1</li>
                                                </ul>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <label class="label-checkbox" for="package_2">
                                            <span class="text">Cloud 04 GB<span class="link-tooltip" data-id="#tooltip_2"></span></span>
                                            <input class="" type="radio" name="package" id="package_2" value="Cloud 04 GB">
                                            <span class="check-status"></span>
                                            <div class="tool_tip-content" id="tooltip_2" style="display: none;">
                                                <ul>
                                                    <li>CPU: 01 vCORE</li>
                                                    <li>Băng thông trong nước: 100mBps</li>
                                                    <li>RAM: 04 GB</li>
                                                    <li>Băng thông quốc tế: 10 mBps</li>
                                                    <li>Dung lượng: 40 GB</li>
                                                    <li>Địa chỉ IP Publit: 1</li>
                                                </ul>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <label class="label-checkbox" for="package_3">
                                            <span class="text">Cloud 08 GB<span class="link-tooltip" data-id="#tooltip_3"></span></span>
                                            <input class="" type="radio" name="package" id="package_3" value="Cloud 08 GB">
                                            <span class="check-status"></span>
                                            <div class="tool_tip-content" id="tooltip_3" style="display: none;">
                                                <ul>
                                                    <li>CPU: 01 vCORE</li>
                                                    <li>Băng thông trong nước: 100mBps</li>
                                                    <li>RAM: 08 GB</li>
                                                    <li>Băng thông quốc tế: 10 mBps</li>
                                                    <li>Dung lượng: 40 GB</li>
                                                    <li>Địa chỉ IP Publit: 1</li>
                                                </ul>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <label class="label-checkbox" for="package_4">
                                            <span class="text">Cloud 16 GB<span class="link-tooltip" data-id="#tooltip_4"></span></span>
                                            <input class="" type="radio" name="package" id="package_4" value="Cloud 16 GB">
                                            <span class="check-status"></span>
                                            <div class="tool_tip-content" id="tooltip_4" style="display: none;">
                                                <ul>
                                                    <li>CPU: 01 vCORE</li>
                                                    <li>Băng thông trong nước: 100mBps</li>
                                                    <li>RAM: 16 GB</li>
                                                    <li>Băng thông quốc tế: 10 mBps</li>
                                                    <li>Dung lượng: 40 GB</li>
                                                    <li>Địa chỉ IP Publit: 1</li>
                                                </ul>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="list-billing-time">
                                <h4 class="title cl-666 fw-400 fz-16 m-bottom-15">Chọn chu kỳ thanh toán</h4>
                                <div class="list horizontal-scrollbar d-flex align-center">
                                    <div class="item">
                                        <label class="label-checkbox" for="billing_time_1">
                                            <span class="text fw-500 fz-16 cl-333">4.500.000 vnđ/01 tháng</span>
                                            <input class="" type="radio" name="billing_time" id="billing_time_1" value="4.500.000 vnđ/01 tháng">
                                            <span class="check-status"></span>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <label class="label-checkbox" for="billing_time_2">
                                            <span class="text fw-500 fz-16 cl-333">13.500.000 vnđ/03 tháng</span>
                                            <input class="" type="radio" name="billing_time" id="billing_time_2" value="13.500.000 vnđ/03 tháng">
                                            <span class="check-status"></span>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <label class="label-checkbox" for="billing_time_3">
                                            <span class="text fw-500 fz-16 cl-333">27.000.000 vnđ/06 tháng</span>
                                            <input class="" type="radio" name="billing_time" id="billing_time_3" value="27.000.000 vnđ/06 tháng">
                                            <span class="check-status"></span>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <label class="label-checkbox" for="billing_time_4">
                                            <span class="text fw-500 fz-16 cl-333">27.000.000 vnđ/06 tháng</span>
                                            <input class="" type="radio" name="billing_time" id="billing_time_4" value="27.000.000 vnđ/06 tháng">
                                            <span class="check-status"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="list-infos display-flex">
                                <div class="item-field col-md-6 first">
                                    <label for="host_name"><span class="text">Tên (Hostname)</span></label>
                                    <input type="text" name="host_name" id="host_name" placeholder="Nhập tên (Hostname) của bạn...">
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="operating_system"><span class="text">Chọn Hệ điều hành</span></label>
                                    <select class="select2_operating_system-js" name="operating_system" id="operating_system">
                                        <option data-icon="" value="">Chọn hệ điều hành</option>
                                        <option data-icon="centos" value="Centos - 8.1 x86-64">Centos - 8.1 x86-64</option>
                                        <option data-icon="centos" value="Centos - 7.6 x86-64">Centos - 7.6 x86-64</option>
                                        <option data-icon="centos" value="Centos - 6.10 x86-64">Centos - 6.10 x86-64</option>
                                        <option data-icon="ubuntu" value="Ubuntu - 19.10 x86-64">Ubuntu - 19.10 x86-64</option>
                                        <option data-icon="ubuntu" value="Ubuntu - 18.04 x86-64">Ubuntu - 18.04 x86-64</option>
                                        <option data-icon="ubuntu" value="Ubuntu - 16.04 x86-64">Ubuntu - 16.04 x86-64</option>
                                        <!-- loop -->
                                        <option data-icon="centos" value="Centos - 8.1 x86-64">Centos - 8.1 x86-64</option>
                                        <option data-icon="centos" value="Centos - 7.6 x86-64">Centos - 7.6 x86-64</option>
                                        <option data-icon="centos" value="Centos - 6.10 x86-64">Centos - 6.10 x86-64</option>
                                        <option data-icon="ubuntu" value="Ubuntu - 19.10 x86-64">Ubuntu - 19.10 x86-64</option>
                                        <option data-icon="ubuntu" value="Ubuntu - 18.04 x86-64">Ubuntu - 18.04 x86-64</option>
                                        <option data-icon="ubuntu" value="Ubuntu - 16.04 x86-64">Ubuntu - 16.04 x86-64</option>
                                    </select>
                                </div>
                            </div>
                            <div class="list-infos display-flex">
                                <div class="item-field col-md-6 first">
                                    <label for="add_ip"><span class="text">Thêm IP</span></label>
                                    <select class="select2-js" name="add_ip" id="add_ip">
                                        <option value="">Không thêm IP</option>
                                        <option value="Thêm 01 IP - 100.000 vnđ/01tháng">Thêm 01 IP - 100.000 vnđ/01tháng</option>
                                        <option value="Thêm 02 IP - 100.000 vnđ/01tháng">Thêm 02 IP - 100.000 vnđ/01tháng</option>
                                        <option value="Thêm 03 IP - 100.000 vnđ/01tháng">Thêm 03 IP - 100.000 vnđ/01tháng</option>
                                        <option value="Thêm 04 IP - 100.000 vnđ/01tháng">Thêm 04 IP - 100.000 vnđ/01tháng</option>
                                        <option value="Thêm 05 IP - 100.000 vnđ/01tháng">Thêm 05 IP - 100.000 vnđ/01tháng</option>
                                    </select>
                                </div>
                                <div class="item-field col-md-6 last">
                                    <label for="add_capacity"><span class="text">Thêm dung lượng</span></label>
                                    <select class="select2-js" name="add_capacity" id="add_capacity">
                                        <option value="">Không thêm dung lượng</option>
                                        <option value="Thêm 200GB dung lượng lưu trữ - 120.000 vnđ/tháng">Thêm 200GB dung lượng lưu trữ - 120.000 vnđ/tháng</option>
                                        <option value="Thêm 300GB dung lượng lưu trữ - 120.000 vnđ/tháng">Thêm 300GB dung lượng lưu trữ - 120.000 vnđ/tháng</option>
                                        <option value="Thêm 400GB dung lượng lưu trữ - 120.000 vnđ/tháng">Thêm 400GB dung lượng lưu trữ - 120.000 vnđ/tháng</option>
                                        <option value="Thêm 500GB dung lượng lưu trữ - 120.000 vnđ/tháng">Thêm 500GB dung lượng lưu trữ - 120.000 vnđ/tháng</option>
                                        <option value="Thêm 600GB dung lượng lưu trữ - 120.000 vnđ/tháng">Thêm 600GB dung lượng lưu trữ - 120.000 vnđ/tháng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="footer-form text-right">
                            <button type="submit" class="btn-submit">Thêm vào đơn hàng <span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="right">
                <form class="wrap-order-services" action="cart.html" method="post">
                    <h2 class="title fw-700 m-bottom-20 fz-18 cl-333">Đơn hàng</h2>
                    <div class="inner empty-cart">
                        <img src="{{ asset('sbdportal/images/add-service/empty.png') }}" alt="empty.png">
                        <p class="cl-666 fz-20 fw-500 m-top-30 text-center">Đơn hàng của bạn đang trống.<br>Hãy chọn sản phẩm để cho vào giỏ hàng!</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection