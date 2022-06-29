<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('css/css-menu/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
</head>
<body>

    <div class="container">

        {{-- identité admin connecté plus bouton logout admin --}}
        <x-logout-admin></x-logout-admin>

        {{-- en-tête de Post admin --}}
        <div class="header-admin post-admin">
            <h1>Administration</h1>
            <h2>Post Admin</h2>
        </div>

        {{-- bouton post-admin --}}
        <div class="button-box post-admin">
            <a href="/admin/reservation" class="button">Reservation</a>
            <a href="/admin/list-admin" class="button">Admin list</a>
            <a href="/admin/list-guest" class="button">Guest list</a>
            <a href="/admin/menu" class="button">Menu</a>
            <a href="/register-admin" class="text-gray-600 button">New admin</a>
        </div>

        {{-- section ajoute nouvelle publication --}}
        <div class="header">
            <h2>Add item</h2>
        </div>

        {{-- formulaire d'ajout d'une nouvelle publication --}}
        <div class="form-post">
            <form action="/admin/post/store" method="POST" enctype="multipart/form-data">
            @csrf
                <label for="title">Title</label>
                <input class="champs" type="text" name="title" required>
                <label for="description">Description</label>
                <textarea class="champs-textarea" name="description" cols="30" rows="10"></textarea>
                <label for="prive">Date Post</label>
                <input class="champs" type="date" name="date_post" required>
                <!-- Pour modifier l'apparence du bouton d'upload (visibility hidden) -->
                <label for="image" class="bouton">Click here to add image</label>
                <input type="file" id="image" name="image" style="visibility: hidden;">
                <input class="button-submit" type="submit" name="submit" value="Apply">
            </form>
        </div>

        {{--  --}}
        <div class="header">
             <h2>Post list</h2>
        </div>

            {{-- section modifier publication --}}
            <div class="section1">
                {{-- bouble publcication--}}
                @foreach($posts as $post)
                <div class="bloc">
                    {{-- formulaire publications--}}
                    <form action="/admin/post/update" method="POST">
                        @csrf
                        <div>
                            <input class="champs" type="text" name="title" value="{{ $post->title }}">
                        </div>
                        <input class="champs" type="date" name="date_post" value="{{ $post->date_post }}">
                        <div>
                            <textarea class="champs-textarea" name="description" cols="30" rows="10">
                                {{ $post->description }}
                            </textarea>
                        </div>
                        <input type="hidden" name="id" value="{{ $post->id }}">
                        <div>
                            <input class="button-submit" type="submit" name="submit" value="Apply">
                        </div>
                    </form>

                    {{-- bouton destroy item --}}
                    <a class="destroy-button" onclick="return confirm('Are you sure you want to destroy this post?')" href="/admin/post/destroy/{{ $post->id }}">
                        <x-buttons.destroy />
                    </a>

                </div>
                @endforeach
            </div>

        {{-- MESSAGES DE CONFIRMATION (FLASH) --}}
        {{-- item modifié--}}
        @if(session('success') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('success') }}
            </div>
        @endisset

        {{-- item supprimé --}}
        @if(session('destroy') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('destroy') }}
            </div>
        @endisset

    </div>

</body>
</html>
