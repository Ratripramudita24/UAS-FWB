@extends('layout.master')
@section('content')
<div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Edit Kategori</h5>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Kategori </h4>
                <p class="card-description">
                    Basic form elements
                </p>
                <form class="forms-sample" action="{{ route('updateRuangan', $ruangan->id) }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="code">Nomor kamar</label>
                            <input type="number" class="form-control" id="code" placeholder="Nomor Kamar" name="nomor_kamar" value="{{$ruangan->nomor_kamar}}">
                        </div>
                        <div class="form-group">
                            <label for="code">Gedung</label>
                            <input type="text" class="form-control" id="code" placeholder="Gedung" name="gedung" value="{{$ruangan->gedung}}">
                        </div>
                        <div class="form-group">
                            <label for="code">Kapasitas</label>
                            <input type="number" class="form-control" id="code" placeholder="Kapasitas" name="kapasitas" value="{{$ruangan->kapasitas}}">
                        </div>
                        <div class="form-group">
                            <label for="code">Harga sewa</label>
                            <input type="number" class="form-control" id="code" placeholder="Harga Sewa" name="harga_sewa" value="{{$ruangan->harga_sewa}}">
                        </div>
                        <div class="form-group">
                            <label for="code">Status</label>
                            <select class="form-control" id="code" name="status">
                                <option value="tersedia">Tersedia</option>
                                <option value="tidak_tersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
