<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="landingPage/assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="landingPage/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">StayDorm</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('lihatregister')}}">Create An account</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Stay Dorm</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Asrama Ideal, Proses Digital</p> <br>
                        <p class="text-white-75 mb-5">Kelola pendaftaran, pilih kamar, dan nikmati fasilitas – semuanya dalam satu sistem</p>
                        <a class="btn btn-primary btn-xl" href="#about">Temukan</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Sedang mencari Dorm ? <br> Kami punya apa yang Anda butuhkan!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">StayDorm hadir untuk memudahkan proses pendaftaran dan pengelolaan asrama secara efisien dan transparan</p>
                        <a class="btn btn-light btn-xl" href="#services">Mulai!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Pendaftaran Online</h3>
                            <p class="text-muted mb-0">Daftarkan diri tanpa perlu datang langsung, cukup melalui platform StayDorm</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Pemilihan Kamar</h3>
                            <p class="text-muted mb-0">Lihat daftar kamar yang tersedia dan pilih sesuai kebutuhanmu</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Pembayaran Digital</h3>
                            <p class="text-muted mb-0">Pembayaran sewa kamar mudah dan aman via transfer atau dompet digital, cukup sertakan nomor regis kamu</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Notifikasi Pengingat</h3>
                            <p class="text-muted mb-0">Dapatkan notifikasi otomatis untuk tenggat pembayaran atau perpanjangan sewa</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="landingPage/assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Indoor</div>
                                <div class="project-name">Room</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="landingPage/assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                            <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Indoor</div>
                                <div class="project-name">Wash</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="landingPage//img/portfolio/fullsize/3.jpg" title="Project Name">
                            <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Indoor</div>
                                <div class="project-name">Room</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="landingPage/assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                            <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Outdor</div>
                                <div class="project-name">Koridor</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="landingPage/assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                            <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Indoor</div>
                                <div class="project-name">Room</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="landingPage/assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                            <img class="img-fluid" src="landingPage/assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Outdoor</div>
                                <div class="project-name">Park</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
            </div>
        </section> --}}
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Mari Berhubungan!!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Mulai pengalaman tinggal di asrama yang nyaman dan mudah. Hubungi StayDorm hari ini!!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>082 899 999 000</div> <br>
                        <div>Handphone</div>
                    </div>
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <a href="https://www.instagram.com/ratri_pramudita24?igsh=b3E2NHkyNnFmZ2E4" target="_blank">
                            <i class="bi-instagram fs-2 mb-3 text-muted"></i>
                        </a>
                         <div>@stayDorm.gmail.com</div> <br>
                        <div>Instagram</div>
                    </div>
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <a href="https://www.instagram.com/ratri_pramudita24?igsh=b3E2NHkyNnFmZ2E4" target="_blank">
                            <i class="bi-facebook fs-2 mb-3 text-muted"></i>
                        </a>
                         <div>StayDorm.official</div> <br>
                        <div>Facebook</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - StayDorm</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="landingPage/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
