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
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
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
                            <li><a href="{{route('home')}}">Đăng xuất</a></li>
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
<div>
        <div class="menu-mobile">
            <div class="menu">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Khóa học</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Hợp tác</a></li>
                    <li>
                        <button class="mdc-button mdc-button--outlined">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Đăng nhập</span>
                        </button>
                    </li>
                    <li>
                        <button class="mdc-button mdc-button--outlined">
                            <span class="mdc-button__label">Đăng ký</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="banner">
        <div class="image-box">
            <div class="content-box">
            <img src="{{asset('assets/images/bg_header.jpg')}}" alt="banner" width=100% />
                <span class="first-quote">Đường dài vạn dặm bắt đầu từ một bước chân</span>
                <span class="second-quote">Cùng nhau đóng góp vào chất lượng nhân sự CNTT Việt Nam</span>
                <button class="mdc-button mdc-button--raised">
                <a style="text-decoration:none" href="{{route('register')}}">      <span class="mdc-button__label">Tạo tài khoản miễn phí</span></a>
                </button>
            </div>
        </div>
    </div>
    <div class="m-line"></div>
      <x-videos/>
      <div class="text-center">
       <x-projects/>
</div>
<div class="text-center">
    <x-courses />
</div>    
    <x-social />
        
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