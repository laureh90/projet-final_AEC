<header>

    <div class="nav-bar">
        <a href="/"><div class="logo"><img src="images/logo_horizon2.png" alt=""></div></a>
        <div class="nav-link">


            <a href="{{ url('/#header-package') }}">PACKAGES</a>
            <a href="{{ url('/activities') }}">ACTIVITIES</a>
            <a href="{{ url('/#header-restaurant') }}">RESTAURANTS</a>
            <a href="{{ url('/#gallery') }}">GALLERY</a>
            <a href="{{ url('/news') }}">NEWS</a>
            <a href="{{ url('/#about') }}">ABOUT</a>
            <a href="{{ url('/#contact') }}">CONTACT</a>
        </div>

        <div class="login">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="gray" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>

              <!-- Responsive Navigation Menu -->
              @if ( !Auth::check() )
              <a href="{{ url('/login') }}">LOGIN</a>
              @endif

              @if ( Auth::check() )
              <x-responsive-nav-link :href="route('reservation')">
                  {{ __('My account') }}
              </x-responsive-nav-link>
              @endif

            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

                <!-- Responsive Settings Options -->
                @if ( !Auth::check() )
                @else
                {{-- <div>{{ Auth::user()->name }}</div> --}}
                @endif
                @if ( Auth::check() )
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
