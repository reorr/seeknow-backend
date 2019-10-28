@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container">
        <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
        <br>
        <h3>In Progress</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{ asset('images/singa.png') }}" class="card-img-top" alt="...">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pelihara Singa di Rumah Sendiri</h5>
                        <p class="card-text">Muktazam Hasbi A</p>
                        <a href="/materi" class="btn btn-primary stretched-link btn-pink">Lanjutkan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{ asset('images/singa.png') }}" class="card-img-top" alt="...">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pelihara Singa di Rumah Tetangga</h5>
                        <p class="card-text">Muktazam Hasbi A</p>
                        <a href="#" class="btn btn-primary stretched-link btn-pink">Lanjutkan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{ asset('images/singa.png') }}" class="card-img-top" alt="...">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pelihara Singa di Rumah Teman</h5>
                        <p class="card-text">Muktazam Hasbi A</p>
                        <a href="#" class="btn btn-primary stretched-link btn-pink">Lanjutkan</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
