
    <header>
        <nav class="main_nav" id="main_nav">

                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
                        @if (!str_contains(url()->current(), '/profile') )
                            <a href="{{ url('/profile') }}" class="text-sm text-gray-700 underline">My Account</a>
                        @endif

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
                        @if (!str_contains(url()->current(), 'login'))
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                        @endif
                        @if (!str_contains(url()->current(), 'register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif

                    @endauth
                </div>

        </nav>

           

    </header>

      <script src="{{mix('js/nav.js')}}"></script>

 

  



    