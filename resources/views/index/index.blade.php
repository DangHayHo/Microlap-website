@extends('pages.head')

@section('head')
@endsection
<body>
<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <div class="header-container">
            <div class="header-content">
                <div class="logo">
                    <img src="{{('assets/images/logo.svg')}}" alt="logo" width="40" height="40"/>
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
                                <span class="_3hmsj horizontal-box align-items-absolute-center" 
                                style="width:40px;height:40px;overflow:hidden;border:0px solid #E1E1E1;
                                border-radius:50%;background-color:#3BAFDA;
                                display: flex; align-items: center; justify-content: center;">
                                
                                <svg class="_ufjrdd __web-inspector-hide-shortcut__" style="fill:#FFF;height:24px;width:24px" viewBox="0 0 48 48" role="img" aria-labelledby="UserFilled724acb08-40b3-45b6-d392-56d367b70234 UserFilled724acb08-40b3-45b6-d392-56d367b70234Desc" xmlns="http://www.w3.org/2000/svg"><title id="UserFilled724acb08-40b3-45b6-d392-56d367b70234">User Filled</title><path d="M33.5,10.4C33.7,5.1,29.2,1,24,1s-9.8,4.2-9.5,9.4c0.1,1.1,1.1,6.3,1.1,6.3c0.8,4.5,3.8,8.3,8.4,8.3s7.6-3.8,8.4-8.4C32.4,16.6,33.4,11.4,33.5,10.4z" role="presentation"></path><path d="M47,47H1l1.1-8.2c0.5-2.7,2.9-4.3,5.6-4.9L24,31l16.3,2.9c2.7,0.6,5.1,2.2,5.5,4.9L47,47z" role="presentation"></path></svg></span>
                                <span>Hello, Nguyễn Văn A</span>
                                <i style="color: #333" class="material-icons mdc-button__icon" aria-hidden="true">arrow_drop_down</i>
                            </div>
                            <div class="dropdown-content" id="menu">
                                <ul>
                                    <li><a href="#">Thông tin Profile</a></li>
                                    <li><a href="#">Khóa học của tôi</a></li>
                                    <li><a href="#">Tài khoản VIP</a></li>
                                    <li><a href="#">Đăng xuất</a></li>
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
                        <button class="mdc-button mdc-button--raised">
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
            <img src="{{asset('assets/images/bg_header.jpg')}}" alt="banner"  />
            
                <span class="first-quote">Đường dài vạn dặm bắt đầu từ một bước chân</span>
                <span class="second-quote">Đóng góp vào chất lượng nhân sự CNTT Việt Nam</span>
                <button class="mdc-button mdc-button--raised">
                    <span class="mdc-button__label">Tạo tài khoản miễn phí</span>
                </button>
            </div>
        </div>
    </div>

    <div class="courses">
        <div class="group-title">
            <span class="big-label">Cộng đồng MICROLAP</span>
            <div class="center-line"></div>
        </div>

        <div class="social">
            <div class="yt-social-box">
                <img src="https://www.freeiconspng.com/thumbs/youtube-logo-png/youtube-logo-png-transparent-image-5.png" alt="youtube" />
            </div>
            <div class="fb-social-box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Facebook_Logo_%282015%29_light.svg/1280px-Facebook_Logo_%282015%29_light.svg.png" alt="facebook" />
            </div>
            <div class="qa-social-box">
                <img src="https://www.bikevo.com/img/upload/20171103162915-qa-1024x587.png" alt="qa" />
            </div>
        </div>
     @include('index.Khoahoc')
      <div style="height:70px;"></div>
       
    </div>
</main>
<footer>
    <div class="copyright">©2022 microlap.vn, all rights reserved.</div>
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
