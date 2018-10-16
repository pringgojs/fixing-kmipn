<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ url('img/tes.png') }}" alt="" width="230"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                @if(Request::is('/'))
                    @if(!auth()->user())
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="#home">BERANDA</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tentang">TENTANG</a></li>
                                <li class="nav-item"><a class="nav-link" href="#feature">LOMBA</a></li>
                                <li class="nav-item"><a class="nav-link" href="#price">INFORMASI</a>
                                <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">MASUK</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="#home">BERANDA</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tentang">TENTANG</a></li>
                                <li class="nav-item"><a class="nav-link" href="#feature">LOMBA</a></li>
                                <li class="nav-item"><a class="nav-link" href="#price">INFORMASI</a>
                                <li class="nav-item"><a class="nav-link" href="{{ url('profile/dashboard') }}">DASHBOARD</a></li>
                            </ul>
                        </div>
                    @endif
                @else
                    @if(!auth()->user())
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="{{ url('/#home') }}">BERANDA</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/#tentang') }}">TENTANG</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/#feature') }}">LOMBA</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/#price') }}">INFORMASI</a>
                                <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">MASUK</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="{{ url('/#home') }}">BERANDA</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/#tentang') }}">TENTANG</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/#feature') }}">LOMBA</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/#price') }}">INFORMASI</a>
                                <li class="nav-item"><a class="nav-link" href="{{ url('profile/dashboard') }}">DASHBOARD</a></li>
                            </ul>
                        </div>
                    @endif
                @endif
            </div>
        </nav>
    </div>
</header>