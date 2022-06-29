
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="container">

        {{-- identité admin connecté plus bouton logout admin --}}
        <x-logout-admin></x-logout-admin>

        {{-- en-tête de admin-reservation --}}
        <div class="header-admin reservation">
            <h1>ADMINISTRATION</h1>
            <h2>Reservations</h2>
        </div>

        {{-- bouton admin --}}
        <div class="button-box reservation">
            <a href="{{ url('/admin/menu') }}" class="button">Menu</a>
            <a href="/admin/list-admin" class="button">Admin list</a>
            <a href="/admin/list-guest" class="button">Guest list</a>
            <a href="/admin/post" class="button">Post list</a>
            <a href="/register-admin" class="text-gray-600 button">New admin</a>
        </div>

        {{-- tableau des reservations --}}
        <div class="table">

            {{-- header du tableau --}}
            <div class="table-header">
                <div class="table-header-cell">Reservation date</div>
                <div class="table-header-cell">Guest name</div>
                <div class="table-header-cell">E-mail</div>
                <div class="table-header-cell">Cancel</div>
            </div>

            {{-- boucle des résultats admin reservation--}}
            <div class="table-body">
                @foreach ($reservations as $reservation)
                    <div class="table-row">
                        <div class="table-body-cell">{{ $reservation->arrival }}</div>
                        <div class="table-body-cell">{{ $reservation->user->name }}</div>
                        <div class="table-body-cell">{{ $reservation->user->email }}</div>

                        {{-- bouton pour effacer la reservation --}}
                        <div class="destroy-reservation table-body-cell">
                            <a onclick="return confirm('Are you sure you want to destroy this reservation?')" href="/admin/reservation/destroy/{{ $reservation->id }}"><x-buttons.destroy /></a>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>

        {{-- MESSAGES DE CONFIRMATION (FLASH) --}}
        {{-- reservation supprimée --}}
        @if(session('destroy') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('destroy') }}
            </div>
        @endisset

    </div>

</body>
</html>

