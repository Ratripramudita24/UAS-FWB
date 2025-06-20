@extends('layout.master')
@section('content')

    <div class="col-xl-6 grid-margin stretch-card flex-column">
        <h5 class="mb-2 text-titlecase mb-4">Ruangan MyDorm</h5>
        <a href="{{ route('tambahRuangan') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus-circle me-1"></i> Tambah Ruangan
        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="table-responsive pt-3">
            <table class="table table-striped project-orders-table">
                <thead>
                <tr>

                    <th>Id</th>
                    <th>Nomor_Kamar</th>
                    <th>Gedung</th>
                    <th>Kapasitas</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($ruangan as $rg)
                <tr>
                    <td>{{ $rg->id}}</td>
                    <td>{{ $rg->nomor_kamar }}</td>
                    <td>{{ $rg->gedung }}</td>
                    <td>{{ $rg->kapasitas }}</td>
                    <td>{{ $rg->harga_sewa }}</td>
                    <td>{{ $rg->status }}</td>
                    <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('editRuangan', $rg->id) }}" class="btn btn-success btn-sm btn-icon-text me-3">
                        <i class="typcn typcn-edit btn-icon-prepend"></i> Edit
                        </a>
                        <form action="{{ route('deleteRuangan', $rg->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="typcn typcn-trash btn-icon-prepend"></i> Delete
                        </button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>

@endsection
