<?php

namespace App\Http\Controllers;

use App\Models\Productoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos["pr"] = Productoras::paginate(1000);
        return view("Productoras.indexP", $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Productoras.createP");
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
        $infoProd = $request->except(["_token"]);

        if($request->hasFile("Logo")) {
            $infoProd["Logo"] = $request->file("Logo")->store("uploads","public");
        };


        Productoras::insert($infoProd);
        return redirect("Prodc");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productoras  $productoras
     * @return \Illuminate\Http\Response
     */
    public function show(Productoras $productoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productoras  $productoras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $daticos = Productoras::findOrFail($id);
        return view("Productoras.actP", compact("daticos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productoras  $productoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosP = $request->except(["_token","_method"]);

        if ($request->hasFile("Logo")) {
            $newInfo = Productoras::findOrFail($id);
            Storage::delete('public/'.$newInfo->Logo);
            $datosP["Logo"] = $request->file("Logo")->store("uploads","public");
        };
        Productoras::where("id","=",$id)->update($datosP);
        return redirect("Prodc");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productoras  $productoras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $newInfo = Productoras::findOrFail($id);

        if(Storage::delete("public/".$newInfo->Logo)){
            Productoras::destroy($id);
        };
       
        return redirect("Prodc");
    }
}
