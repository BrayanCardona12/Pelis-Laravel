<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeliculasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos["peliculas"] = Peliculas::paginate(1000);
        return view("Peliculas.indexPelis", $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Peliculas.createPeli", ['tt' => 'Crear']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $infoPeliulas = $request->except(["_token"]);

        if($request->hasFile("Poster")) {
            $infoPeliulas["Poster"] = $request->file("Poster")->store("uploads","public");
        };


        Peliculas::insert($infoPeliulas);
        return redirect("Pelis");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $daticos = Peliculas::findOrFail($id);
        return view("Peliculas.update", compact("daticos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAct = $request->except(["_token","_method"]);

        if ($request->hasFile("Poster")) {
            $newInfo = Peliculas::findOrFail($id);
            Storage::delete('public/'.$newInfo->Poster);
            $datosAct["Poster"] = $request->file("Poster")->store("uploads","public");
        };
        Peliculas::where("id","=",$id)->update($datosAct);
        return redirect("Pelis");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $newInfo = Peliculas::findOrFail($id);

        if(Storage::delete("public/".$newInfo->Poster)){
            Peliculas::destroy($id);
        };
       
        return redirect("Pelis");
    }
}
