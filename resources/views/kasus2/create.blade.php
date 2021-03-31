@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><b>{{ __('Create Data Kasus Local') }}</b></center>
                    </div>

                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('kasus2.store') }}" method="POST">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col">
                                    @livewire('dropdowns')
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah Positif</label>
                                    <input type="number" name="jumlah_positif" class="form-control" id="" min="1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah Meninggal</label>
                                    <input type="number" name="jumlah_meninggal" class="form-control" id="" min="1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah Sembuh</label>
                                    <input type="number" name="jumlah_sembuh" class="form-control" id="" min="1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
