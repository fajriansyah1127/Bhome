<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Datarumah;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasiData = Datarumah::get();
        $total_nilai_lunas = Keuangan::sum('nilai_sudah_bayar'); 
        // $lokasi = Datarumah::get('pdam');
        // dd($lokasiData); // Ini akan mencetak data ke konsol
        return view('dashboard.index',compact('lokasiData','total_nilai_lunas'));
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
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
