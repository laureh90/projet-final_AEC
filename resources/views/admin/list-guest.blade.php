<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
    <title>Guest list</title>
</head>
<body>

    <div class="container">

        {{-- identité admin connecté plus bouton logout admin --}}
        <x-logout-admin></x-logout-admin>

        {{-- en-tête de list-guest --}}
        <div class="header-admin list-guest">
            <h1>Administration</h1>
            <h2>Guest list</h2>
        </div>

        {{-- bouton admin --}}
        <div class="button-box list-guest">
            <a href="/admin/menu" class="button">Menu</a>
            <a href="/admin/reservation" class="button">Reservation</a>
            <a href="/admin/list-admin" class="button">Admin list</a>
            <a href="/admin/post" class="button">Post list</a>
            <a href="/register-admin" class="text-gray-600 button">New admin</a>
        </div>

        {{-- tableau des user guest --}}
        <div class="table">

            {{-- header du tableau --}}
            <div class="table-header">
                <div class="table-header-cell list-admin">Name</div>
                <div class="table-header-cell list-admin">E-mail</div>
                <div class="table-header-cell list-admin">Edit / Cancel</div>
            </div>


            {{-- boucle des résultats list-guest --}}
            <div class="table-body">
                @foreach ($users as $user)
                    <div class="table-row">
                        <div class="table-body-cell">{{ $user->name }}</div>
                        <div class="table-body-cell">{{ $user->email }}</div>
                        <div class="table-body-cell">
                            {{-- bouton pour modifier un admin --}}
                            <a class="edit table-body-cell" href="/admin/list-guest/update/{{ $user->id }}">
                                <x-buttons.edit />
                            </a>
                            {{-- bouton pour effacer un admin --}}
                            <a class="destroy table-body-cell" onclick="return confirm('Are you sure you want to destroy this user guest?')" href="/admin/list-guest/destroy/{{ $user->id }}">
                                <x-buttons.destroy />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- MESSAGES DE CONFIRMATION (FLASH) --}}
        {{-- guest modifié--}}
        @if(session('success') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('success') }}
            </div>
        @endisset
        {{-- guest supprimé --}}
        @if(session('destroy') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('destroy') }}
            </div>
        @endisset

    </div>

</body>
</html>
