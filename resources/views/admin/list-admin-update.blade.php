<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
    <title>Admin list update</title>
</head>
<body>

    <div class="container">

        {{-- identité admin connecté plus bouton logout admin --}}
        <x-logout-admin></x-logout-admin>

        {{-- en-tête de list-admin-update --}}
        <div class="header-admin list-admin-update">
            <h1>Administration</h1>
            <h2>Admin list Update</h2>
        </div>

        {{-- bouton admin --}}
        <div class="button-box list-admin-update">

            <a href="/admin/menu" class="button">Menu</a>
            <a href="/admin/reservation" class="button">Reservation</a>
            <a href="/admin/list-guest" class="button">Guest list</a>
            <a href="/admin/post" class="button">Post list</a>
            <a href="/admin/list-admin" class="button">Back</a>
        </div>
             {{-- message Laravel d'erreur --}}
             @if($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
             @endif

        {{-- tableau des admins a modifier --}}
        <div class="table">
            {{-- header du tableau --}}
            <div class="table-header">
                <div class="table-header-cell list-admin-update">Name</div>
                <div class="table-header-cell list-admin-update">E-mail</div>
                <div class="table-header-cell list-admin-update">Password</div>
                <div class="table-header-cell list-admin-update">Category</div>
            </div>

        </div>
            <div class="form-admin-update">
                <form action="/admin/list-admin/update" method="POST">
                @csrf
                    <input class="champs" type="text" name="name" value="{{ $admins->name }}">
                    <input class="champs" type="email" name="email" value="{{ $admins->email }}">
                    <input class="champs" type="password" name="password">
                    <input class="champs-category" type="text" name="category" value="{{ $admins->category }}">
                    <input type="hidden" name="id" value="{{ $admins->id }}">
                    <input class="button-submit" type="submit" name="submit" value="Apply">
                </form>
            </div>

    </div>

</body>
</html>
