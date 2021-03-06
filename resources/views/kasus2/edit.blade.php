@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <p>Update Data Kasus Local</p>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kasus2.update', $kasus2->id) }}" method="POST">
                            <input type="hidden" name="_method" value="put">
                            @csrf
                            @method('PUT')
                            @livewire('dropdowns', ['selectedRw' => $kasus2->id_rw, 'idt' => $kasus2->id])

                            <div class="form-group">
                                <label for="">Jumlah Positif</label>
                                <input type="number" name="jumlah_positif" class="form-control" id="exampleInputEmail1"
                                    min="1" value="{{ $kasus2->jumlah_positif }}">
                                @if ($errors->has('jumlah_positif'))
                                    <span class="text-danger">{{ $errors->first('jumlah_positif') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Meninggal</label>
                                <input type="number" name="jumlah_meninggal" class="form-control" id="exampleInputEmail1"
                                    min="1" value="{{ $kasus2->jumlah_meninggal }}">
                                @if ($errors->has('jumlah_meninggal'))
                                    <span class="text-danger">{{ $errors->first('jumlah_meninggal') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Sembuh</label>
                                <input type="number" name="jumlah_sembuh" class="form-control" id="exampleInputEmail1"
                                    min="1" min="1" value="{{ $kasus2->jumlah_sembuh }}">
                                @if ($errors->has('jumlah_sembuh'))
                                    <span class="text-danger">{{ $errors->first('jumlah_sembuh') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                    value="{{ $kasus2->tanggal }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
