<?php

namespace App\Http\Controllers;

use App\Models\annonce;
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
            'imageFile.*' => 'mimes:jpeg,jpg,png,pdf|max:2048'
          ]);
      
          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $name = $file->getClientOriginalName();
                  $file->move(public_path().'/uploads/', $name);  
                  $imgData[] = $name;  
              }
      
              $fileModal = new annonce();
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
             return back()->with('success', 'Cree avec success !');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $annonce = annonce::find(5);
        $data = Str::beforeLast(Str::after($annonce['images_path'], "[\""), "\"]");
        $data = Str::remove("\"", $data);
        $items = array();
        while($data != ""){
            $value = Str::afterLast($data, ",");
            array_push($items, $value);
            $data = Str::beforeLast($data, ",");
            if(!Str::contains($data, ",")) {
                $value = Str::afterLast($data, ",");
                array_push($items, $value);
                break;
            }
        }

        return view('last_page.show',['annonce' => $items]);
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
