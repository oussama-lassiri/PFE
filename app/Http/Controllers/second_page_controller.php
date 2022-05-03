<?php

namespace App\Http\Controllers;

use App\Models\terrain;
use App\Models\immobilier;
use App\Models\service;
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

    public function store(Request $request){
        if($request->input('type') == "immoblier"){
            $habit_table = new immobilier();
            $habit_table->chambre = $request->input('chambre');
            $habit_table->surface_totale = $request->input('surface_totale');
            $habit_table->salon = $request->input('salon');
            $habit_table->salle_de_bain = $request->input('salle_de_bain');
            $habit_table->age_de_bien = $request->input('age_de_bien');
            if($request->input('category') == 'app'){
                $habit_table->etage = $request->input('etage');
                $habit_table->surface_habitable = null;
                $habit_table->nbr_etage = null;
            }
            if($request->input('category') == 'mv'){
                $habit_table->etage = null;
                $habit_table->surface_habitable = $request->input('surface_habitable');
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
            $service_table->etage = $request->input('etage');
            $service_table->nbr_piece = $request->input('nbr_piece');
            $service_table->supp = implode(',', $request->get('supp'));

            $service_table->save();
            return view('last_page.index')->with(['beinID'=>$service_table->id, 'type'=>$request->input('type')]);
        }

        if($request->input('type') == 'terrain'){
            $immob_table = new terrain();
            $immob_table->surface_totale = $request->input('surface_totale');
            $immob_table->zonning = $request->get('zonning');
            $immob_table->supp = implode(',', $request->get('supp'));

            $immob_table->save();
            return view('last_page.index')->with(['beinID'=>$immob_table->id, 'type'=>$request->input('type')]);
        }
    }
    
}
