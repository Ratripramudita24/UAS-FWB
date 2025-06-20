@extends('layout.master')
@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{ auth()->user()->name }}</h4>
            <p class="text-muted mb-4">
                {{ auth()->user()->email }}
            </p>
            <p class="text-muted mb-4">
                Bergabung sejak: {{ auth()->user()->created_at->format('d M Y, H:i') }}
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection


























{{-- @extends('layout.master')
@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{ auth()->user()->name }}</h4>
                <p class="text-muted mb-4">
                    {{ auth()->user()->email }}
                </p>
                <p class="text-muted mb-4">
                    Bergabung sejak: {{ auth()->user()->created_at->format('d M Y, H:i') }}
                </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
 --}}
