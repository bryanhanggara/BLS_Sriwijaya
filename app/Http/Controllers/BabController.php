<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bab;
use App\Models\Sub;
use App\Models\Modul;
use App\Http\Requests\BabRequest;

class BabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babs = Bab::with(['subs'])->get();
        return view('admin.bab.index', compact('babs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subs = Sub::all();

        return view('admin.bab.create', compact('subs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BabRequest $request)
    {
        $data = $request->all();
        if ($request->file('image_1') == null) {
            $data ['image_1'] = "";
        }else{
           $data ['image_1'] = $request->file('image_1')->store('profile_images','public');  
        }

        if ($request->file('image_2') == null) {
            $data ['image_2'] = "";
        }else{
           $data ['image_2'] = $request->file('image_2')->store('profile_images','public');  
        }

        if ($request->file('image_3') == null) {
            $data ['image_3'] = "";
        }else{
           $data ['image_3'] = $request->file('image_3')->store('profile_images','public');  
        }
        
        if ($request->file('image_4') == null) {
            $data ['image_4'] = "";
        }else{
           $data ['image_4'] = $request->file('image_4')->store('profile_images','public');  
        }
       

        Bab::create($data);
        return redirect()->route('admin.bab.index')->with([
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
        $bab = Bab::with(['subs'])->findorfail($id);
        return view('admin.bab.show', compact('bab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bab = Bab::findorfail($id);
        $subs = Sub::all();

        return view('admin.bab.edit', compact('bab','subs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BabRequest $request, $id)
    {
        $data = $request->all();
        if ($request->file('image_1') == null) {
            $data ['image_1'] = "";
        }else{
           $data ['image_1'] = $request->file('image_1')->store('profile_images','public');  
        }

        if ($request->file('image_2') == null) {
            $data ['image_2'] = "";
        }else{
           $data ['image_2'] = $request->file('image_2')->store('profile_images','public');  
        }

        if ($request->file('image_3') == null) {
            $data ['image_3'] = "";
        }else{
           $data ['image_3'] = $request->file('image_3')->store('profile_images','public');  
        }
        
        if ($request->file('image_4') == null) {
            $data ['image_4'] = "";
        }else{
           $data ['image_4'] = $request->file('image_4')->store('profile_images','public');  
        }

        $bab = Bab::findorfail($id);
        $bab->update($data);

        return redirect()->route('admin.bab.index')->with([
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
        $bab = Bab::findorfail($id);

        $bab->delete($id);
        return redirect()->route('admin.bab.index')->with([
            'message' => 'data berhxasil di hapus',
            'alert-type' => 'danger'
        ]);
    }
}
