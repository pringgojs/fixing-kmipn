{{--<section class="hero is-transparent is-fullwidth is-fullheight awalan">--}}
    <div class="hero-head">
        <nav class="navbar is-fresh is-transparent " role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/ristekdikti.png') }}" alt="Logo" width="60">
                    </a>
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/pens.png') }}" alt="Logo" width="60">
                    </a>
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/logoHD.png') }}" alt="Logo" width="60">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div  id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="/" class="navbar-item has-text-weight-bold has-text-light">BERANDA</a>
                        <a href="{{ url('tentang') }}" class="navbar-item has-text-weight-bold has-text-light">TENTANG</a>
                        <a href="{{ url('lomba') }}" class="navbar-item has-text-weight-bold has-text-light">LOMBA</a>
                        <a href="{{ url('info') }}" class="navbar-item has-text-weight-bold has-text-light">INFO</a>
                        @if(!auth()->user())
                        <a href="{{ url('login') }}" class="navbar-item has-text-weight-bold has-text-light">
                            <span class="button is-danger is-rounded is-inverted is-outlined">
                                LOGIN
                            </span>
                        </a>
                        @endif
                        @if(auth()->user())
                            <a href="{{ url('profile/dashboard') }}" class="navbar-item has-text-weight-bold has-text-light">DASHBOARD</a>
                            <a href="{{ url('auth/logout') }}" class="navbar-item has-text-weight-bold has-text-light">
                            <span class="button is-danger is-rounded is-inverted is-outlined">
                                LOGOUT
                            </span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
{{--</section>--}}