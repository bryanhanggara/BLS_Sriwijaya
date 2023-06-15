<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;
use App\Http\Requests\ModulRequest;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Modul::all();
        return view('admin.modul.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModulRequest $request)
    {
        $data = $request->all();
        
        Modul::create($data);
        return redirect()->route('admin.modul.index')->with([
            'message' => 'data berhasil di tambahkan',
            'alert-type' => 'success'
        ]);
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
        $item = Modul::findorfail($id);

        return view('admin.modul.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModulRequest $request, $id)
    {
        $data = $request->all();

        $item = Modul::findorfail($id);
        $item->update($data);

        return redirect()->route('admin.modul.index')->with([
            'message' => 'data berhasil di ubah',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Modul::findorfail($id);

        $item->delete();
        return redirect()->route('admin.modul.index')->with([
            'message' => 'data berhasil di hapus',
            'alert-type' => 'danger'
        ]);
    }
}
