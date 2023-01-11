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
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Khóa học</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Hợp tác</a></li>
                        </ul>
                    </div>
                    <div class="account-action">
                        <div class="guest">
                            <button style="margin-right: 10px;" class="mdc-button mdc-button--outlined">
                                <span class="mdc-button__label">Đăng ký</span>
                            </button>
                            <button class="mdc-button mdc-button--outlined">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Đăng nhập</span>
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
@yield('header')