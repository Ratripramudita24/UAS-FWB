<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Models\Ruangan;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function lihatRuanganMahasiswa(Request $request){
        $ruangan = Ruangan::where('status', 'tersedia')->get();
        return view('Mahasiswa.sewaRuangan', compact('ruangan'));
    }
    public function cariPesan($id){
        $ruangan = Ruangan::findOrFail($id);
        return view('Mahasiswa.formulir', compact('ruangan'));
    }
    public function mulaiSewa(Request $request, $id)
    {
        $request->validate([
            'tanggal_sewa' => 'required|date',
            'status' => 'required|in:pending,disetujui,ditolak',
            'jumlah_bayar' => 'required|numeric|min:0',
            'bukti_pembayaran' => 'required|string',
        ]);

            $sewa = new Sewa();
            $sewa->user_id = Auth::id();
            $sewa->ruangan_id = $id;
            $sewa->tanggal_sewa = $request->tanggal_sewa;
            $sewa->status = $request->status;
            $sewa->jumlah_bayar = $request->jumlah_bayar;
            $sewa->bukti_pembayaran = $request->bukti_pembayaran;
            $sewa->save();
            return redirect()->route('lihatRuanganMahasiswa')->with('success', 'Sewa berhasil dibuat');

    }

    public function lihatProfil(){
        $user = User::all();
        return view('Mahasiswa.profile', compact('user'));
    }

    public function lihatfavorit(){
       $favorit = Favorit::with('ruangan')->where('user_id', auth()->id())->get();
       return view('Mahasiswa.favorite', compact('favorit'));
    }
    public function tambahFavorit($ruangan_id)
    {
    $user_id = auth()->id(); // Ambil ID user yang sedang login

    // Cek jika sudah ada di favorit
    if (Favorit::where('user_id', $user_id)->where('ruangan_id', $ruangan_id)->exists()) {
        return back()->with('error', 'Ruangan sudah ada di favorit!');
    }

    Favorit::create([
        'user_id' => $user_id,      // Isi kolom user_id dengan ID user yang login
        'ruangan_id' => $ruangan_id // Isi kolom ruangan_id dengan ID ruangan yang ingin difavoritkan
    ]);

    return back()->with('success', 'Berhasil ditambahkan ke favorit!');
    }

}
