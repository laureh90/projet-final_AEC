<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
    <title>Admin list</title>
</head>
<body>

    <div class="container">

        {{-- identité admin connecté plus bouton logout admin --}}
        <x-logout-admin></x-logout-admin>

        {{-- en-tête de list-admin --}}
        <div class="header-admin list-admin">
            <h1>Administration</h1>
            <h2>Admin list</h2>
        </div>

        {{-- bouton admin --}}
        <div class="button-box list-admin">
            <a href="/admin/menu" class="button">Menu</a>
            <a href="/admin/reservation" class="button">reservation</a>
            <a href="/admin/list-guest" class="button">Guest list</a>
            <a href="/admin/post" class="button">Post list</a>
            <a href="/register-admin" class="text-gray-600 button">New admin</a>
        </div>

        {{-- tableau des admins --}}
        <div class="table">

            {{-- header du tableau --}}
            <div class="table-header">
                <div class="table-header-cell list-admin">Name</div>
                <div class="table-header-cell list-admin">E-mail</div>
                <div class="table-header-cell list-admin">Edit / Cancel</div>
            </div>

            {{-- boucle des résultats list-admin --}}
            <div class="table-body">
                @foreach ($admins as $admin)
                    <div class="table-row">
                        <div class="table-body-cell">{{ $admin->name }}</div>
                        <div class="table-body-cell">{{ $admin->email }}</div>

                        {{-- bouton edit et destroy --}}
                        <div class="table-body-cell">
                            {{-- bouton pour modifier un admin --}}
                            <a class="edit table-body-cell" href="/admin/list-admin/update/{{ $admin->id }}">
                                <x-buttons.edit />
                            </a>
                            {{-- bouton pour effacer un admin --}}
                            <a class="destroy table-body-cell" onclick="return confirm('Are you sure you want to destroy this admin?')" href="/admin/list-admin/destroy/{{ $admin->id }}">
                                <x-buttons.destroy />
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- MESSAGES DE CONFIRMATION (FLASH) --}}
        {{-- admin modifié--}}
        @if(session('success') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('success') }}
            </div>
        @endisset
        {{-- admin supprimé --}}
        @if(session('destroy') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('destroy') }}
            </div>
        @endisset

    </div>

</body>
</html>
