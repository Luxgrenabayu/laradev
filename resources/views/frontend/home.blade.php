@extends('frontend.layout')

@section('header2')
    <header class="bg-primary py-5 mb-5">
        <div class="container text-center text-white">
            <img src="{{ URL::asset('bootstrap/img/logo.png') }}" class="img-fluid">
            <p>Situs yang menyediakan artikel, tutorial pemrogramman web, produk digital &amp; perkembangan dunia teknologi.</p>
            <p style="margin-top: 30px">
                <a class="play-trigger" data-toggle="modal" data-target="#modal-video" data-backdrop="static" data-keyboard="false" style="color: white;font-family: Roboto;font-weight: 400;text-decoration: none;cursor: pointer;"><img class="play-icon" src="{{ URL::asset('bootstrap/img/play-icon.svg') }}" alt="" style="margin-right: 10px;">Lihat Selengkapnya</a>
            </p>
        </div>
    </header>
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100" id="efek">
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100" id="efek">
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100" id="efek">
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 pb-5 text-center">
                <a href="{{ url('/category') }}" class="btn btn-outline-primary" id="efek"> Lihat Series Lainnya <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-align-justify"></i> Artikel Terbaru</h2>
                    <p class="desc-text" style="margin-bottom: 20px; font-size: 18px; font-family: Roboto;">Belajar pemrograman lebih mudah dengan kumpulan artikel yang dapat kamu pelajari langsung dari sebuah studi kasus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3" id="efek">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ URL::asset('bootstrap/img/ionic.png')}}" class="card-img" alt="">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" id="efek">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ URL::asset('bootstrap/img/ionic.png')}}" class="card-img" alt="">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" id="efek">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ URL::asset('bootstrap/img/ionic.png')}}" class="card-img" alt="">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right py-3">
                        <a href="{{ url('/article') }}" class="btn btn-outline-primary" id="efek"> Lihat Artikel Lainnya <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-arrow-alt-circle-right"></i> Kategori
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" id="efek">HTML</li>
                            <li class="list-group-item" id="efek">HTML</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="jumbotron jumbotron-fluid mb-0">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Dapatkan info serta produk digital secara GRATIS!</h2>
                        <form class="form-inline justify-content-center">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Masukan Email">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-envelope"></i> Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 pt-5">
                        <p class="font-weight-bold">FOLLOW ZILUX.ID - Tetap terhubung bersama Zilux.id melalui akun sosial mediamu</p>
                        <a class="mr-2" href=""><img src="{{ URL::asset('bootstrap/img/facebook-with-circle.svg') }}" width="32" height="32" alt="Facebook"></a>
                        <a class="mr-2" href=""><img src="{{ URL::asset('bootstrap/img/twitter-with-circle.svg') }}" width="32" height="32" alt="Twitter"></a>
                        <a class="mr-2" href=""><img src="{{ URL::asset('bootstrap/img/telegram-with-circle.svg') }}" width="32" height="32" alt="Telegram"></a>
                        <a class="mr-2" href=""><img src="{{ URL::asset('bootstrap/img/instagram-with-circle.svg') }}" width="32" height="32" alt="Instagram"></a>
                        <a class="mr-2" href=""><img src="{{ URL::asset('bootstrap/img/youtube-with-circle.svg') }}" width="32" height="32" alt="Youtube"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
            <div class="container my-5">
               <div class="row">
                  <div class="col-md-4 col-sm-12"><img class="w-100 p-4 lazyloaded" src="{{ URL::asset('bootstrap/img/about-section.svg') }}" alt="Zilux Digital"></div>
                  <div class="col-md-8 col-sm-12">
                     <h2 class="my-3">Tentang Kami</h2>
                     <p>Situs yang menyediakan artikel, tutorial pemrogramman web, produk digital &amp; perkembangan dunia teknologi.
                        Tersedia tips dan panduan pemrograman web serta design graphic. Layanan produk dan jasa akan kami berikan. 
                    </p>
                     <a class="btn btn-primary" href="" target="_blank">Join Group!</a>
                  </div>
               </div>
            </div>
         </section>

        <section>
            <div class="jumbotron jumbotron-fluid mb-0 py-5">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 mb-3">
                        <h2>Media Partner</h2>
                        </div>
                        <div class="col-12"><a href="" target="_blank"><img class="col-6 col-sm-4 col-xs-6 col-lg-2 lazyloaded" src="{{ URL::asset('bootstrap/img/about-section.svg') }}" alt="" ></a>
                        <a href="" target="_blank"><img class="col-6 col-sm-4 col-xs-6 col-lg-2 lazyloaded" src="{{ URL::asset('bootstrap/img/about-section.svg') }}" data-src="" alt="" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection