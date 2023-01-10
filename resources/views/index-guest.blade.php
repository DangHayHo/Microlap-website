<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
    <title>MICROLAP | Học Lập Trình</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{asset('assets/css/material-components-web.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/material-components-web.min.js')}}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
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
                    <span class="mdc-button__label">Tạo tài khoản miễn phí</span>
                </button>
            </div>
        </div>
    </div>
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

        <div class="group-title">
            <span class="big-label">Khóa học sẵn sàng</span>
            <div class="center-line"></div>
        </div>

        <div class="mdc-card">
            <div class="course-item">
                <div class="course-item__left-container">
                    <div class="course-item__left-container thumbnail">
                        <img src="https://storage.googleapis.com/cms-storage-bucket/75c5b74c32dfd7b7e8f3.jpg" alt="course-name"/>
                    </div>
                    <button class="mdc-button mdc-button--outlined">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Xem chi tiết</span>
                    </button>
                    <button class="mdc-button mdc-button--raised">
                        <span class="mdc-button__label">Mua khóa học</span>
                    </button>

                    <div class="course-price">
                        <span style="font-weight: bold;">Giá: 650.000 VNĐ</span>
                    </div>
                </div>
                <div class="course-item__right-container">
                    <div class="class-basic-info">
                        <div class="course-type flutter"><h3>Mobile Development</h3></div>
                        <div class="course-name"><a href="#"><h2>Làm chủ Flutter - Học từ Zero tới Hero</h2></a></div>
                        <div class="course-des"><p>Khóa học Xây dựng mobile app với Flutter Framework, khóa học này sẽ phù hợp với những anh em lần đầu làm quen với Flutter. Tại đây anh em sẽ được cung cấp những khái nhiêm cốt lõi nền tảng của Flutter để từ đó tự xây dựng được một ứng dụng mobile hoàn chỉnh.</p></div>
                    </div>
                    <div class="course-statictis">
                        <div class="course-statictis__level">
                            <i class="material-icons mdc-icon-button__icon">signal_cellular_alt</i>
                            <span>Cho người mới bắt đầu</span>
                        </div>
                        <div class="course-statictis__videos">
                            <i class="material-icons mdc-icon-button__icon">videocam</i>
                            <span>40 videos</span>
                        </div>
                        <div class="course-statictis__student">
                            <i class="material-icons mdc-icon-button__icon">groups</i>
                            <span>100 Học viên</span>
                        </div>
                    </div>
                    <div class="class-extends-info">
                        <div class="class-extends-info-item">
                            <div class="course-skill"><h3>Kỹ năng học được</h3></div>
                            <div class="course-skill-des"><p>Flutter basic, State management</p></div>
                        </div>

                        <div class="class-extends-info-item">
                            <div class="course-skill-require"><h3>Kiến thức nên biết trước khi tham gia</h3></div>
                            <div class="course-skill-require-des"><p>Flutter basic, State management</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mdc-card">
            <div class="course-item">
                <div class="course-item__left-container">
                    <div class="course-item__left-container thumbnail">
                        <img src="https://fingers-site-production.s3.eu-central-1.amazonaws.com/uploads/images/NYgf3QgEdUpHTR7YIYacJanBU3JEeDxmIKGOUKcD.jpg" alt="course-name"/>
                    </div>
                    <button class="mdc-button mdc-button--outlined">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Xem chi tiết</span>
                    </button>
                    <button class="mdc-button mdc-button--raised">
                        <span class="mdc-button__label">Mua khóa học</span>
                    </button>

                    <div class="course-price">
                        <span style="font-weight: bold;">Giá: 650.000 VNĐ</span>
                    </div>
                </div>
                <div class="course-item__right-container">
                    <div class="class-basic-info">
                        <div class="course-type golang"><h3>Backend</h3></div>
                        <div class="course-name"><a href="#"><h2>Xây dựng Backend hiệu năng cao với Golang</h2></a></div>
                        <div class="course-des"><p>Khóa học Xây dựng mobile app với Flutter Framework, khóa học này sẽ phù hợp với những anh em lần đầu làm quen với Flutter. Tại đây anh em sẽ được cung cấp những khái nhiêm cốt lõi nền tảng của Flutter để từ đó tự xây dựng được một ứng dụng mobile hoàn chỉnh.</p></div>
                    </div>
                    <div class="course-statictis">
                        <div class="course-statictis__level">
                            <i class="material-icons mdc-icon-button__icon">signal_cellular_alt</i>
                            <span>Cho người mới bắt đầu</span>
                        </div>
                        <div class="course-statictis__videos">
                            <i class="material-icons mdc-icon-button__icon">videocam</i>
                            <span>40 videos</span>
                        </div>
                        <div class="course-statictis__student">
                            <i class="material-icons mdc-icon-button__icon">groups</i>
                            <span>100 Học viên</span>
                        </div>
                    </div>
                    <div class="class-extends-info">
                        <div class="class-extends-info-item">
                            <div class="course-skill"><h3>Kỹ năng học được</h3></div>
                            <div class="course-skill-des"><p>Flutter basic, State management</p></div>
                        </div>

                        <div class="class-extends-info-item">
                            <div class="course-skill-require"><h3>Kiến thức nên biết trước khi tham gia</h3></div>
                            <div class="course-skill-require-des"><p>Flutter basic, State management</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        
        <div style="height: 70px;"></div>
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