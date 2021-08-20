        <header class="header fixed">
            <div class="containerr">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-expand-md
                        navbar-light">
                        <a class="navbar-brand" href="#">
                            <div class="img-logo">
                                <p class="text-center">
                                    <img src="{{asset('images/logo.png')}}" alt="fail
                                        image" />
                                </p>
                            </div>
                        </a>
                        <button
                            class="navbar-toggler btn-menu"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false">
                            <span
                                class="navbar-toggler-icon"
                                onclick="showheader()" id="showheader"></span>
                            <span class="my-1
                                mx-1 close fa
                                fa-times" onclick="hideheader()"
                                id="hideheader"></span>
                        </button>
                        <div
                            class="collapse navbar-collapse navbar-menu-div"
                            id="navbarNav">
                            <ul class="navbar-nav nav" role="tablist">
                                <li class="nav-item item-menu">
                                    <a class="nav-link text-center active"
                                        role="tab"
                                        data-toggle="pill"
                                        aria-selected="true"
                                        href="#" onclick="hidenav()">HOME</a>
                                </li>
                                <li class="nav-item item-menu">
                                    <a class="nav-link text-center"
                                        aria-selected="false"
                                        data-toggle="pill"
                                        role="tab"
                                        href="#" onclick="hidenav()">ALL
                                        COURSES</a>
                                </li>
                                <li class="nav-item item-menu list-courses">
                                    <a class="nav-link text-center"
                                        aria-selected="false"
                                        data-toggle="pill"
                                        role="tab"
                                        href="#" onclick="hidenav()">LIST lESSON</a>
                                </li>
                                <li class="nav-item item-menu list-courses">
                                    <a class="nav-link text-center"
                                        aria-selected="false"
                                        data-toggle="pill"
                                        role="tab"
                                        href="#" onclick="hidenav()">LESSON
                                        DETAIL</a>
                                </li>
                                @if (!Auth::check())
                                <li class="nav-item item-menu">
                                    <a class="nav-link text-center"
                                        role="tab"
                                        aria-selected="false"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        data-toggle="pill" href="#">LOGIN/REGISTER
                                    </a>
                                </li>
                                @endif
                                <li class="nav-item item-menu">
                                    <a class="nav-link text-center"
                                        role="tab"
                                        aria-selected="false"
                                        data-toggle="pill"
                                        href="#" onclick="hidenav()">PROFILE</a>
                                </li>
                                @if (Auth::check())
                                <form method="POST" action="{{ route('logout') }}">
                                <li class="nav-item item-menu">
                                    <a class="nav-link text-center"
                                        role="tab"
                                        aria-selected="false"
                                        onclick="hidenav()"
                                        href="/logout">LOGOUT</a>
                                </li>
                                </form>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <div class="frame-login modal fade modal-dialog modal-dialog-centered"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true"
            style="display:none">
            <div class="frame-loginn">
                <div class="modal-dialog">
                    <div class="modal-content content">
                        <div class="login-register">
                            <div id="tabs" class="tabs">
                                <img class="btn btn-secondary button-close"
                                    data-bs-dismiss="modal"
                                    src="{{asset('images/close.png')}}" alt="close">
                                <ul>
                                    <li class="login"><a href="#tabs-login"><p
                                                class="active-tab"
                                                id="login-change"
                                                onclick="login()">LOGIN</p></a></li>
                                    <li class="register"><a
                                            href="#tabs-register"><p
                                                id="register-change"
                                                onclick="register()">REGISTER</p></a></li>
                                </ul>
                                <div class="container tabs-container">
                                    <div id="tabs-login"><br>
                                    <form class="login" method="POST" action="{{route('login')}}">
                                    @csrf
                                        <div class="input">
                                            <label>Username:</label><br>
                                            <input type="email" name="email" class="@error('email') is-invalid @enderror"> <br>
                                        </div>
                                        @error('email')
                                            <div class=" alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="input">
                                            <label>Password:</label><br>
                                            <input type="password"  name="password" class="@error('password') is-invalid @enderror"><br>
                                        </div>
                                        @error('password')
                                            <div class=" alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="login-check">
                                            <input type="checkbox"
                                                class="form-check-input
                                                remember-me-login-checkbox"
                                                id="remember-me-login-checkbox">
                                            <label class="form-check-label
                                                remember-me-label rememberme"
                                                for="remember-me-login-checkbox">
                                                Remember me</label>
                                            <label><a class="forgot" href="">Forgot
                                                    password</a></label><br>
                                        </div>
                                        <div>
                                            <p class="text-center">
                                                <button
                                                    type="submit" class="btn
                                                    btn-primary login-hapo">LOGIN</button>
                                            </p>
                                        </div>
                                        </form>   
                                        <div class="line-login">
                                            <span class="login-with">Login
                                                with</span>
                                        </div>
                                        <p class="text-center">
                                            <button
                                                type="button" class="btn
                                                btn-primary facebook"><img
                                                    class="img-gg"
                                                    src="{{asset('images/google.png')}}"
                                                    alt="facebook"><img
                                                    class="img-gg"
                                                    src="{{asset('images/vectort.png')}}"
                                                    alt="google">
                                                Google</button>
                                        </p>
                                        <p class="text-center">
                                            <button
                                                type="buton" class="btn
                                                btn-primary google"><img
                                                    class="img-fb"
                                                    src="{{asset('images/facebook.png')}}"
                                                    alt="button-facebook">
                                                Facebook</button>
                                        </p>    
                                </div>
                                    <div id="tabs-register">
                                        <br><br>
                                        <form class="login" method="POST" action="{{route('register')}}">
                                        @csrf 
                                            <div class="input user-input"> <label>Username:</label><br>
                                                <input type="text" name="name"class="@error('name') is-invalid @enderror"
                                                ><br>
                                            </div>
                                            @error('name')
                                            <div class=" alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="input"> <label>Email:</label><br>
                                                <input type="email" name="email_user"  class="@error('email_user') is-invalid @enderror"
                                                ><br>
                                            </div>  
                                            @error('email_user')
                                            <div class=" alert-danger">{{ $message }}</div>
                                            @enderror   
                                            <div class="input"> <label>Password:</label><br>
                                                <input type="password" name="password_register" class="@error('password_register') is-invalid @enderror"
                                               ><br>
                                            </div>
                                            @error('password_register')
                                            <div class=" alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="input"> <label>Repeat
                                                    Password:</label><br>
                                                <input type="password" name="password_confirmation"  class="@error('password_confirmation') is-invalid @enderror"
                                                ><br>
                                            </div>
                                            @error('password_confirmation')
                                            <div class=" alert-danger">{{ $message }}</div>
                                            @enderror    
                                            <p class="text-center">
                                                <button
                                                    type="submit" class="btn
                                                    btn-primary login-hapo
                                                    login-registers">Register</button>
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
