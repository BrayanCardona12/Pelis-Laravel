<?php

namespace App\Http\Controllers;

use App\Models\Directores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DirectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos["dire"] = Directores::paginate(1000);
        // view();
        return view("Directores.indexDirec",$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Directores.crearDire");
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
        $infoDire = $request->except(["_token"]);

        if($request->hasFile("Foto")) {
            $infoDire["Foto"] = $request->file("Foto")->store("uploads","public");
        };


        Directores::insert($infoDire);
        return redirect("Dire");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function show(Directores $directores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $daticos = Directores::findOrFail($id);
        return view("Directores.actDire", compact("daticos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosAct = $request->except(["_token","_method"]);

        if ($request->hasFile("Foto")) {
            $newInfo = Directores::findOrFail($id);
            Storage::delete('public/'.$newInfo->Foto);
            $datosAct["Foto"] = $request->file("Foto")->store("uploads","public");
        };
        Directores::where("id","=",$id)->update($datosAct);
        return redirect("Dire");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $newInfo = Directores::findOrFail($id);

        if(Storage::delete("public/".$newInfo->Foto)){
            Directores::destroy($id);
        };
       
        return redirect("Dire");
    }
}
