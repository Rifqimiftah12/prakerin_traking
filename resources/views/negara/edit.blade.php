@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Negara') }}</b></center></div>

                <div class="card-body">
                <form action="{{route('negara.update', $negara->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Negara</label>
                        <input type="text" name="kode_negara" value="{{$negara->kode_negara}}" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nsegara</label>
                        <input type="text" name="nama_negara" value="{{$negara->nama_negara}}" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
