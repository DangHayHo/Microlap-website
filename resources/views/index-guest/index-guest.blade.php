@extends('pages.head')

@extends('pages.header')

@section('head')
<body>

@section('header')


@endsection
<main class="mdc-top-app-bar--fixed-adjust">
@include('index-guest.Title')
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

    @include('index-guest.Khoahoc')

    @include('index-guest.Congdong')
        
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
@endsection