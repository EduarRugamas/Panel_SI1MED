<?php

namespace App\Http\Controllers;

use App\Publicidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $publicidades = Publicidades::paginate(5);

        return view('Home.home',compact('publicidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('Panel.Publicidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //
        $datosPublicidad = request()->except('_token');
        if ($request->hasFile('foto')){
            $datosPublicidad['foto'] = $request->file('foto')->store('uploads','public');
        }
        Publicidades::insert($datosPublicidad);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicidades  $publicidades
     * @return \Illuminate\Http\Response
     */
    public function show(Publicidades $publicidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicidades  $publicidades
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $publicidades = Publicidades::findOrFail($id);
        return view('Panel.Publicidades.edit',compact('publicidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicidades  $publicidades
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        //
        $datosPublicidades = request()->except(['_token', '_method']);
        if($request->hasFile('foto')){

            $publicidades = Publicidades::findOrFail($id);
            Storage::delete('public'.$publicidades->foto);
            $datosPublicidades['foto'] = $request->file('foto')->store('uploads','public');
        }

        Publicidades::where('id','=',$id)->update($datosPublicidades);
        return redirect('publicidad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicidades  $publicidades
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Publicidades $publicidades,$id)
    {
        //

        $publicidades = Publicidades::findOrFail($id);
        if (Storage::delete('public' . $publicidades->foto)){
            Publicidades::destroy($id);
        }

        return redirect('publicidad');
    }
}
