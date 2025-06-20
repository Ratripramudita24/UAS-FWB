@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <h5 class="mb-2 text-titlecase mb-4">Daftar Ruangan Favorit</h5>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor Kamar</th>
                <th>Gedung</th>
                <th>Kapasitas</th>
                <th>Harga Sewa</th>
            </tr>
        </thead>
        <tbody>
            @forelse($favorit as $fav)
            <tr>
                <td>{{ $fav->ruangan->nomor_kamar }}</td>
                <td>{{ $fav->ruangan->gedung }}</td>
                <td>{{ $fav->ruangan->kapasitas }}</td>
                <td>{{ $fav->ruangan->harga_sewa }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada favorit.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection





{{-- @extends('layout.master')
@section('content')
<div class="content-wrapper">
    <h5 class="mb-2 text-titlecase mb-4">Daftar Ruangan Favorit</h5>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor Kamar</th>
                <th>Gedung</th>
                <th>Kapasitas</th>
                <th>Harga Sewa</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ruangans as $ruangan)
            <tr>
                <td>{{ $ruangan->nomor_kamar }}</td>
                <td>{{ $ruangan->gedung }}</td>
                <td>{{ $ruangan->kapasitas }}</td>
                <td>{{ $ruangan->harga_sewa }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada favorit.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection --}}
