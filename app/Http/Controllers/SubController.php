<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub;
use App\Models\Modul;
use App\Http\Requests\SubRequest;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = Sub::all();
        return view('admin.sub.index', compact('subs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubRequest $request)
    {
        $data = $request->all();
        Sub::create($data);
        return redirect()->route('admin.sub_modul.index')->with([
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
        $sub = Sub::findorfail($id);
        return view('admin.sub.edit', compact('sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubRequest $request, $id)
    {
        $data = $request->all();
        $sub = Sub::findorfail($id);

        $sub->update($data);
        return redirect()->route('admin.sub_modul.index')->with([
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
        $sub = Sub::findorfail($id);
        $sub->delete();
        return redirect()->route('admin.sub_modul.index'); 
    }
}
