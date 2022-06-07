<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\comment;
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
            'imageFile.*' => 'mimes:jpeg,jpg,png,pdf|max:40048'
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
              $fileModal->ville = strip_tags( $request->get('ville') );
              $fileModal->transaction = strip_tags( $request->get('transaction') );
              $fileModal->titre = strip_tags( $request->input('titre') );
              $fileModal->description = strip_tags( $request->input('description') );
              $fileModal->prix = $request->input('prix');
              $fileModal->etat = "inactive";

              $fileModal->save();
            //redirect
             return redirect()->route('resultat');
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
        $annonce = annonce::find($id);
        $bein_type = $annonce['bein_type'];
        $user = user::find($annonce['user_ID']);
        $transaction = $annonce['transaction'];
        $comments = array();

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
        if($transaction == "location jour") {
            $trans = "louer(jour)";
        }
        if($transaction == "location mois") {
            $trans = "louer(mois)";
        }

        foreach(comment::all() as $cmt){
            if($cmt['annonce_ID'] == $annonce['id'])
            array_unshift($comments, $cmt);
        }

        return view('last_page.show',[
            'comments' => $comments,
            'annonce' => $annonce,
            'img' => $img,
            'bein' => $bein,
            'supp' => $supp,
            'user' => $user,
            'trans' => $trans
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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

              $fileModal = annonce::find($request->input('annonceID'));
              $fileModal->images_name = json_encode($imgData);
              $fileModal->images_path = json_encode($imgData);
              $fileModal->ville = strip_tags( $request->input('ville') );
              $fileModal->transaction = strip_tags( $request->get('transaction') );
              $fileModal->titre = strip_tags( $request->input('titre') );
              $fileModal->description = strip_tags( $request->input('description') );
              $fileModal->prix = $request->input('prix');
              $fileModal->etat = "inactive";

              $fileModal->update();

              $les_annonce = annonce::all();
              $annonce = array();
              $user = user::find($fileModal['user_ID']);

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
                        array_push($annonce, $an);
                    }
                }
                return view('user1')->with(['user'=> $user,
                                            'annonce'=> $annonce,
                                            'bein_category' => $bein_category,
                                            'success', 'Modifie avec succès  !'
                                            ]
                                        );

          }
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
