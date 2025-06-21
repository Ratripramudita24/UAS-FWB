@extends('layout.master')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="mb-3">Selamat Datang</h3>
                    <p class="mb-0">Silahkan cari kamar yang kamu butuhkan</p>
                </div>
            </div>
        </div>
    </div>
</div> <br> <br>
<div class="row">
    <!-- Card 1 -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/2.jpg" alt="..." />
            </div>
        </div>
     </div>
</div>
<div class="row">
    <!-- Card 1 -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/4.jpg" alt="..." />
            </div>
        </div>
     </div>
</div>
@endsection
