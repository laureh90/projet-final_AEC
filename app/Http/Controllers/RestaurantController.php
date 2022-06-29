<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Categorie;
use App\Models\Menu;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    // Récupère les items du menu classés par catégorie
    public function menuPerCategory(){

        return view('menu',[
            'menus1' => Menu::where('category_id',1)->get(),
            'menus2' => Menu::where('category_id',2)->get(),
            'menus3' => Menu::where('category_id',3)->get(),
            'menus4' => Menu::where('category_id',4)->get()
        ]);
    }

    // Récupère le items du menu selon leur catégorie (affiche sous forme de formulaire modifiable)
    public function menuAdmin() {
        return view('admin.menu-admin',[
            'menus1' => Menu::where('category_id',1)->get(),
            'menus2' => Menu::where('category_id',2)->get(),
            'menus3' => Menu::where('category_id',3)->get(),
            'menus4' => Menu::where('category_id',4)->get()
        ]);
    }

    // Récupère les informations modifiées et les persiste
    public function StoreMenuAdminUpdate(MenuRequest $request) {

        $item = Menu::findOrFail($request->id);
        $item->title = $request->title;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->category_id = $request->category_id;

        $item->save();

        return redirect('admin/menu')->with('success', 'The items menu is modified!');
    }

    // Récupère les informations ajoutées et les persiste
    public function storeMenu(MenuRequest $request) {
        $item = New Menu;
        $item->title = $request->title;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->category_id = $request->category_id;

        $item->save();

        return redirect('admin/menu')->with('success', 'This item has been added');
    }

    // supprime l'item du menu par id
    public function menuAdminDestroy($id) {
        Menu::destroy($id);

        return redirect('admin/menu')->with('destroy', 'This item is destroyed');
    }
}



















