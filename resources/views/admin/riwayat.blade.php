@extends('layout.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="table-responsive pt-3">
            <table class="table table-striped project-orders-table">
                <thead>
                <tr>

                    <th>Id</th>
                    <th>Nama Penyewa</th>
                    <th>Nomor Kamar</th>
                    <th>Gedung</th>
                    <th>Kapasitas</th>
                    <th>Harga Sewa</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($sewa as $rg)
                <tr>
                    <td>{{$rg->id}}</td>
                    <td>{{ $rg->user->name}}</td>
                    <td>{{ $rg->ruangan->nomor_kamar }}</td>
                    <td>{{ $rg->ruangan->gedung }}</td>
                    <td>{{ $rg->ruangan->kapasitas }}</td>
                    <td>{{ $rg->ruangan->harga_sewa }}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
@endsection
