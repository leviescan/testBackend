<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personaje;

class PersonajeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Personaje::all();
         
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Personaje::create($request->all());
            return ['created' => true];
            
        }
        catch(Exception $e) {

            return ['created' => false,'err' => $e->getCode()];
        }
        
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
        $personaje = Personaje::findOrFail($request->id);
        $personaje->name = $request->name;
        $personaje->description = $request->description;
        $personaje->image = $request->image;
        
        $personaje->update();
        return $personaje;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $personaje = Personaje::destroy($request->id);
       return $personaje;
    }

    public function read1(Request $request)
    {
        $personaje = Personaje::findOrFail($request->id);
       return $personaje;
    }
}
