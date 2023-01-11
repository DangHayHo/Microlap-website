@extends('shares.head')
@section('head')
<body>

<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <div class="header-container">
            <div class="header-content">
                <div class="logo">
                    <span>CODE4FUNC</span>
                </div>
                <div class="menu-desktop">
                    <div class="menu">
                        <ul>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Khóa học</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Hợp tác</a></li>
                        </ul>
                    </div>
                    <div class="account-action">
                        <div class="guest" style="display: none">
                            <button class="mdc-button mdc-button--outlined">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Đăng nhập</span>
                            </button>

                            <button class="mdc-button mdc-button--raised">
                                <span class="mdc-button__label">Đăng ký</span>
                            </button>
                        </div>

                        <div class="account-dropdown">
                            <div class="avatar" id="avatar-box">
                                <img width="30" height="30" src="https://www.kindpng.com/picc/m/206-2060399_discord-png-avatar-anime-transparent-png.png" alt="avatar"/>
                                <span>Hello, Nguyễn Văn A</span>
                                <i style="color: black" class="material-icons mdc-button__icon" aria-hidden="true">arrow_drop_down</i>
                            </div>
                            <div class="dropdown-content" id="menu">
                                <ul>
                                    <li><a href="{{route('client')}}">Thông tin Profile</a></li>
                                    <li><a href="{{route('course')}}">Khóa học của tôi</a></li>
                                    <li><a href="#">Tài khoản VIP</a></li>
                                    <li><a href="{{route('client')}}">Đăng xuất</a></li>
                                </ul>
                            </div>
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
    <div class="settings-wrapper">
        <div class="settings-container">
        <div class="sidebar" style="display: flex; flex-direction: column; height: 100%">
            <ul>
                <li><a href="{{route('profile')}}">Thông tin Profile</a></li>
                <li><a href="{{route('course')}}">Khóa học của tôi</a></li>
                <li><a href="{{route('login')}}">Đổi mật khẩu</a></li>
            </ul>
        </div>
        <div class="content" style="display: flex; flex-direction: column; height: 100%">
            <div class="setting-heading">
                <i style="color: black" class="material-icons mdc-button__icon" aria-hidden="true">perm_identity</i>
                <h2>Thông tin Profile</h2>
            </div>

            <label class="mdc-text-field mdc-text-field--filled">
                <span class="mdc-text-field__ripple"></span>
                <span class="mdc-floating-label" id="fullname">Họ Tên</span>
                <input class="mdc-text-field__input" type="text" aria-labelledby="fullname">
                <span class="mdc-line-ripple"></span>
            </label>
            <label class="mdc-text-field mdc-text-field--filled">
                <span class="mdc-text-field__ripple"></span>
                <span class="mdc-floating-label" id="phone">Số Điện Thoại</span>
                <input class="mdc-text-field__input" type="text" aria-labelledby="phone">
                <span class="mdc-line-ripple"></span>
            </label>
            <label class="mdc-text-field mdc-text-field--filled">
                <span class="mdc-text-field__ripple"></span>
                <span class="mdc-floating-label" id="email">Email</span>
                <input class="mdc-text-field__input" type="text" aria-labelledby="email">
                <span class="mdc-line-ripple"></span>
            </label>
        </div>
    </div>
    </div>
</main>

<footer>
    <div class="copyright">Code4Func.com © 2022</div>
</footer>
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