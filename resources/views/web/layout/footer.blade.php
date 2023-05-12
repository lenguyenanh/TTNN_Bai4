<section class="space bg-color--primary">
    <div class="container">
        <div class="row">
            <div class="col-12 color--white text-center mb-6">
                <h2 class="mb-2">Danh sách các kênh hỗ trợ</h2>
            </div>
        </div>
        <!-- end of section title row -->
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="icon-fill--wide text-center d-md-flex justify-content-lg-center flex-wrap">
                    @foreach ($links as $link)
                    <a class="t-icon btn-bg--white box-shadow--5 rounded--05 m-1 btn-hover--cta--4" href="{{$link->url}}">
                        <span class="t-icon__brand-name h5-font font-w--500 text-color--700">{{$link->title}}</span>
                    </a>
                    @endforeach
                </div>
                <!-- end of icon group -->
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>

<!-- =========== Start of Footer ============ -->
<footer class="footer section--light bg-color--primary-light--1 position-relative hidden">
    <div class="pt-3 pt-lg-10 pb-6 pb-lg-10 border--bottom">
        <div class="container">
            <div class="row">
                <span class="mb-3">
                    <img src="{{asset('web/image/logo.png')}}" alt="brand-logo" height="39">
                </span>
                <div class="col-12 col-md-9 col-lg-3 mb-4 mb-xl-0">
                    <div class="pr-xl-3">
                        <h6>CÔNG TY THNN NC9 VIỆT NAM</h6>
                        <p style="font-weight: bold;">Trụ sở chính:</p>
                        <p>- 87 Nguyễn Thị Thập, KDC Him Lam, phường Tân Hưng, Quận 7, TP Hồ Chí Minh</p>
                        <p style="font-weight: bold;">Văn phòng đại diện: </p>
                        <p>- 25/19 Ngô Quyền, Phường 6, TP. Đà Lạt, Tỉnh Lâm Đồng</p>
                        <p style="font-weight: bold;">Trung tâm đào tạo: </p>
                        <p>- Trường Đại học Đà Lạt - Số 1 Phù Đổng Thiên Vương, Phường 8, TP. Đà Lạt, Tỉnh Lâm Đồng</p>
                        <p style="font-weight: bold;">Số điện thoại: </p>
                        <p>- 07.8888.1000 (Korean) - 09.2121.9000 (Việt Nam)</p>
                        <p style="font-weight: bold;">Email: </p>
                        <p>- manager@amnote.com.vn (Korean) - amteam@amnote.com.vn (Việt Nam)</p>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-2 mb-xl-0">
                    <div class="widget widget-nav">
                        <span class="widget__title font-size--20 font-w--700 mb-1">Khám phá</span>
                        <ul>
                            <li><a href="https://www.misa.vn/cong-ty/?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=&utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=&utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Về MISA</a></li>
                            <li><a href="https://amisapp.misa.vn/market?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer">Chợ ứng dụng</a></li>
                            <li><a href="https://amis.misa.vn/register/?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Đăng ký dùng thử</a></li>
                            <li><a href="https://amisapp.misa.vn/login">Đăng nhập</a></li>
                            <li><a href="https://www.misa.vn/hop-tac/?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=&utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Hợp tác</a></li>
                            <li><a href="https://amis.misa.vn/ho-tro?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Hỗ trợ khách hàng</a></li>
                            <li><a href="https://www.misa.vn/tuyen-dung?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Tuyển dụng</a></li>
                            <li><a href="https://amis.misa.vn/lien-he?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end of widget col-->
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-2 mb-xl-0">
                    <div class="widget widget-nav">
                        <span class="widget__title font-size--20 font-w--700 mb-1">Tài nguyên</span>
                        <ul>
                            <li><a href="https://amis.misa.vn/tin-tuc/tai-lieu-ebooks?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Tài liệu - eBooks</a></li>
                            <li><a href="https://event.misa.vn/?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Sự kiện - Webinar</a></li>
                            <li><a href="https://academy.misa.vn/?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Khóa học trực tuyến</a></li>
                            <li><a href="https://amis.misa.vn/ung-dung-mien-phi">Ứng dụng miễn phí</a></li>
                            <li><a href="https://amis.misa.vn/tin-tuc/trac-nghiem-chuyen-mon?utm_source=Misa-website-network&utm_medium=footer&utm_campaign=footer&utm_content=&utm_term=">Trắc nghiệm chuyên môn</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end of widget col-->
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-2 mb-xl-0">
                    <div class="widget widget-nav">
                        <span class="widget__title font-size--20 font-w--700 mb-1">Blogs</span>
                        <ul>
                            <li><a href="#">Tài chính - Kế toán</a></li>
                            <li><a href="#">Marketin - Bán hàng</a></li>
                            <li><a href="#">Quản lý nhân lực</a></li>
                            <li><a href="#">Quản lý điều hành</a></li>
                            <li><a href="#">Chuyển đổi số</a></li>
                        </ul>
                    </div>
                    <a href="http://online.gov.vn/Home/WebDetails/78394" target="_blank" rel="noopener">
                        <img alt="" title="" src="https://ameinvoice.vn/wp-content/uploads/2021/03/logoSaleNoti.png" height="67.3">
                    </a>
                </div>
                <!-- end of widget col-->
            </div>
        </div> 
        <!-- end of main footer container-->
    </div>
    <!-- end of main footer -->
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="font-size--15">Copyright 2020 © Am-Einvoice. All Rights Reserved.</p>
                </div>
            </div>
            <!-- end of mini footer row -->
        </div>
        <!-- end of mini footer container -->
    </div>
    <!-- end of mini footer -->
</footer>
<!-- =========== End of Footer ============ -->