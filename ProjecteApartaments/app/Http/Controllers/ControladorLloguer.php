<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lloguer;

class ControladorLloguer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lloguer = Lloguer::all();
        return view('index', compact('lloguer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
            'Dni_client' => 'required|max:255',
            'Codi_unic' => 'required|max:255',
            'Datainici' => 'required|max:255',
            'Horainici' => 'required|max:255',
            'Datafi' => 'required|max:255',
            'Horafi' => 'required|max:255',
            'Lloclliuclaus' => 'required|max:255',
            'Llocdevclaus' => 'required|max:255',
            'Preudia' => 'required|max:255',
            'Diposit' => 'required|max:255',
            'Quantdiposit' => 'required|max:255',
            'Tipusasseguranca' => 'required|max:255',
        ]);
        $lloguer = Lloguer::create($nouLloguer);
        return redirect('/lloguers')->with('completed', 'Lloguer creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lloguer = Lloguer::findOrFail($id);
        return view('actualitza', compact('lloguer'));
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
        $dades = $request->validate([
            'Dni_client' => 'required|max:255',
            'Codi_unic' => 'required|max:255',
            'Datainici' => 'required|max:255',
            'Horainici' => 'required|max:255',
            'Datafi' => 'required|max:255',
            'Horafi' => 'required|max:255',
            'Lloclliuclaus' => 'required|max:255',
            'Llocdevclaus' => 'required|max:255',
            'Preudia' => 'required|max:255',
            'Diposit' => 'required|max:255',
            'Quantdiposit' => 'required|max:255',
            'Tipusasseguranca' => 'required|max:255',
        ]);
        Lloguer::whereId($id)->update($dades);
        return redirect('/lloguers')->with('completed', 'Lloguer actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lloguer = Lloguer::findOrFail($id);
        $lloguer->delete();
        return redirect('/lloguers')->with('completed', 'Lloguer esborrat');
    }
}
