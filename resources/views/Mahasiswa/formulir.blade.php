@extends('layout.master')
@section('content')

  <div class="content-wrapper">
    <div class="col-xl-6 grid-margin stretch-card flex-column">
              <h5 class="mb-2 text-titlecase mb-4">Sewa Ruangan</h5>
    </div>
          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Sewa Ruangan </h4>

                    <form class="forms-sample" action="{{route('mulaiSewa', $ruangan->id)}}" method="POST">
                    @csrf

                        <div class="form-group">
                            <label for="code">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="code" placeholder="Tanggal Sewa" name="tanggal_sewa">
                        </div>
                        <div class="form-group">

                            <input type="hidden" class="form-control" id="code" placeholder="status" name="status" value="pending">
                        </div>
                        <div class="form-group">
                            <label for="code">Jumah Bayar</label>
                            <input type="number" class="form-control" id="code" placeholder="Jumah Bayar" name="jumlah_bayar">
                        </div>
                        <div class="form-group">
                            <label for="code">Bukti Pembayaran</label>
                            <input type="text" class="form-control" id="code" placeholder="Bukti Pembayaran" name="bukti_pembayaran">
                        </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light" >Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>

@endsection










