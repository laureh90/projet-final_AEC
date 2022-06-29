{{-- name de l'admin connecté et bouton logout de l'admin --}}
<div class="admin-name-logout">
    <div class="admin-name">{{ Auth::user()->name }}</div>

    @if ( Auth::check() )
        <div class="admin-logout">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    @endif
</div>
