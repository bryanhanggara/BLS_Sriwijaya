<?php

namespace App\Http\Controllers;


use App\Models\Sub;
use App\Models\Bab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class KursusHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = Sub::all();
        $babs = Bab::with(['subs'])->get();
        return view('pages.index', compact('babs','subs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $subs = Sub::all();
        $lastOpenedBabId = Session::get('last_opened_bab_id');

        // Jika ID bab yang diminta lebih besar dari ID terakhir yang dibuka atau tidak ditemukan
        // if (!$lastOpenedBabId || $id > $lastOpenedBabId || !$bab) {
        //     abort(403, 'Anda tidak dapat membuka bab ini.');
        // }

        // Jika pengguna mencoba membuka bab yang belum dibuka secara berurutan
        $previousBab = $bab->getPreviousBab();
        if ($previousBab && $previousBab->id > $lastOpenedBabId) {
            Alert::error('Error', 'Anda Harus Membuka Bab Sebelumnya Terlebih Dahulu.')->persistent(true)->autoClose(false);
            return redirect()->back();
        }

    // Simpan ID bab terakhir yang dibuka dalam sesi
    Session::put('last_opened_bab_id', $id);


        return view('pages.course.index', compact('bab','subs'));
    }
   

    public function resumeLastOpenedBab()
    {
        

        $lastOpenedBabId = Session::get('last_opened_bab_id');

        if ($lastOpenedBabId) {
            return redirect()->route('dashboard.show', $lastOpenedBabId);
        }
    
        // Jika tidak ada bab terakhir yang dibuka, arahkan ke halaman default
        return redirect()->route('dashboard.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
