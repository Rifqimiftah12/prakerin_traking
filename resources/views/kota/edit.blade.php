@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><b>{{ __('Update Data Kota') }}</b></center>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kota.update', $kota->id) }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="" class="form-label">Provinsi</label>
                                <select name="id_provinsi" class="form-control" id="">
                                    @foreach ($provinsi as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $kota->id_provinsi ? 'selected' : '' }}>
                                            {{ $data->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kode Kota</label>
                                <input type="text" name="kode_kota" value="{{ $kota->kode_kota }}" class="form-control"
                                    id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kota</label>
                                <input type="text" name="nama_kota" value="{{ $kota->nama_kota }}" class="form-control"
                                    id="">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
