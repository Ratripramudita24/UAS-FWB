@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <div class="col-xl-6 grid-margin stretch-card flex-column">
        <h5 class="mb-2 text-titlecase mb-4">Daftar Sewa Ruangan</h5>
    </div>
    <div>
        <div class="container py-4">
        @if (session('succes'))
        <div class="alert alert-success">
            {{session('succes')}}
        </div>
        @endif
    </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Ruangan</th>
                <th>Tanggal Sewa</th>
                <th>Jumlah Bayar</th>
                <th>Aksi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($sewa as $sw)
        <tr>
            <td>{{ $sw->user->name }}</td>
            <td>{{ $sw->ruangan->nomor_kamar }}</td>
            <td>{{ $sw->tanggal_sewa }}</td>
            <td>Rp {{ number_format($sw->jumlah_bayar, 0, ',', '.') }}</td>
            <td>
                <!-- Tombol verifikasi -->
                <a href="{{ route('sewa.verifikasi', $sw->id) }}" class="btn btn-success">Verifikasi</a>
                <a href="{{ route('sewa.tolak', $sw->id) }}" class="btn btn-danger">Tolak</a>
            </td>
            <td>
                @if ($sw->status == 'pending')
                    <span class="badge badge-warning">Pending</span>
                @elseif ($sw->status == 'disetujui')
                    <span class="badge badge-success">Disetujui</span>
                @elseif ($sw->status == 'ditolak')
                    <span class="badge badge-danger">Ditolak</span>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>



@endsection
