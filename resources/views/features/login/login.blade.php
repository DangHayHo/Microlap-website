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
                            <a style="text-decoration:none" href="{{route('register')}}">   <span class="mdc-button__label">Đăng ký</span></a>
                            </button>
                            <button class="mdc-button mdc-button--outlined">
                            <a style="text-decoration:none" href="{{route('register')}}">    <span class="mdc-button__ripple"></span>
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
<form method="POST" action="login/auth">
<main class="mdc-top-app-bar--fixed-adjust">
    <div class="account-wrapper">
        <h2 style="margin-bottom: 20px;">Đăng nhập tài khoản</h2>
        <div class="account-container">
            <div class="c4f-input">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="email">Email</span>
                    <input class="mdc-text-field__input" type="email" placeholder="email">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <div class="c4f-input">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="password">Mật khẩu</span>
                    <input class="mdc-text-field__input" type="password" placeholder="password">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <button class="mdc-button mdc-button--raised" type="submit">
            <input type="hidden" name="_token" id="" value="<?php echo csrf_token() ?>">
                <span class="mdc-button__label">Đăng nhập</span>
                @csrf
            </button>

        </div>
    </div>
</main>
</form>
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