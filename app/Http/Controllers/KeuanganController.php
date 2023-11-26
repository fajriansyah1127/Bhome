<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_lunas = Keuangan::where('status', 'LUNAS')->get();
        $data_belum_lunas = Keuangan::where('status', 'BELUM LUNAS')->get();
        $total_lunas = Keuangan::where('status', 'LUNAS')->count();
        $total_belum_lunas = Keuangan::where('status', 'BELUM LUNAS')->count();
        $total_nilai_lunas_dan_belum = Keuangan::sum('nilai_sudah_bayar') + Keuangan::sum('nilai_belum_bayar');
        $total_nilai_lunas = Keuangan::sum('nilai_sudah_bayar'); 
        $total_nilai_belum = Keuangan::sum('nilai_belum_bayar');
        return view('keuangan.index', compact('data_lunas', 'data_belum_lunas','total_lunas','total_belum_lunas','total_nilai_lunas_dan_belum','total_nilai_lunas','total_nilai_belum'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
