<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\terrain;
use App\Models\immobilier;
use App\Models\service;
use App\Models\comment;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class second_page_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome','comment','search']]);
    }

    public function welcome() {
        $annonces = annonce::all();
        $imgs = array();
        $nbr_immo = 0;
        $nbr_serv = 0;
        $nbr_terr = 0;
        $an = array();
        foreach($annonces as $annonce){
            if($annonce['etat'] == "active"){
                array_unshift($an, $annonce);
                if($annonce['bein_type'] == "immobilier") {$nbr_immo++;}
                if($annonce['bein_type'] == "service") {$nbr_serv++;}
                if($annonce['bein_type'] == "terrain") {$nbr_terr++;}
                $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                $data = Str::remove("\"", $data);
                $data = Str::before($data, ",");
                array_unshift($imgs, $data);
            }

        }

        return view('welcome')->with([
            "annonces" => $an,
            "immobilier" => immobilier::all(),
            "service" => service::all(),
            "terrain" => terrain::all(),
            "imgs" => $imgs,
            "nbr_terr" => $nbr_terr,
            "nbr_serv" => $nbr_serv,
            "nbr_immo" => $nbr_immo
        ]);
    }

    public function search(Request $request){
        $bein = $request->get('bein');
        
        if($bein == "Maisson" || $bein == "Villa" || $bein == "Appartement") $type = "immobilier";
        if($bein == "Bureaux" || $bein == "Plateaux" || $bein == "Magasin") $type = "service";
        if($bein == "Terrain" || $bein == "Ferme") $type = "terrain";

        if($request->get('transaction') == null && $request->get('ville') == null){
            $annonces = annonce::all();
            $beins = array();
            $an = array();
            $imgs = array();
            foreach($annonces as $annonce)
                if($annonce['bein_type'] == $type){

                if($annonce['etat'] == "active" && $annonce['bein_type'] == "immobilier" && immobilier::find($annonce['bein_ID'])['category'] == $bein) {
                    array_unshift($beins, immobilier::find($annonce['bein_ID']));
                    array_unshift($an, $annonce);
                    $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                    $data = Str::remove("\"", $data);
                    $data = Str::before($data, ",");
                    array_unshift($imgs, $data);
                }

                if($annonce['etat'] == "active" && $annonce['bein_type'] == "service" && service::find($annonce['bein_ID'])['category'] == $bein){
                    array_unshift($beins, service::find($annonce['bein_ID']));
                    array_unshift($an, $annonce);
                    $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                    $data = Str::remove("\"", $data);
                    $data = Str::before($data, ",");
                    array_unshift($imgs, $data);
                }

                if($annonce['etat'] == "active" && $annonce['bein_type'] == "terrain" && terrain::find($annonce['bein_ID'])['category'] == $bein) {
                    array_unshift($beins, terrain::find($annonce['bein_ID']));
                    array_unshift($an, $annonce);
                    $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                    $data = Str::remove("\"", $data);
                    $data = Str::before($data, ",");
                    array_unshift($imgs, $data);
                }
            }

            return view('search')->with([
                "annonces" => $an,
                "beins" => $beins,
                "imgs" => $imgs,
                "bein" => $bein,
            ]);

        }

        $trans = $request->get('transaction');
        $ville = $request->get('ville');

        $annonces = annonce::all();

        $beins = array();
        $an = array();
        $imgs = array();

        foreach($annonces as $annonce)
            if($annonce['transaction'] == $trans && $annonce['ville'] == $ville && $annonce['bein_type'] == $type){
                if($annonce['etat'] == "active" && $annonce['bein_type'] == "immobilier" && immobilier::find($annonce['bein_ID'])['category'] == $bein) {
                    array_unshift($beins, immobilier::find($annonce['bein_ID']));
                    array_unshift($an, $annonce);
                    $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                    $data = Str::remove("\"", $data);
                    $data = Str::before($data, ",");
                    array_unshift($imgs, $data);
                }

                if($annonce['etat'] == "active" && $annonce['bein_type'] == "service" && service::find($annonce['bein_ID'])['category'] == $bein){
                    array_unshift($beins, service::find($annonce['bein_ID']));
                    array_unshift($an, $annonce);
                    $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                    $data = Str::remove("\"", $data);
                    $data = Str::before($data, ",");
                    array_unshift($imgs, $data);
                }

                if($annonce['etat'] == "active" && $annonce['bein_type'] == "terrain" && terrain::find($annonce['bein_ID'])['category'] == $bein) {
                    array_unshift($beins, terrain::find($annonce['bein_ID']));
                    array_unshift($an, $annonce);
                    $data = Str::before(Str::after($annonce['images_path'], "[\""), "\"]");
                    $data = Str::remove("\"", $data);
                    $data = Str::before($data, ",");
                    array_unshift($imgs, $data);
                }

        }
        return view('search')->with([
            "annonces" => $an,
            "beins" => $beins,
            "imgs" => $imgs,
            "bein" => $bein,
            "trans" => $trans,
            "ville" =>  $ville
        ]);
    }

    public function first_page(){

        return view('first_page.index');
    }

    public function resultat(Request $request){
        if( $request->get('res') != null )
            if($request->get('res') == "fail"){
                $msg = "Veuillez attendre l'activation de votre compte avant de pouvoir créer une annonce";
                return view('resultat')->with([
                    'res' => "fail",
                    'msg' => $msg
                ]);
            }
        return view('resultat');
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

    public function user($id){
        $les_annonce = annonce::all();
        $annonce = array();
        $user = User::find($id);
        $i = 0;
        $bein_category = array();
        foreach($les_annonce as $an){
            if($an['user_ID'] == $user['id']){
                $bein_type = $an['bein_type'];
                if($bein_type == "immobilier")
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
                array_unshift($annonce, $an);
            }
        }
        return view('user1')->with(['user'=> $user,
                                    'annonce'=> $annonce,
                                    'bein_category' => $bein_category
                                    ]
                                );
    }

    public function store(Request $request){
        if($request->input('type') == "immobilier"){
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
            if($request->input('category') == 'Maisson' || $request->input('category') == 'Villa'){
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
                if($an['user_ID'] == $user['id'] && $an['etat'] !="inactive"){
                    $an->etat = $request->get('etat');
                    $an->update(); }
                }
            }
        if($request->get('etat') == "desactive"){
            $user->etat = $request->get('etat');
            foreach($les_annonce as $an){
                if($an['user_ID'] == $user['id'] && $an['etat'] !="inactive"){
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
                if($bein_type == "immobilier")
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
                array_unshift($annonce, $an);
            }
        }
        return view('user1')->with(['user'=> $user,
                                    'annonce'=> $annonce,
                                    'bein_category' => $bein_category
                                    ]
                                );
    }

    public function comment(Request $request){

        $cmt = new comment();
        $cmt->annonce_ID = $request->get('annonce_ID');
        $cmt->nom = $request->get('nom');
        $cmt->email = $request->get('email');
        $cmt->comment = $request->get('comment');
        $cmt->etat = "inactive";
        $cmt->save();

        return redirect()->route('last_page.show', $request->get('annonce_ID'));
    }

    public function edit(Request $request){
        $annonce = annonce::find($request->get('annonce'));
        if($request->get('etat') != null){
            if($request->get('etat') == "desactive"){
                $annonce->etat = $request->get('etat');
                $annonce->update();
                return view('resultat')->with([
                    "res" => "success",
                    "msg" => "L'état de votre annonce est changé avec succès"
                ]);
            }
            else{
                $user = user::find($annonce['user_ID']);
                if($user['etat'] == "desactive")
                    return view('resultat')->with([
                        "res" => "fail",
                        "msg" => "Vous ne pouvez pas activer cette annonce car l'état de votre compte est : désactivé"]);
                else{
                    $annonce->etat = $request->get('etat');
                    $annonce->update();
                    return view('resultat')->with([
                        "res" => "success",
                        "msg" => "L'etat de votre annonce est change avec success"
                    ]);
                }
                }

        }
        $bein_type = $annonce['bein_type'];
        if($bein_type == "immobilier")
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

    public function admin_area(){
        $les_annonce = annonce::all();
        $an_totale = count($les_annonce);

        //$admin = User::find(Request('adminID'));
        $les_users = user::all();
        $user = array();
        $i = 0;
        $users = 0;
        $nb_annonce = array();
        foreach ($les_users as $u)
        {   $cmpt=0;
            $users++;
            $id_u = $u['id'];
            foreach($les_annonce as $an){
                if($an['user_ID'] == $u['id']){
                    $cmpt++;
                }

            }
            array_unshift($nb_annonce,$cmpt);
            array_unshift($user,$u);
        }

        $new_annonce = array();
        $user_nom = array();
        $new_user = array();
        $st_a = 0;
        foreach($les_annonce as $an) {

            if ($an['etat'] == "inactive")
            {
                $st_a++;
                $nm_user = user::find($an['user_ID'])['name'];
                array_push($user_nom,$nm_user);
                array_push($new_annonce,$an);
            }
        }
        foreach ($les_users as $u)
        {
            if($u['etat'] == "inactive")
            {
                array_push($new_user,$u);
            }
        }


        return view('admin_dir.admin')->with([//'admin'=> User::find(Request('adminID')),
                'user'=> $user,
                'nb_annonce' => $nb_annonce,
                'users' => $users,
                'an_totale' => $an_totale,
                'new_user' => $new_user,
                'new_annonce' => $new_annonce,
                'user_nom' => $user_nom,
                'sta' => $st_a
            ]
        );
    }

    public function theme()
    {
        $us =  user::all();
        $adm = array();
        foreach ($us as $u)
        {
            if($u['role'] == '1')
            {
                $a = $u['name'];
                array_push($adm,$a);
            }
        }
        return view('admin_dir.theme')->with([
            'adm' => $adm
        ]);
    }

    public function admin_user()
    {
        $les_users = user::all();

        return view('admin_dir.user')->with([
                'user'=> $les_users
            ]
        );
    }

    public function display_user(Request $request)
    {
        $user = User::find($request->input('u'));
        return view('admin_dir.displayUser')->with([
            'user'=>$user
        ]);
    }

    public function admin_gestion_user()
    {
        $les_annonces = annonce::all();
        $les_users = user::all();
        $user = array();
        $nb_annonce = array();
        foreach ($les_users as $u)
        {   $cmpt=0;
            foreach($les_annonces as $an){
                if($an['user_ID'] == $u['id']){
                    $cmpt++;
                }

            }
            array_unshift($nb_annonce,$cmpt);
            array_push($user,$u);
        }

        return view('admin_dir.gestionUser')->with([
                'user'=> $user,
                'nb_annonce' => $nb_annonce
            ]
        );
    }

    public function admin_delete_user(Request $request)
    {
        $user = User::find($request->input('u'));
        $u_name = $user['name'];
        $u_id = $user['id'];

         $user->delete();

         foreach (annonce::all() as $an)
         {
             if($u_id == $an['user_ID'])
             {
                 $bein_id = $an['bein_ID'];
                 $bein_type = $an['bein_type'];
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
                 $an->delete();
             }
         }

         return back()->with('message',' Le profile  ` '.$u_name.' ` est supprimé avec succès.              ');
    }

    public function admin_etat_user(Request $request)
    {
        $user = user::find($request->input('u'));
        if($user['etat'] == "active")
        {
            $user->etat = "desactive";
            $u_id = $user['id'];
            foreach (annonce::all() as $an)
            {
                if($u_id == $an['user_ID'])
                {
                    $bein_type = $an['bein_type'];
                    if($bein_type == "immoblier")
                    {
                        $an->etat = "desactive";
                    }
                    if($bein_type == "terrain")
                    {
                        $an->etat = "desactive";
                    }
                    if($bein_type == "service")
                    {
                        $an->etat = "desactive";
                    }
                    $an->update();
                }
            }
        }
        else
        {
            $user->etat = "active";
            $u_id = $user['id'];
            foreach (annonce::all() as $an)
            {
                if($u_id == $an['user_ID'])
                {
                    $bein_type = $an['bein_type'];
                    if($bein_type == "immoblier")
                    {
                        $an->etat = "active";
                    }
                    if($bein_type == "terrain")
                    {
                        $an->etat = "active";
                    }
                    if($bein_type == "service")
                    {
                        $an->etat = "active";
                    }
                    $an->update();
                }
            }
        }

        $user->update();
        return back()->with('message',' Etat du profile de ` '.$user['name'].' `  est modifié avec succès.              ');
    }

    public function admin_block_user(Request $request)
    {
        $user = user::find($request->input('u'));
        $user->etat = "bloque";
        $u_id = $user['id'];
        foreach (annonce::all() as $an)
        {
            if($u_id == $an['user_ID'])
            {
                $bein_type = $an['bein_type'];
                if($bein_type == "immobilier")
                {
                    $an->etat = "bloque";
                }
                if($bein_type == "terrain")
                {
                    $an->etat = "bloque";
                }
                if($bein_type == "service")
                {
                    $an->etat = "bloque";
                }
                $an->update();
            }
        }
        $user->update();
        return back()->with('message',' Etat du profile de ` '.$user['name'].' `  est modifié avec succès.              ');

    }

    public function admin_user_add(Request $request){
        $user = new user();

        $user->name = $request->get('name');
        $user->genre = $request->get('genre');
        $user->cin = $request->get('cin');
        $user->ville = $request->get('ville');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->password = Hash::make($request->get('password'));
        $user->etat = 'inactive';

        $user->save();

        return  Redirect::back()->with('message',' L\'utilsateur : ` '.$user['name'].' `  est creé avec succès.              ');

    }

    public function admin_annonce()
    {
        $les_annonce = annonce::all();
        $annonce = array();
        $user = array();
        $bein_category = array();
        $i = 0;

        foreach($les_annonce as $an){
            $nm_user = user::find($an['user_ID'])['name'];
            $bein_type = $an['bein_type'];
            if($bein_type == "immobilier")
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
            array_push($annonce,$an);
            array_push($user,$nm_user);
        }
        return view('admin_dir.annonce')->with([
                'annonce'=> $annonce,
                'bein_category' => $bein_category,
                'user' => $user
            ]
        );
    }

    public function display_annonce(Request $request)
    {
        $annonce = annonce::find($request->input('an'));
        $bein_type = $annonce['bein_type'];
        $user = user::find($annonce['user_ID']);
        $transaction = $annonce['transaction'];

        if($bein_type == "immobilier")
            $bein = immobilier::find($annonce['bein_ID']);

        if($bein_type == "terrain")
            $bein = terrain::find($annonce['bein_ID']);

        if($bein_type == "service")
            $bein = service::find($annonce['bein_ID']);

        $data = Str::beforeLast(Str::after($annonce['images_path'], "[\""), "\"]");
        $data = Str::remove("\"", $data);
        $img = array();
        while($data != ""){
            $value = Str::afterLast($data, ",");
            array_unshift($img, $value);
            $data = Str::beforeLast($data, ",");
            if(!Str::contains($data, ",")) {
                $value = Str::afterLast($data, ",") ;
                array_unshift($img, $value);
                break;
            }
        }

        $data = Str::beforeLast(Str::after($bein['supp'], "[\""), "\"]");
        $data = Str::remove("\"", $data);
        $supp = array();
        while($data != ""){
            $value = Str::afterLast($data, ",");
            array_unshift($supp, $value);
            $data = Str::beforeLast($data, ",");
            if(!Str::contains($data, ",")) {
                $value = Str::afterLast($data, ",");
                array_unshift($supp, $value);
                break;
            }
        }
        if ($transaction == "vente"){
            $trans = "vendre";
        }
        if($transaction == "location jour") {
            $trans = "louer(jour)";
        }
        if($transaction == "location mois") {
            $trans = "louer(mois)";
        }


        return view('admin_dir.displayAnnonce',[
            'annonce' => $annonce,
            'img' => $img,
            'bein' => $bein,
            'supp' => $supp,
            'user' => $user,
            'trans' => $trans
        ]);
    }

    public function admin_etat_annonce(Request $request)
    {
        $an = annonce::find($request->input('a'));
        if($an['etat'] == "active")
        {
            $an->etat = "desactive";
        }
        else
        {
            $an->etat = "active";
        }

        $an->update();
        return back()->with('message',' Etat d`annonce est modifié avec succès.              ');
    }

    public function admin_gestion_annonce(Request $request)
    {
        $annonce = annonce::find($request->get('annonce'));

        $bein_type = $annonce['bein_type'];
        if($bein_type == "immobilier")
            $bein = immobilier::find($annonce['bein_ID']);

        if($bein_type == "terrain")
            $bein = terrain::find($annonce['bein_ID']);

        if($bein_type == "service")
            $bein = service::find($annonce['bein_ID']);

        return view('admin_dir.gestionAnnonce')->with([
            'bein' => $bein,
            'bein_type' => $bein_type,
            'annonceID' => $annonce['id']
        ]);
    }

    public function admin_edit_annonce(Request $request)
    {
        if($request->input('type') == "immobilier"){
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
            return view('admin_dir.editAnnonce')->with(['beinID'=>$habit_table->id, 'type'=>$request->input('type'), "annonce"=>annonce::find($request->input('annonceID'))]);
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
            return view('admin_dir.editAnnonce')->with(['beinID'=>$service_table->id, 'type'=>$request->input('type'), "annonce"=>annonce::find($request->input('annonceID'))]);
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
            return view('admin_dir.editAnnonce')->with(['beinID'=>$immob_table->id, 'type'=>$request->input('type'), "annonce"=>annonce::find($request->input('annonceID'))]);
        }
    }

    public function admin_comment()
    {
        $comment = comment::all();
        $title_an = array();
        foreach ($comment as $c)
        {
            $an = annonce::find($c['annonce_ID'])['titre'];
            array_push($title_an,$an);
        }
        return view('admin_dir.commentaire')->with([
           'comment' => $comment,
            'tit' => $title_an
        ]);
    }

    public function admin_etat_comment(Request $request)
    {
        $c = comment::find($request->input('c'));
        if($c['etat'] == "active")
        {
            $c->etat = "desactive";
        }
        else
        {
            $c->etat = "active";
        }

        $c->update();
        return back()->with('message',' Etat du commentaire est modifié avec succès.');
    }

    public function admin_drop_comment(Request $request)
    {
        $c = comment::find($request->input('c'));
        $c_name = $c['nom'];
        $c->delete();
        return back()->with('message',' Le commentaire de  ` '.$c_name.' ` est supprimé avec succès. ');
    }

    public function admin_statistique()
    {
        return view('admin_dir.statistique');
    }

    public function destroy_bien(Request $request){
        $annonce = annonce::find($request->input('annonce'));
        $comment = comment::all();
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
        $annonce->delete();
        foreach($comment as $c)
        {
            if($c['annonce_ID'] == $bein_id)
                $c->delete();
        }

        return back()->with(['annonceID'=>$annonceID]);

    }
}
