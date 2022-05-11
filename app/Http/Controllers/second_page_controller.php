<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\terrain;
use App\Models\immobilier;
use App\Models\service;
use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class second_page_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['first_page']]);
    }

    public function appartement()
    {
        return view('second_page.appartement');
    }

    public function maisson_villa()
    {
        return view('second_page.maisson_villa')->with(Request('category'));
    }

    public function magasin()
    {
        return view('second_page.magasin')->with(Request('category'));
    }

    public function terrain_ferme()
    {
        return view('second_page.terrain_ferme')->with(Request('category'));
    }

    public function user()
    {
        $les_annonce = annonce::all();
        $annonce = array();
        $user = User::find(Request('userID'));
        $i = 0;
        $bein_category = array();
        foreach($les_annonce as $an){
            if($an['user_ID'] == $user['id']){
                $bein_type = $an['bein_type'];
                if($bein_type == "immoblier")
                    $bein_category[$i] = immobilier::find($an['bein_ID'])['category'];
    
                if($bein_type == "terrain")
                    $bein_category[$i] = terrain::find($an['bein_ID'])['category'];
        
                if($bein_type == "service")
                    $bein_category[$i] = service::find($an['bein_ID'])['category'];
                $i++;
                $an['images_path'] = Str::beforeLast(Str::after($an['images_path'], "[\""), "\"]");
                $$an['images_path'] = Str::remove("\"", $an['images_path']);
                $an['images_path'] = Str::before($an['images_path'], ",") ;
                $an['images_path'] = Str::before($an['images_path'], "\"") ;
                array_push($annonce, $an);
            }
        }
        return view('user1')->with(['user'=> User::find(Request('userID')),
                                    'annonce'=> $annonce,
                                    'bein_category' => $bein_category
                                    ]
                                );
    }

    public function store(Request $request){
        if($request->input('type') == "immoblier"){
            $habit_table = new immobilier();
            $habit_table->chambre = $request->input('chambre');
            $habit_table->surface_totale = $request->input('surface_totale');
            $habit_table->salon = $request->input('salon');
            $habit_table->salle_de_bain = $request->input('salle_de_bain');
            $habit_table->age_de_bien = $request->input('age_de_bien');
            if(  $request->input('category') == 'Appartement'){
                $habit_table->etage = $request->input('etage');
                $habit_table->category = $request->input('category');
                $habit_table->surface_habitable = null;
                $habit_table->nbr_etage = null;
            }
            if($request->input('category') == 'maisson' || $request->input('category') == 'villa'){
                $habit_table->etage = null;
                $habit_table->surface_habitable = $request->input('surface_habitable');
                $habit_table->category = $request->input('category');
                $habit_table->nbr_etage = $request->input('nbr_etage');
            }
            $habit_table->supp = implode(',', $request->get('supp'));

            $habit_table->save();
            return view('last_page.index')->with(['beinID'=>$habit_table->id, 'type'=>$request->input('type')]);
        }

        if($request->input('type') == 'service'){
            $service_table = new service();
            $service_table->surface_totale = $request->input('surface_totale');
            $service_table->surface_soupente = $request->input('surface_soupente');
            $service_table->category = $request->input('category');
            $service_table->etage = $request->input('etage');
            $service_table->nbr_piece = $request->input('nbr_piece');
            $service_table->category = $request->input('category');
            $service_table->supp = implode(',', $request->get('supp'));

            $service_table->save();
            return view('last_page.index')->with(['beinID'=>$service_table->id, 'type'=>$request->input('type')]);
        }

        if($request->input('type') == 'terrain'){
            $immob_table = new terrain();
            $immob_table->surface_totale = $request->input('surface_totale');
            $immob_table->category = $request->input('category');
            $immob_table->zonning = $request->get('zonning');
            $immob_table->category = $request->input('category');
            $immob_table->supp = implode(',', $request->get('supp'));

            $immob_table->save();
            return view('last_page.index')->with(['beinID'=>$immob_table->id, 'type'=>$request->input('type')]);
        }
    }

    public function update_user(Request $request){

        $user = user::find($request->input('id'));
        $user->name = $request->input('name');
        $user->ville = $request->input('ville');
        $user->cin = $request->input('cin');
        $user->email = $request->input('email');
        $user->genre = $request->input('genre');
        $user->phone = $request->input('phone');
        $user->update();

        $les_annonce = annonce::all();
        $annonce = array();
        foreach($les_annonce as $an){
            if($an['user_ID'] == $user['id']){
                $an['images_path'] = Str::beforeLast(Str::after($an['images_path'], "[\""), "\"]");
                $$an['images_path'] = Str::remove("\"", $an['images_path']);
                $an['images_path'] = Str::before($an['images_path'], ",") ;
                $an['images_path'] = Str::before($an['images_path'], "\"") ;
                array_push($annonce, $an);
            }
        }
        return view('user1')->with(['user'=> $user,
                                    'annonce'=> $annonce
                                    ]
                                );
    }

}
