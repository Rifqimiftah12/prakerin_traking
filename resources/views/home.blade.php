@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><b>{{ __('Traking Covid') }}</b></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center><b>
                                <h2>SELAMAT DATANG DI HALAMAN BACKEND TRAKING COVID</h2>
                            </b></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
