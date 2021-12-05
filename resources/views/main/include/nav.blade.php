<div class="top_menu">
    <div class="container">
        <div class="welcome_mssg hidden-xs">
            Welcome to Friend Resort
        </div>
        <ul class="top_menu_right">
            <li><i class="fa fa-phone"></i><a href="tel:18475555555"> 1-888-123-4567 </a></li>
            <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="mailto:contact@friends-resort.com">contact@friends-resort.com</a></li>

        </ul>
    </div>
</div>

<header>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{--  <a class="navbar-brand light" href="index.html">
                <img src="assets/images/logo_light.svg" height="32" alt="Logo">
            </a>
            <a class="navbar-brand dark nodisplay" href="index.html">
                <img src="assets/images/logo.svg" height="32" alt="Logo">
            </a> --}}
            <a class=" light" href="">
                <img src="{{url('assets/logo.png')}}" alt="Logo" style="height: 80px;" >
            </a>

        </div>
        <nav id="main_menu" class="mobile_menu navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="mobile_menu_title" style="display:none;">MENU</li>
                <li class="dropdown simple_menu active">
                    <a href="{{url('/')}}" >HOME </a>

                </li>

                <li><a href="{{ url('contact') }}">CONTACT US</a></li>

                <li class="menu_button">
                    <a href="{{ url('contact') }}" class="button  btn_yellow"><i class="fa fa-calendar"></i>BOOK ONLINE</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
