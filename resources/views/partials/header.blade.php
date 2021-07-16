
    <header>
        <nav class="main_nav" id="main_nav">

                <div class="main_nav__containter">
                    @auth
                            <a href="{{ url('/') }}" >Home</a>
                        @if (!str_contains(url()->current(), '/profile') )
                            <a href="{{ url('/profile') }}" >My Account</a>
                        @endif

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                        </form>
                    @else
                            <a href="{{ url('/') }}" >Home</a>
                        @if (!str_contains(url()->current(), 'login'))
                            <a href="{{ route('login') }}" >Log in</a>
                        @endif
                        @if (!str_contains(url()->current(), 'register'))
                        <a href="{{ route('register') }}" >Register</a>
                        @endif

                    @endauth
                </div>

        </nav>

           

    </header>

      <script src="{{mix('js/nav.js')}}"></script>

 

  



    