<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesi;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.sesi_index')->withSesis(Sesi::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sesi_add')->withSesi(new Sesi);
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
            'name' => 'required',
            'pingat' => 'required',
            
        ]);
        // Shorthand
        $request['status'] = $request->status == 'on' ? true : false;

        Sesi::create($request->only('name','pingat','status'));

        return back()->withSuccess('Successfuly add');

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
        return view('backend.sesi_edit')->withSesi( Sesi::findOrfail($id) );
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
    
     $request->validate([
            'name' => 'required',
            'pingat' => 'required',
            
        ]);
        // Shorthand
        $request['status'] = $request->status == 'on' ? true : false;

        Sesi::where('id', $id)->update($request->only('name','pingat','status'));

        return ridirect()->route('sesi.index')->withSuccess('Successfuly update');

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
