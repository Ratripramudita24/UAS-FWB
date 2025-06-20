@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <h5 class="mb-2 text-titlecase mb-4">Ruangan yang Anda Sewa</h5>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor Kamar</th>
                <th>Gedung</th>
                <th>Tanggal Sewa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sewa as $sw)
            <tr>
                <td>{{ $sw->ruangan?->nomor_kamar }}</td>
                <td>{{ $sw->ruangan?->gedung }}</td>
                <td>{{ $sw->tanggal_sewa }}</td>
                <td>{{ $sw->status }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada ruangan yang disewa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
