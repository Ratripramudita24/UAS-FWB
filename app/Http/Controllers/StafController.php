<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StafController extends Controller
{
    public function lihatsewaStaf(Request $request){
        $sewa = Sewa::with(['user', 'ruangan'])->get();
    return view('Staff.lihatDaftarSewa', compact('sewa'));
    }
    public function verifikasi($id)
    {
    DB::beginTransaction();
    try{
            $sewa = Sewa::findOrFail($id);
            $sewa->status = 'disetujui';
            $sewa->save();

            $ruangan = $sewa->ruangan;
            if ($ruangan) {
                $ruangan->status = 'tidak_tersedia';
                $ruangan->save();
            }
            // return redirect()->route('lihatsewaStaf')->with('success', 'Sewa disetujui.');
            DB::commit();
            return redirect()->route('lihatsewaStaf')->with('success', 'Sewa berhasil dibuat');
        }catch (\Exception $e){
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }//penutup function

    public function tolak($id)
    {
    $sewa = \App\Models\Sewa::findOrFail($id);
    $sewa->status = 'ditolak';
    $sewa->save();

    return redirect()->route('lihatsewaStaf')->with('success', 'Sewa ditolak.');
    }

}
