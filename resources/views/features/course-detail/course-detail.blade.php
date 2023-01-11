@extends('shares.head')
@extends('shares.footer')
@section('head')
@endsection

<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <div class="header-container">
            <div class="header-content">
                <div class="logo">
                    <img src="{{asset('assets/images/logo.svg')}}" alt="logo" width="40" height="40"/>
                    <span>MICROLAP</span>
                </div>
                <div class="menu-desktop">
                    <div class="menu">
                        <ul>
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li><a href="{{route('course')}}">Khóa học</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Hợp tác</a></li>
                        </ul>
                    </div>
                    <div class="account-action">
                        <div class="guest">
                            <button style="margin-right: 10px;" class="mdc-button mdc-button--outlined">
                               <span class="mdc-button__label"><a style="text-decoration:none" href="{{route('register')}}"> Đăng ký</a></span>
                            </button>
                            <button class="mdc-button mdc-button--outlined">
                            <a style="text-decoration:none" href="{{route('login')}}">  <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Đăng nhập</span></a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="right-content">
                    <div class="avatar-mobile" id="avatar-box-mobile">
                        <img width="30" height="30" src="https://www.kindpng.com/picc/m/206-2060399_discord-png-avatar-anime-transparent-png.png" alt="avatar"/>
                    </div>
                    <div class="dropdown-content-mobile" id="menu-mobile">
                        <ul>
                            <li><a href="#">Thông tin Profile</a></li>
                            <li><a href="#">Khóa học của tôi</a></li>
                            <li><a href="#">Tài khoản VIP</a></li>
                            <li><a href="#">Đăng xuất</a></li>
                        </ul>
                    </div>

                    <div class="toggle-menu">
                        <i class="material-icons mdc-button__icon" aria-hidden="true">menu</i>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>

<main class="mdc-top-app-bar--fixed-adjust">
     <x-gioithieukhoahoc />

        <div style="margin-bottom: 50px">
            <div class="group-title">
                <span class="big-label">ĐĂNG KÝ KHÓA HỌC</span>
                <div class="center-line"></div>
            </div>
            <div class="buy-course">
                <div class="steps">
                    <h2>Bước 1: Chuyển khoản</h2>
                    <ul>
                        <li>Giá khoá học: <span style="font-weight: bold; color: red">750,000 VNĐ</span></li>
                        <li>Ngân hàng: Vietcombank, chi nhánh Quang Trung, Gò Vấp, HCM</li>
                        <li>Chủ Thẻ: Nguyễn Văn Kiên</li>
                        <li>STK: <span style="color: green; font-weight: bold">0071000788228</span></li>
                        <li><p>Ghi chú khi chuyển khoản (bắt buộc): Phone + Tên khoá học. <br/>Ví dụ bạn đăng ký tài khoản trên Code4Func với phone là: 0973288688 và muốn mua khoá học "Flutter A-Z" thì ghi chú sẽ là: 0973901789 Flutter A-Z</p></li>
                    </ul>

                    <br />
                    <h2>Bước 2: Xác nhận</h2>
                    <p style="padding: 0px 15px 15px 15px">Khi Code4Func xác nhận bạn đã chuyển khoản, khoá học sẽ được mở cho tài khoản của bạn. Bạn có thể vào mục khoá học trong menu profile để xem những khoá học bạn đã mua trên Code4Func.com Trong trường hợp bạn vẫn không thể truy cập khoá học hãy liên hệ ngay với Code4Func để được trợ giúp.</p>
                </div>
            </div>
            <div style="height :70px;"></div>
        </div>
        
    </div>
</main>

@section('footer')
@endsection
<script>
    window.addEventListener('click', function(e){
        let menu = document.getElementById("menu");
        if (document.getElementById('avatar-box').contains(e.target)){
            menu.style.display = "block";
        } else{
            menu.style.display = "none";
        }

        let menuMobile = document.getElementById("menu-mobile");
        if (document.getElementById('avatar-box-mobile').contains(e.target)){
            menuMobile.style.display = "block";
        } else{
            menuMobile.style.display = "none";
        }
    });

    let coll = document.getElementsByClassName("course-cate-collapsible");
    for (let i = 0; i < coll.length; i++) {
        coll[i].classList.toggle("active");
        let content = coll[i].nextElementSibling;
        content.style.maxHeight = content.scrollHeight + "px";

        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>
</body>
</html>