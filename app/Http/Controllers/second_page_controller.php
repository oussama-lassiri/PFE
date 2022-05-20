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
        $les_annonce = annonce::all();
        $annonce = array();
        $user = user::find($request->input('id'));

        if($request->get('modifie') == "modifie"){
            $user->name = $request->input('name');
            $user->ville = $request->input('ville');
            $user->cin = $request->input('cin');
            $user->email = $request->input('email');
            $user->genre = $request->input('genre');
            $user->phone = $request->input('phone');
        }

        if($request->get('etat') == "active")
        {
            $user->etat = $request->get('etat');
            foreach($les_annonce as $an){
                if($an['user_ID'] == $user['id']){
                    $an->etat = $request->get('etat'); $an->update(); }
                }
            }
        if($request->get('etat') == "desactive"){
            $user->etat = $request->get('etat');
            foreach($les_annonce as $an){
                if($an['user_ID'] == $user['id']){
                    $an->etat = $request->get('etat');
                     $an->update(); }
                    }
                }
        $user->update();


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
        return view('user1')->with(['user'=> $user,
                                    'annonce'=> $annonce,
                                    'bein_category' => $bein_category
                                    ]
                                );
    }

    public function edit(Request $request){
        $annonce = annonce::find($request->get('annonce'));
        $bein_type = $annonce['bein_type'];
        if($bein_type == "immoblier")
            $bein = immobilier::find($annonce['bein_ID']);

        if($bein_type == "terrain")
            $bein = terrain::find($annonce['bein_ID']);

        if($bein_type == "service")
            $bein = service::find($annonce['bein_ID']);

        return view('edit')->with([
                                    'bein' => $bein,
                                    'bein_type' => $bein_type,
                                    'annonceID' => $annonce['id']
                                    ]);
    }

    public function update_annonce(Request $request){

        if($request->input('type') == "immoblier"){
            $annonce = annonce::find($request->input('annonceID'));
            $habit_table = immobilier::find($annonce['bein_ID']);
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
            //$habit_table->supp = implode(',', $request->get('supp'));

            $habit_table->update();
            return view('last_page.edit')->with(['beinID'=>$habit_table->id, 'type'=>$request->input('type'), "annonce"=>annonce::find($request->input('annonceID'))]);
        }

        if($request->input('type') == 'service'){
            $annonce = annonce::find($request->input('annonceID'));
            $service_table = service::find($annonce['bein_ID']);
            $service_table->surface_totale = $request->input('surface_totale');
            $service_table->surface_soupente = $request->input('surface_soupente');
            $service_table->category = $request->input('category');
            $service_table->etage = $request->input('etage');
            $service_table->nbr_piece = $request->input('nbr_piece');
            $service_table->category = $request->input('category');
           // $service_table->supp = implode(',', $request->get('supp'));

            $service_table->update();
            return view('last_page.edit')->with(['beinID'=>$service_table->id, 'type'=>$request->input('type'), "annonce"=>annonce::find($request->input('annonceID'))]);
        }

        if($request->input('type') == 'terrain'){
            $annonce = annonce::find($request->input('annonceID'));
            $immob_table = terrain::find($annonce['bein_ID']);
            $immob_table->surface_totale = $request->input('surface_totale');
            $immob_table->category = $request->input('category');
            $immob_table->zonning = $request->get('zonning');
            $immob_table->category = $request->input('category');
           // $immob_table->supp = implode(',', $request->get('supp'));

            $immob_table->update();
            return view('last_page.edit')->with(['beinID'=>$immob_table->id, 'type'=>$request->input('type'), "annonce"=>annonce::find($request->input('annonceID'))]);
        }
    }
    public function admin_area()
    {
        $les_annonce = annonce::all();
        $annonce = array();
        $admin = User::find(Request('adminID'));
        $les_users = user::all();
        $user = array();
        $i = 0;
        $bein_category = array();
        $nb_annonce = array();
        foreach ($les_users as $u)
        {   $cmpt=0;
            $id_u = $u['id'];
            foreach($les_annonce as $an){
                if($an['user_ID'] == $u['id']){
                    $cmpt++;
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
            $nb_annonce[$id_u] = $cmpt;

        }
        return view('admin')->with(['admin'=> User::find(Request('adminID')),
                'annonce'=> $annonce,
                'user'=> $user,
                'bein_category' => $bein_category,
                'nb_annonce' => $nb_annonce
            ]
        );
    }

    public function destroy_bien($id)
    {
        $annonce = annonce::find($id);
        $bein_id = $annonce['bein_ID'];
        $bein_type = $annonce['bein_type'];
        $annonceID = $annonce['id'];
        if($bein_type == "immoblier")
        {
            immobilier::find($bein_id)->delete();
        }
        if($bein_type == "terrain")
        {
            terrain::find($bein_id)->delete();
        }
        if($bein_type == "service")
        {
            service::find($bein_id)->delete();
        }

        return view('last_page.delete_annonce')->with(['annonceID'=>$annonceID]);

    }
}
