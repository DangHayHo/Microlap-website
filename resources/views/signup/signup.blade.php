@extends('pages.head')
@extends('pages.header')
@section('head')
<body>
@section('header')
@endsection

<main class="mdc-top-app-bar--fixed-adjust">
    <div class="account-wrapper">
        <h2>Đăng ký tài khoản miễn phí</h2>
        <span class="form-noted">Thông tin nhập cần chính xác để được hỗ trợ khi cần</span>
        <div class="account-container">
            <div class="c4f-input">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="fullname">Họ tên đầy đủ</span>
                    <input class="mdc-text-field__input" type="text" aria-labelledby="fullname">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <div class="c4f-input">
                <span style="font-size: 13px;color: green; display: block; margin-bottom: 10px;">* Phone cần chính xác để được hỗ trợ khi cần</span>
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="phone">Số điện thoại</span>
                    <input class="mdc-text-field__input" type="text" aria-labelledby="phone">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <div class="c4f-input">
                <span style="font-size: 13px;color: green; display: block; margin-bottom: 10px;">* Email cần chính xác để được hỗ trợ khi cần</span>
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="email">Email</span>
                    <input class="mdc-text-field__input" type="text" aria-labelledby="email">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <div class="c4f-input">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="pass">Mật khẩu</span>
                    <input class="mdc-text-field__input" type="password" aria-labelledby="pass">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <div class="c4f-input">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="pass">Nhập lại mật khẩu</span>
                    <input class="mdc-text-field__input" type="password" aria-labelledby="pass">
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>

            <button class="mdc-button mdc-button--raised">
                <span class="mdc-button__label">Đăng ký</span>
            </button>

        </div>
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