<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <!-- custom stylesheet -->
            <link rel="stylesheet" href="css/style.css">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('images/seeknow.png') }}" class="mr-2" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto container-fluid">

                    <li class="nav-item col-8">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control form-control-lg col-9 bg-light border-0 rounded-radius-left" type="search" placeholder="Browse our online course" aria-label="Search">
                            <button class="btn btn-lg btn-light col-2 my-2 my-sm-0 ml-0 rounded-radius-right" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>

                <div class="Masuk">
                    {{-- <button type="button" class="btn btn-success mx-1" data-toggle="modal" data-target="#myModal">Masuk</button> --}}
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Sign In</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input class="mt-2 form-control form-control-lg bg-light border-0 rounded-radius-left" type="search" placeholder="E Mail" aria-label="Search">
                                    <input class="mt-2 form-control form-control-lg bg-light border-0 rounded-radius-left" type="search" placeholder="Password" aria-label="Search">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Daftar">
                    {{-- <button type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#myModal1">Daftar</button> --}}
                        <!-- The Modal -->
                    <div class="modal" id="myModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title">Sign Up</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                    <input class="mt-2 form-control form-control-lg bg-light border-0 rounded-radius-left" type="search" placeholder="Nama Depan" aria-label="Search">
                                    <input class="mt-2 form-control form-control-lg bg-light border-0 rounded-radius-left" type="search" placeholder="Nama Belakang" aria-label="Search">
                                    <input class="mt-2 form-control form-control-lg bg-light border-0 rounded-radius-left" type="search" placeholder="E Mail" aria-label="Search">
                                    <input class="mt-2 form-control form-control-lg bg-light border-0 rounded-radius-left" type="search" placeholder="Password" aria-label="Search">
                                </div>

                        <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="jumbotron mb-0 bg-banner text-center" style="height:480px; padding-top:150px">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col">
                                <div class="col text-light">
                                    <h1>Pelajari Skill Baru berikutnya</h1>
                                    <p class="lead">Learn Better as A Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="page-section" id="services">
                    <div class="container">
                        <div class="row text-center mt-5 fluid">
                            <div class="col-md-4">
                                <span class="icon1">
                                    <i><img src="{{ asset('images/youtube.png') }}" alt=""></i>
                                </span>
                                <h4 class="service-heading">Video</h4>
                                <p class="text-muted">Dilengkapi dengan video pembelajaran yang sangat hebat, dahsyat, dan bagus banget pokoknya</p>
                            </div>
                            <div class="col-md-4">
                                <span class="icon2">
                                    <i><img src="{{ asset('images/materi.png') }}" alt=""></i>
                                </span>
                                <h4 class="service-heading">Materi</h4>
                                <p class="text-muted">Dilengkapi dengan materi pembelajaran yang sangat hebat, dahsyat, dan bagus banget pokoknya</p>
                            </div>
                            <div class="col-md-4">
                                <span class="icon3">
                                    <i><img src="{{ asset('images/lencana.png') }}" alt=""></i>
                                </span>
                                <h4 class="service-heading">Sistem Poin</h4>
                                <p class="text-muted">Dengan membuat kelas dan menyelasaikan kelas dapat menambah poin yang dapat ditukarkan sembako</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-light page-section" id="team">
                    <div class="container mt-5 fluid">
                        <div class="row mt-5">
                            <div class="col-lg-12 text-center mt-5">
                                <h2 class="section-heading">Kisah Sukses</h2>
                                <h5 class="section-subheading text-muted ">Berikut kisah sukses para alumni See Know yang telah merajai di bidang dunia dan akhirat.</h5>
                            </div>
                        </div>
                            <div class="row md-5">
                                <div class="col-sm-4">
                                    <div class="team-member text-center mt-5">
                                        <img class="mx-auto rounded-circle" src="{{ asset('images/1.jpg') }}" alt="">
                                        <h4>Kay Garland</h4>
                                        <p class="text-muted">See Know is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to See Know, I'm really close. </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-member text-center mt-5">
                                        <img class="mx-auto rounded-circle" src="{{ asset('images/2.jpg') }}" alt="">
                                        <h4>Larry Parker</h4>
                                        <p class="text-muted">I believe in lifelong learning and See Know is a great place to learn from experts. I've learned a lot and recommend it to all my friends. </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-member text-center mt-5">
                                        <img class="mx-auto rounded-circle" src="{{ asset('images/3.jpg') }}" alt="">
                                        <h4>Diana Pertersen</h4>
                                        <p class="text-muted">My children and I LOVE See Know! The courses are fantastic and the instructors are so fun and knowledgeable. I only wish we found it sooner. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="container mt-5 fluid">
                        <h6 class="text-muted text-center">See Know dipercaya oleh perusahaan terkenal</h6>
                    </div>

                    <div class="container mt-5 fluid">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{ asset('images/booking-logo.svg') }}" alt="">
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ asset('images/volkswagen-logo.svg') }}" alt="">
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ asset('images/mercedes-logo.svg') }}" alt="">
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ asset('images/pinterest-logo.svg') }}" alt="">
                            </div>
                            <div class="col-sm-2">
                                    <img src="{{ asset('images/adidas-logo.svg') }}" alt="">
                            </div>
                            <div class="col-sm-2">
                                    <img src="{{ asset('images/eventbrite-logo.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="container" style="margin-top:120px;">
                        <div class="row">
                            <div class="col text-center border-right">
                                <div class="col-8 offset-2">
                                    <h4>Teach on See Know</h4>
                                    <p class="lead" style="font-size:15px;">Teach what you love! See Know gives you the tools to create an online course.</p>
                                    <a href="#" class="btn btn-danger btn-lg">Mulai Mengajar</a>
                                </div>
                            </div>
                    </div>

                    <div class="row mt-5 border-top px-5 pt-5" style="font-size:13px;">
                        <div class="col">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info"><strong>See Know for Business</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info"><strong>Teach on See Know</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">See Know Apps</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">Help and Support</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">Affiliate</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">Sitemaps</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-info">Popular Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <form>
                                <div class="form-group col-7 float-right">
                                    <select class="form-control">
                                        <option><i class="fa fa-bin"></i> English</option>
                                        <option>Yoruba</option>
                                        <option>Igbo</option>
                                        <option>Hausa</option>
                                        <option>Efik</option>
                                        <option>Tiv</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-5" style="font-size:13px">
                        <div class="col pl-5">
                            <img src="{{ asset('images/seeknow.png') }}" class="mr-4" width="100px">
                            <span class="text-muted">Copyright &COPY; <script>document.write(new Date().getFullYear());</script> See Know, Inc.</span>
                        </div>
                        <div class="col">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">Terms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">Privacy Policy and Cookie Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
    </body>
</html>
