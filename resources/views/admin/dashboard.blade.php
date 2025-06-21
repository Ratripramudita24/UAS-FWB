@extends('layout.master')
@section('content')


                <div class="container-fluid">


                @if (Auth::user()->role == 'admin')
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h3 class="mb-3">Selamat Datang</h3>
                                    <p class="mb-0">Dialaman Utama Kamu Sebagai Admin</p>
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
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Riwayat penyewaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Tambahkan Ruangan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rooms</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                            <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fas fa-building fa-10x"></i>
                            </div>
                        </a>
                    </div>


                @endif




                @if (Auth::user()->role == 'staf')
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h3 class="mb-3">Selamat Datang</h3>
                                    <p class="mb-0">Dihalam utama kamu sebagai staf</p>
                                    <p class="mb-0">Silahkan Pergi ketujuan pemeriksa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br> <br>
                <div class="container mt-4">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                                    <div class="sidebar-brand-icon rotate-n-15">
                                        <i class="fas fa-building fa-10x"></i>
                                    </div>
                                </a>
                </div> <br> <br>
                @endif
            <!-- End of Main Content -->
@endsection
