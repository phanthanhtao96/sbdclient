    {{-- Layout Header --}}
    @include('patials.header')

    {{-- Layout Sider bar on mobile --}}
    @include('patials.siderbar_mobile')

    <div class="page-content">
        <div class="wrap-content display-flex">
            
            {{-- Layout Siderbar --}}
            @include('patials.siderbar')

            <div class="content-right">
                {{-- Content single of layout --}}
                @yield('content_right')
                
                <footer class="footer-copyright footer-absolute cl-333 fz-13 fw-300">
                    <p>Sao Bac Dau © 2021 All Rights Reserved.</p>
                </footer>
            </div>

        </div>
    </div>

    {{-- Layout Footer --}}
    @include('patials.footer')