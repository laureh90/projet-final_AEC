<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdmidRequest;
use App\Http\Requests\GuestRequest;
use App\Http\Requests\ReservationRequest;
use App\Models\Package;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HotelController extends Controller
{

    //forfait discovery
    public function packageOne() {
        return view('packages.discovery', [
            'packages' => Package::where('title', 'discovery')->first()
        ]);

    }

    // forfait straiway
    public function packageTwo() {
        return view('packages.stairway', [
            'packages' => Package::where('title', 'stairway to heaven')->first()
        ]);

    }

    // forfait gourmet
    public function packageThree() {
        return view('packages.gourmet', [
            'packages' => Package::where('title', 'gourmet')->first()
        ]);

    }

    // confirmation reservation client ajout dans BDD
    public function storeReservation(ReservationRequest $request) {


        if(Auth::check()){
            $this->saveReservation($request->arrival, $request->departure, $request->nb_adult, $request->package_id);

            return redirect('/reservation')->with('success', 'Your reservation is applied');

        }else{
            $request->session()->put('arrival', $request->arrival);
            $request->session()->put('departure', $request->departure);
            $request->session()->put('nb_adult', $request->nb_adult);
            $request->session()->put('package_id', $request->package_id);
            return redirect('/login');
        }

    }

    // Calcule le nombre de jour avec le nn de personne et le prix du forfait
    public function saveReservation($arrival, $departure, $nb_adult, $package_id) {
        $reservation = new Reservation;

        $reservation->arrival = $arrival;
        $reservation->departure = $departure;
        $reservation->nb_adult = $nb_adult;

        $date1 = $arrival;
        $date2 = $departure;

        $diff = abs(strtotime($date2)- strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        $total_day = $days;

        $package_price = Package::find($package_id)->price;

        $total_reservation = $total_day * $nb_adult * $package_price;

        $reservation->total = $total_reservation;
        $reservation->package_id = $package_id;
        $reservation->user_id = auth()->user()->id;
        $reservation->save();
    }

    // supprime la réservation du client par id
    public function UserReservationDestroy($id) {
        Reservation::destroy($id);

        return redirect('/reservation')->with('destroy', 'The reservation is destroyed');
    }

    /** Accueil:
     *  Condition: Si pas de session et pas connecté retour a page d'accueil
     *  Sinon récupère la session et retour la page réservation (complèté)
     */
    public function accueil() {

        if(session('arrival') == null || !Auth::check()){

            return view('home');
        }else{
            $this->saveReservation(session('arrival'), session('departure'), session('nb_adult'), session('package_id'));

            session()->forget('arrival');
            session()->forget('departure');
            session()->forget('nb_adult');
            session()->forget('package_id');

            return redirect('/reservation')->with('success', 'Your reservation is applied');
        }


    }

    // affiche la reservation du client
    public function index() {

        return view('confirm-reservation',[
            'reservations' => Reservation::where('user_id', auth()->user()->id )->get(),
            ]);

    }

    // affiche la liste des réservations des clients(section admin)
    public function reservation() {

        return view('admin.list-reservation',[
            'reservations' => Reservation::All()->sortBy('arrival'),
            ]);

    }

    // supprime la réservation du client par id
    public function destroyReservation($id) {
        Reservation::destroy($id);

        return redirect('admin/reservation')->with('destroy', 'The reservation is destroyed');
    }

    // afficher la liste des administrateurs
    public function listeAdmin() {
        return view('admin.list-admin', [
            'admins' => User::where('category', 1)->get(),
        ]);
    }

    // retourne le formulaire pré-rempli à modifié list-admin
    public function listeAdminUpdate($id) {
        return view('admin.list-admin-update',[
            'admins' => User::find($id),
        ]);
    }

    // Récupère les informations du formulaire modifié et les persiste
    public function storeListeAdminUpdate(AdmidRequest $request) {
        $list = User::findOrFail($request->id);
        $list->name = $request->name;
        $list->email = $request->email;
        $list->password = Hash::make($request->password);
        $list->category = $request->category;

        $list->save();

        return redirect('admin/list-admin/')->with('success', 'The admin is modified!');
    }

    // supprime le user admin par id
    public function listeAdminDestroy($id) {
        User::destroy($id);

        return redirect('admin/list-admin')->with('destroy', 'This admin is destroyed');
    }

    // afficher la liste des clients inscrit
    public function listeGuest() {
        return view('admin.list-guest', [
            'users' => User::where('category', 2)->get(),
        ]);
    }

    // retourne le formulaire pré-rempli à modifié list-guest
    public function listeGuestUpdate($id) {
        return view('admin.list-guest-update',[
            'users' => User::find($id),
        ]);
    }

    // Récupère les informations du formulaire modifié et les persiste
    public function StoreListeGuestUpdate(GuestRequest $request) {
        $list = User::findOrFail($request->id);
        $list->name = $request->name;
        $list->email = $request->email;
        $list->password = Hash::make($request->password);
        $list->category = $request->category;

        $list->save();

        return redirect('admin/list-guest/')->with('success', 'This guest is modified!');
    }

    // supprime le user guest par id
    public function listeGuestDestroy($id) {
        User::destroy($id);

        return redirect('admin/list-guest')->with('destroy', 'This guest is destroyed');
    }


}
