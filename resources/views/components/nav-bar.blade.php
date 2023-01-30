<div>
<div class="account-action">
                        <div class="guest">
                            @if(!(session())
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
                @else
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
               @endif
</div>