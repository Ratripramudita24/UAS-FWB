@extends('layout.master')
@section('content')

  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Ruangan MyDorm</h5>
  </div>

  <div class="content-wrapper">

    <div class="col-xl-6 grid-margin stretch-card flex-column">
              <h5 class="mb-2 text-titlecase mb-4">Tambah Ruangan</h5>
    </div>

          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Tambah Ruangan </h4>
                    <p class="card-description">
                      Basic form elements
                    </p>

                    <form class="forms-sample" action="{{ route('simpanRuangan') }}" method="POST">
                    @csrf

                        <div class="form-group">
                            <label for="code">Nomor kamar</label>
                            <input type="number" class="form-control" id="code" placeholder="Nomor Kamar" name="nomor_kamar">
                        </div>
                        <div class="form-group">
                            <label for="code">Gedung</label>
                            <input type="text" class="form-control" id="code" placeholder="Gedung" name="gedung">
                        </div>
                        <div class="form-group">
                            <label for="code">Kapasitas</label>
                            <input type="number" class="form-control" id="code" placeholder="Kapasitas" name="kapasitas">
                        </div>
                        <div class="form-group">
                            <label for="code">Harga sewa</label>
                            <input type="number" class="form-control" id="code" placeholder="Harga Sewa" name="harga_sewa">
                        </div>
                        {{-- <div class="form-group"> --}}
                            {{-- <label for="code">Status</label> --}}
                            <input type="hidden" class="form-control" id="code" placeholder="Status" name="status" value="tersedia">
                            {{-- <select class="form-control" id="code" n ame="status">
                                <option value="Tersedia">Tersedia</option>
                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select> --}}
                        {{-- </div> --}}

                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light" >Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>

@endsection










