<x-layout>
<x-nav></x-nav>

    <div class="container">
        <div class="page_reservation">
            {{-- en-tête reservation confirmation --}}
            <div class="header-admin confirm-reservation">
                <h1>Your package is booked!</h1>
            </div>

            {{-- boucle des résultat de la confirmation reservation --}}
            @foreach ($reservations as $reservation)
            <div class="details">
                <h2>Date <hr></h2>
                <p>From {{ $reservation->arrival}} <br>
                    to {{ $reservation->departure}} </p>
                <h2>Person <hr></h2><p>{{ $reservation->nb_adult }} </p>
                <h2>Price <hr></h2>
                <p>{{ $reservation->total }}$</p>

                {{-- bouton pour effacer la reservation --}}
                <div class="destroy-reservation table-body-cell">
                    <a onclick="return confirm('Are you sure you want to destroy your reservation')" href="/reservation/destroy/{{ $reservation->id }}">
                        <x-buttons.destroy/>
                    </a>
                </div>
            </div>
            @endforeach
            {{-- bouton retour pas d'accueil --}}
            <h2>Have a nice trip!</h2>
                <br>
                <div class="button-box confirm-retour">
                    <a href="{{ url('/activities') }}" class="button">Find activities</a>
                    <a href="{{ url('/') }}" class="button">Back home</a>
                </div>

                {{-- MESSAGES DE CONFIRMATION (FLASH) --}}
                    {{-- reservation validée--}}
                    @if(session('success') != null)
                        <div class="flash fs-6 rounded-3">
                            {{ session('success') }}
                        </div>
                    @endisset
                    {{-- reservation supprimée --}}
                    @if(session('destroy') != null)
                    <div class="flash fs-6 rounded-3">
                        {{ session('destroy') }}
                    </div>
                        @endisset
        </div>

    </div>
    <x-footer></x-footer>
</x-layout>

