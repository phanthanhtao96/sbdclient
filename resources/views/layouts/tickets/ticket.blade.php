@extends('layouts.index')

@section('title')
    Hổ trợ Ticket | SBD Portal
@endsection

@section('content_right')
<div class="inner">
    <div class="wrap-services wrap-tickets">
        <div class="head display-flex align-center m-bottom-25">
            <h1 class="fz-26 fw-700 cl-333 m-bottom-0">Ticket Hỗ trợ</h1>
            <div class="box-search">
                <input type="text" name="search_services" id="search_services" placeholder="Nhập ticket cần tìm ">
            </div>
            <div class="link main-2">
                <a class="text-uppercase" href="create-new-ticket.html" title="Tạo ticket">Tạo ticket <img src="{{ asset('sbdportal/images/button/buy-main-2.svg') }}" alt="Tạo ticket"></a>
            </div>
        </div>
        <div class="body table">
            <div class="table-head fz-18 cl-666 display-flex">
                <div class="thead td-1" data-label="Mã ticket">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/button/airplane.svg') }}" alt=""></div>
                        <p class="title">Mã ticket</p>
                    </div>
                </div>
                <div class="thead td-2" data-label="Tiêu đề">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/bills/company.svg') }}" alt=""></div>
                        <p class="title">Tiêu đề</p>
                    </div>
                </div>
                <div class="thead td-3" data-label="Trạng thái">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/status.svg') }}" alt=""></div>
                        <p class="title">Trạng thái</p>
                    </div>
                </div>
                <div class="thead td-4" data-label="Thời gian phản hồi lần cuối">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/time.svg') }}" alt=""></div>
                        <p class="title">Thời gian phản hồi lần cuối</p>
                    </div>
                </div>
                <div class="thead td-5" data-label="Thời gian khởi tạo">
                    <div class="inner d-flex align-center">
                        <div class="icon"><img src="{{ asset('sbdportal/images/service/time.svg') }}" alt=""></div>
                        <p class="title">Thời gian khởi tạo</p>
                    </div>
                </div>
            </div>
            <div class="table-body cl-333">
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã ticket">
                        <div class="inner">
                            <p class="text"><a class="link-ticket-detail" href="ticket-detail.html">Ticket26358</a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Tiêu đề">
                        <div class="inner">
                            <p class="name">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Chờ phản hồi</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Thời gian phản hồi lần cuối">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Thời gian khởi tạo">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã ticket">
                        <div class="inner">
                            <p class="text"><a class="link-ticket-detail" href="ticket-detail.html">Ticket26346</a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Tiêu đề">
                        <div class="inner">
                            <p class="name">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã phản hồi</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Thời gian phản hồi lần cuối">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Thời gian khởi tạo">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã ticket">
                        <div class="inner">
                            <p class="text"><a class="link-ticket-detail" href="ticket-detail.html">Ticket26346</a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Tiêu đề">
                        <div class="inner">
                            <p class="name">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã phản hồi</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Thời gian phản hồi lần cuối">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Thời gian khởi tạo">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã ticket">
                        <div class="inner">
                            <p class="text"><a class="link-ticket-detail" href="ticket-detail.html">Ticket26346</a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Tiêu đề">
                        <div class="inner">
                            <p class="name">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã phản hồi</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Thời gian phản hồi lần cuối">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Thời gian khởi tạo">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                </div>
                <div class="trow display-flex">
                    <div class="tbody td-1" data-label="Mã ticket">
                        <div class="inner">
                            <p class="text"><a class="link-ticket-detail" href="ticket-detail.html">Ticket26346</a></p>
                        </div>
                    </div>
                    <div class="tbody td-2" data-label="Tiêu đề">
                        <div class="inner">
                            <p class="name">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="tbody td-3" data-label="Trạng thái">
                        <div class="inner">
                            <p class="text">Đã phản hồi</p>
                        </div>
                    </div>
                    <div class="tbody td-4" data-label="Thời gian phản hồi lần cuối">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                    <div class="tbody td-5" data-label="Thời gian khởi tạo">
                        <div class="inner">
                            <p class="text"><span class="cl-666">12:08:43</span>, 02/09/2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection