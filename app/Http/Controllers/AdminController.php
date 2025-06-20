<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lihatRuanganAdmin(Request $request){
        $ruangan = Ruangan::all();
        return view('admin.kelolaRuangan', compact('ruangan'));
    }
    public function tambahRuangan(){
        return view('admin.tambahRuangan');
    }
    public function simpanRuangan(Request $request){
        // dd($request->all());
        $request->validate([
            'nomor_kamar' => 'required|integer|max:2000',
            'gedung' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'harga_sewa' => 'required|numeric|min:0',
            'status' => 'required|in:tersedia,tidak_tersedia',
        ]);
        $ruangan = new Ruangan();
        $ruangan->nomor_kamar = $request->nomor_kamar;
        $ruangan->gedung = $request->gedung;
        $ruangan->kapasitas = $request->kapasitas;
        $ruangan->harga_sewa = $request->harga_sewa;
        $ruangan->status = $request->status;
        $ruangan->save();
        return redirect()->route('kelolaRuanganAdmin')->with('success', 'Ruangan berhasil ditambahkan');
    }
    public function editRuangan($id){
        $ruangan = Ruangan::findOrFail($id);
        return view('admin.editRuangan', compact('ruangan'));
    }
    public function updateRuangan(Request $request, $id){
        $ruangan = Ruangan::findOrFail($id);
       $request->validate([
            'nomor_kamar' => 'required|integer|max:2000',
            'gedung' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'harga_sewa' => 'required|numeric|min:0',
            'status' => 'required|in:tersedia,tidak_tersedia',
        ]);
        $ruangan->nomor_kamar = $request->nomor_kamar;
        $ruangan->gedung = $request->gedung;
        $ruangan->kapasitas = $request->kapasitas;
        $ruangan->harga_sewa = $request->harga_sewa;
        $ruangan->status = $request->status;
        $ruangan->save();
        return redirect()->route('kelolaRuanganAdmin')->with('success', 'Ruangan berhasil ditambahkan');
    }
    public function deleteRuangan($id){
        $ruangan = Ruangan::find($id);
        $ruangan->delete();
        return redirect()->route('kelolaRuanganAdmin');
    }

    public function lihatRiwayat(){
        $sewa = Sewa::with('user')->get();
        return view('admin.riwayat', compact('sewa'));
    }
}
