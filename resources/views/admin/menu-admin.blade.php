<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/css-menu/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
</head>
<body>

    <div class="container">

        {{-- identité admin connecté plus bouton logout admin --}}
        <x-logout-admin></x-logout-admin>

        {{-- en-tête du menu admin --}}
        <div class="header-admin list-admin">
            <h1>Administration</h1>
            <h2>Menu Admin</h2>
        </div>

        {{-- bouton admin --}}
        <div class="button-box list-admin">
            <a href="/admin/reservation" class="button">Reservation</a>
            <a href="/admin/list-admin" class="button">Admin list</a>
            <a href="/admin/list-guest" class="button">Guest list</a>
            <a href="/admin/post" class="button">Post list</a>
            <a href="/register-admin" class="text-gray-600 button">New admin</a>
        </div>

        {{-- section ajoute nouvelle item --}}
        <div class="header">
            <h2>Add item</h2>
        </div>

        {{-- formulaire d'ajout d'une nouvelle item au menu --}}
        <div class="form-menu">
            <form action="/admin/menu/store" method="POST">
            @csrf
                <label for="title">Title</label>
                <input class="champs" type="text" name="title" required>
                <label for="prive">Price</label>
                <input class="champs" type="text" name="price" required>
                <label for="description">Description</label>
                <textarea class="champs-textarea" name="description" cols="30" rows="10"></textarea>
                <label for="Category-id">Category</label>
                <input class="champs-category" type="text" name="category_id" required>
                <input class="button-submit" type="submit" name="submit" value="Apply">
            </form>
        </div>

        {{-- section Poke bowl --}}
        <div class="header">
             <h2>Poke bowl</h2>
        </div>

        <div class="section1">
            {{-- bouble menu categorie 1 --}}
            @foreach($menus1 as $menus)
            <div class="bloc">
                {{-- formulaire items categorie 1 --}}
                <form action="/admin/menu/update" method="POST">
                    @csrf
                    <div>
                        <input class="champs" type="text" name="title" value="{{ $menus->title }}">
                    </div>
                    <input class="champs" type="text" name="price" value="{{ $menus->price }}">
                    <div>
                        <textarea class="champs-textarea" name="description" cols="30" rows="10">
                            {{ $menus->description }}
                        </textarea>
                    </div>
                    <input class="champs-category" type="text" name="category_id" value="{{ $menus->category_id }}">
                    <input type="hidden" name="id" value="{{ $menus->id }}">
                    <div>
                        <input class="button-submit" type="submit" name="submit" value="Apply">
                    </div>
                </form>

                {{-- bouton destroy item --}}
                <a class="destroy-button" onclick="return confirm('Are you sure you want to destroy this item?')" href="/admin/menu/destroy/{{ $menus->id }}">
                    <x-buttons.destroy />
                </a>

            </div>
            @endforeach
        </div>

        {{-- section Sushi --}}
        <div class="header">
            <h2>Sushi</h2>
        </div>

        <div class="section2">
            {{-- boucle menu categorie 2 --}}
            @foreach($menus2 as $menus)
            <div class="bloc">
                {{-- formulaire items categorie 2 --}}
                <form action="/admin/menu/update" method="POST">
                    @csrf
                    <div>
                        <input class="champs" type="text" name="title" value="{{ $menus->title }}">
                    </div>
                    <input class="champs" type="text" name="price" value="{{ $menus->price }}">
                    <div>
                        <textarea class="champs-textarea" name="description" cols="30" rows="10">
                            {{ $menus->description }}
                        </textarea>
                    </div>
                    <input class="champs-category" type="text" name="category_id" value="{{ $menus->category_id }}">
                    <input type="hidden" name="id" value="{{ $menus->id }}">
                    <div>
                        <input class="button-submit" type="submit" name="submit" value="Apply">
                    </div>
                </form>
                {{-- bouton destroy item --}}
                <a class="destroy-button" onclick="return confirm('Are you sure you want to destroy this item?')" href="/admin/menu/destroy/{{ $menus->id }}">
                    <x-buttons.destroy />
                </a>
            </div>
            @endforeach
        </div>

        {{-- section Salade --}}
        <div class="header">
            <h2>Salad</h2>
        </div>

        <div class="section3">
            {{-- boucle menu categorie 3 --}}
            @foreach($menus3 as $menus)
            <div class="bloc">
                {{-- formulaire item categorie 3 --}}
                <form action="/admin/menu/update" method="POST">
                    @csrf
                    <div>
                        <input class="champs" type="text" name="title" value="{{ $menus->title }}">
                    </div>
                    <input class="champs" type="text" name="price" value="{{ $menus->price }}">
                    <div>
                        <textarea class="champs-textarea" name="description" cols="30" rows="10">
                            {{ $menus->description }}
                        </textarea>
                    </div>
                    <input class="champs-category" type="text" name="category_id" value="{{ $menus->category_id }}">
                    <input type="hidden" name="id" value="{{ $menus->id }}">
                    <div>
                        <input class="button-submit" type="submit" name="submit" value="Apply">
                    </div>
                </form>
                {{-- bouton destroy item --}}
                <a class="destroy-button" onclick="return confirm('Are you sure you want to destroy this item?')" href="/admin/menu/destroy/{{ $menus->id }}">
                    <x-buttons.destroy />
                </a>
            </div>
            @endforeach
        </div>

        {{-- section Boisson --}}
         <div class="header">
            <h2>Drink</h2>
         </div>

        <div class="section4">
            {{-- boucle menu categorie 4 --}}
            @foreach($menus4 as $menus)
            <div class="bloc">
                {{-- formulaire items categorie 4 --}}
                <form action="/admin/menu/update" method="POST">
                    @csrf
                    <div>
                        <input class="champs" type="text" name="title" value="{{ $menus->title }}">
                    </div>
                    <input class="champs" type="text" name="price" value="{{ $menus->price }}">
                    <div>
                        <textarea class="champs-textarea" name="description" cols="30" rows="10">
                            {{ $menus->description }}
                        </textarea>
                    </div>
                    <input class="champs-category" type="text" name="category_id" value="{{ $menus->category_id }}">
                    <input type="hidden" name="id" value="{{ $menus->id }}">
                    <div>
                        <input class="button-submit" type="submit" name="submit" value="Apply">
                    </div>
                </form>
                {{-- bouton destroy item --}}
                <a class="destroy-button" onclick="return confirm('Are you sure you want to destroy this item?')" href="/admin/menu/destroy/{{ $menus->id }}">
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
