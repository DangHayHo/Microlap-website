@extends('shares.head')

@extends('shares.footer')

@section('head')
<body>
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
                            <li><a href="{{route('client')}}">Trang chủ</a></li>
                            <li><a href="{{route('course')}}">Khóa học</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Hợp tác</a></li>
                        </ul>
                    </div>
                    <div class="account-action">
                        <div class="guest">
                            <button style="margin-right: 10px;" class="mdc-button mdc-button--outlined">
                              <a style="text-decoration:none"  href="{{route('register')}}">  <span class="mdc-button__label">Đăng ký</span></a>
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
                            <li><a href="{{route('profile')}}">Thông tin Profile</a></li>
                            <li><a href="{{route('course')}}">Khóa học của tôi</a></li>
                            <li><a href="#">Tài khoản VIP</a></li>
                            <li><a href="{{route('client')}}">Đăng xuất</a></li>
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
<x-title />
    <div class="m-line"></div>

    <div class="courses">
        <div class="group-title">
            <span class="big-label">Videos mới nhất</span>
            <div class="center-line"></div>
        </div>
        <div class="blogs">
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/YS4e4q9oBaU/hq720.jpg" alt=""title/>
                <h2>10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs</h2>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/lf_kiH_NPvM/hq720.jpg" alt=""title/>
                <h2>ChatGPT trợ lý "biết tuốt" khiến Google phải "báo động đỏ"</h2>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/Lbiz-PZNiU0/hq720.jpg" alt=""title/>
                <h2>Buffered Channel là gì? Thường xuyên bị hỏi trong phỏng vấn Golang Dev</h2>
            </div>

            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/bj77B59nkTQ/hq720.jpg" alt=""title/>
                <h2>10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs</h2>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/TG43cMpaxlI/hq720.jpg" alt=""title/>
                <h2>10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs</h2>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/LHhsNa_Kgns/hq720.jpg" alt=""title/>
                <h2>10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs 10 Thư viện hay cho NodeJs</h2>
            </div>
        </div>

        <div class="group-title">
            <span class="big-label">Dự án tiêu biểu</span>
            <div class="center-line"></div>
        </div>
        <div class="projects">
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/YS4e4q9oBaU/hq720.jpg" alt=""title/>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/lf_kiH_NPvM/hq720.jpg" alt=""title/>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/Lbiz-PZNiU0/hq720.jpg" alt=""title/>
            </div>
            <div class="mdc-card">
                <img src="https://i.ytimg.com/vi/Lbiz-PZNiU0/hq720.jpg" alt=""title/>
            </div>
        </div>

    <x-khoahoc />
     
    <x-congdong />
        
        <div style="height: 70px;"></div>
    </div>
</main>
@section('footer')
@endsection
<script type="application/javascript">
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
</script>
</body>
</html>
@endsection