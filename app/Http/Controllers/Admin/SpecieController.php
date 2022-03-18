<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specie;

class SpecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Specie::all();
        return view('admin.species.index', compact('species'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.species.create');
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
            'name' => 'required'            
        ]);

        $specie = Specie::create($request->all());
        return redirect(route('admin.species.index', $specie))->with('info', 'La especie ' . $request->name . ' se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  Specie $specie
     * @return \Illuminate\Http\Response
     */
    public function show(Specie $specie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Specie $specie)
    {        
        return view('admin.species.edit', compact('specie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Specie $specie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specie $specie)
    {
        $request->validate([
            'name' => 'required:unique:species'            
        ]);
        
        $specie->update($request->all());

        return redirect()->route('admin.species.index')->with('info', 'La especie '.$request->name.' se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Specie $specie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specie $specie)
    {
        $specie->delete();
        return redirect()->route('admin.species.index')->with('info', 'La especie '.$specie->name.' se eliminó con éxito'); ;//
    }
}
