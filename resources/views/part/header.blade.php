<header id="header-container">
    <!-- Header -->
    <div id="header">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{route("index")}}"><img src="{{asset("images/logo.svg")}}" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a href="{{route("index")}}">Home</a>

                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                        @if(!Auth::guard()->check())
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="{{route("login")}}">Login</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                        @endif
                        @if(Auth::guard("vendor")->check())
                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="{{route("add-space")}}" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                        @endif
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            @if(Auth::guard("vendor")->check())
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{route("add-space")}}" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                </div>
                <!-- Header Widget / End -->
            </div>
            @endif
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->
            @if(Auth::guard()->check())
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="{{asset("images/testimonials/ts-1.jpg")}}" alt=""></span>Hi, Mary!
                </div>
                <ul>
                    <li><a href="{{route("profile")}}"> Edit profile</a></li>
                    @if(Auth::guard("vendor")->check())
                    <li><a href="{{("add-space")}}"> Add Property</a></li>
                    @endif
                    <li><a href="{{route("change-password")}}"> Change Password</a></li>
                    <li><a href="{{route("logout")}}">Log Out</a></li>
                </ul>
            </div>
        @endif
            <!-- Right Side Content / End -->

            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                @if(!Auth::guard()->check())
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="{{route("login")}}">Sign In</a></div>
                </div>
                @endif
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
