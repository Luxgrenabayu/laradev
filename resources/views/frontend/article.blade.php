@extends('frontend.layout')

@section('header2')
    @include('frontend.includes.header2')
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100" id="efek">
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100" id="efek">
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100" id="efek"> 
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100" id="efek">
                    <img class="card-img-top" src="{{ URL::asset('bootstrap/img/ionic.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="/ionic-untuk-pemula/">Belajar Membuat Aplikasi Android Menggunakan Ionic Framework (untuk Pemula)</a></h5>
                    </div>
                </div>
            </div>
        </div>
       <!-- /.row -->

        <div class="row py-5">
            <div class="col-12 pb-5 text-center">
                <a href="" class="btn btn-outline-primary" id="efek"> Lihat Series Lainnya <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection