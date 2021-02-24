<?php

namespace App\Http\Controllers;

use App\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $noticias = Noticias::paginate(5);

        return view('Panel.Noticias.index',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        //

        return view('Panel.Noticias.create');
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

        $datosNoticias = request()->except('_token');

        if($request->hasFile('foto')){
            $datosNoticias['foto'] = $request->file('foto')->store('uploads','public');

        }
        Noticias::insert($datosNoticias);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //

        $noticias = Noticias::findOrFail($id);

        return view('Panel.Noticias.edit', compact('noticias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, Noticias $noticias, $id)
    {
        //
        $datosNoticias = request()->except(['_token', '_method']);

        if($request->hasFile('foto')){

            $noticias = Noticias::findOrFail($id);

            Storage::delete('public/'.$noticias->foto);
            $datosNoticias['foto']=$request->file('foto')->store('uploads', 'public');

        }

        Noticias::where('id','=', $id)->update($datosNoticias);

        return redirect('noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias  $noticias
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy(Noticias $noticias,$id)
    {
        //
        $noticias = Noticias::findOrFail($id);

        if (Storage::delete('public/'. $noticias->foto)){
            Noticias::destroy($id);
        }

        return redirect('noticias');
    }
}
