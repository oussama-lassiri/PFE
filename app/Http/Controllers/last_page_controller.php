<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\immobilier;
use App\Models\service;
use App\Models\terrain;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class last_page_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->middleware('auth', ['except' => ['second_page']]);
        return view('last_page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,pdf|max:4048'
          ]);

          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $name = $file->getClientOriginalName();
                  $file->move(public_path().'/uploads/', $name);
                  $imgData[] = $name;
              }

              $fileModal = new annonce();
              $fileModal->user_ID = $request->input('user_ID');
              $fileModal->bein_type = $request->input('bein_type');
              $fileModal->bein_ID = $request->input('bein_ID');
              $fileModal->images_name = json_encode($imgData);
              $fileModal->images_path = json_encode($imgData);
              $fileModal->ville = strip_tags( $request->input('ville') );
              $fileModal->transaction = strip_tags( $request->get('transaction') );
              $fileModal->titre = strip_tags( $request->input('titre') );
              $fileModal->description = strip_tags( $request->input('description') );
              $fileModal->prix = $request->input('prix');
              $fileModal->etat = "inactive";

              $fileModal->save();
            //redirect
             return back()->with('success', 'Créé avec succès  !');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = annonce::find(2);
        $bein_type = $annonce['bein_type'];
        $user = user::find($annonce['user_ID']);
        $transaction = $annonce['transaction'];

        if($bein_type == "immoblier")
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
            array_push($img, $value);
            $data = Str::beforeLast($data, ",");
            if(!Str::contains($data, ",")) {
                $value = Str::afterLast($data, ",") ;
                array_push($img, $value);
                break;
            }
        }

        $data = Str::beforeLast(Str::after($bein['supp'], "[\""), "\"]");
        $data = Str::remove("\"", $data);
        $supp = array();
        while($data != ""){
            $value = Str::afterLast($data, ",");
            array_push($supp, $value);
            $data = Str::beforeLast($data, ",");
            if(!Str::contains($data, ",")) {
                $value = Str::afterLast($data, ",");
                array_push($supp, $value);
                break;
            }
        }
        if ($transaction == "vente"){
            $trans = "vendre";
        }
        else {
            $trans = "louer";
        }


        return view('last_page.show',[
            'annonce' => $annonce,
            'img' => $img,
            'bein' => $bein,
            'supp' => $supp,
            'user' => $user,
            'trans'=> $trans
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
