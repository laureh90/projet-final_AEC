<x-layout>
    <link rel="stylesheet" href="{{ asset('css/css-package-stairway/styles.css') }}">

    {{-- barre de navigation --}}
    <x-nav></x-nav>

         {{-- section titre forfait --}}
        <div class="header-picture-package">
            <p> {{ strtoupper($packages->title) }}</p>

            {{-- message d'erreur Laravel--}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <p>Oops!</p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif

            {{-- formulaire de réservation --}}
            <form action="{{ url('/reservation') }}" method="POST">
                @csrf
                <div class="arrival">
                    <label for="arrival">Arrival</label>
                    <input name="arrival" type="date"/>
                </div>
                <div class="departure">
                    <label for="departure">Departure</label>
                    <input name="departure" type="date" >
                </div>
                <div class="adult">
                    <label for="nb_adult">
                        <img src="images/iconplus.png" alt="">
                    </label>
                    <input name="nb_adult" type="number" min="0" >
                </div>
                {{-- id pour etre associé au bon package --}}
                <input type="hidden" name="package_id" value="{{ $packages->id }}">
                <input type="submit" value="BOOK NOW">
            </form>
        </div>

        {{-- description chambre/activité --}}
        <div id="app_packages" v-cloak>
            <div class="main_package-stairway">
                {{-- room --}}
                <div class="description-room" :class="{ouvert: classe_active1}">
                    <div class="room1">
                        <img src="images\room-stairway.jpg" alt="room1">
                    </div>
                    <div class="text">
                        <p>DELUXE ROOM</p>
                        <p>{{ $packages->room_description }}</p>
                        <div class="convenience">
                            <p>{{ $packages->convenience }}</p>
                        </div>
                        <div class="price">
                            <p> ${{ $packages->price }}</p><p>/night</p>
                        </div>
                    </div>
                </div>
                {{-- activité --}}
                <div class="description-package-stairway" :class="{ouvert1: classe_active2}">
                    <div class="room2" >
                        <img src="images\stairwaytoheaven.jpg" alt="room1">
                    </div>
                    <div class="text2">
                        <p> {{ strtoupper($packages->title) }}</p>
                        <p>Find the see treasure</p>
                        <p>{{ $packages->package_description }}</p>
                        <button>
                            <a href="{{ url('/activities') }}">See more details</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
{{-- script pour la transition des image --}}
<script src="js/package-hotel-transition.js"></script>

{{-- bas de page --}}
<x-footer></x-footer>

