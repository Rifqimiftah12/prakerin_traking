@extends('layouts.admin')

@section('content')
    <div class="container">
        <p class="masthead-subheading font-weight-light mb-0">
        <h5>
            <center><b>Coronavirus Indonesia & Global</b></center>
        </h5>
        </p>
        <br>
        <div class="row h-50 align-items-center justify-content-center text-center">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-danger img-card box-primary-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="text-white mb-0">Positif</p>
                                <h2 class="mb-0 number-font">{{ number_format($positif) }}</h2>
                                <p class="text-white mb-0">Orang</p>
                            </div>
                            <div class="ml-auto"> <img src="{{ asset('assets/assets/img/sedih.png') }}" width="50"
                                    height="50"> </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <br>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-dark img-card box-primary-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="text-white mb-0">Meninggal</p>
                                <h2 class="mb-0 number-font">{{ number_format($meninggal) }}</h2>
                                <p class="text-white mb-0">Orang</p>
                            </div>
                            <div class="ml-auto"> <img src="{{ asset('assets/assets/img/sedih1.png') }}" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <br>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-success img-card box-primary-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="text-white mb-0">Sembuh</p>
                                <h2 class="mb-0 number-font">{{ number_format($sembuh) }} </h2>
                                <p class="text-white mb-0">Orang</p>
                            </div>
                            <div class="ml-auto"> <img src="{{ asset('assets/assets/img/senang.png') }}" width="50"
                                    height="50"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <br>
        {{-- <div class="container">
            <div class="section-title" data-aos="zoom-out">
                <h5>
                    <center><b>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</b></center>
                </h5>
            </div>
            <div class="row row-cards">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
                                <table class="table table-bordered table-striped mb-0 " width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Provinsi</th>
                                            <th scope="col">Positif</th>
                                            <th scope="col">Sembuh</th>
                                            <th scope="col">Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $tmpl)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $tmpl->nama_provinsi }}</td>
                                                <td>{{ number_format($tmpl->jumlah_positif) }}</td>
                                                <td>{{ number_format($tmpl->jumlah_sembuh) }}</td>
                                                <td>{{ number_format($tmpl->jumlah_meninggal) }}</td>
                                    </tbody>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- COL END -->
                    </div> --}}
    @endsection
