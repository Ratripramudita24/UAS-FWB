@extends('layout.master')
@section('content')

    <div class="col-xl-6 grid-margin stretch-card flex-column">
        <h5 class="mb-2 text-titlecase mb-4">Ayoo Pesannn</h5>
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
                    <th>Pesan</th>
                    <th>Favorit</th>

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
                        <a href="{{route('cariPesan',$rg->id)}}" >Pesan</a>
                    </td>
                    <td>
                        <form action="{{ route('tambahFavorit', $rg->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Tambah Favorit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection
