@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session('message'))
                <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message') }}
                </div>
            @elseif(session('message1'))
                <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message1') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header"><b>{{ __('Data Kelurahan') }}</b>
                <a href="{{route('kelurahan.create')}}" class="float-right btn btn-primary">Tambah Data(+)</a>
            </div>

            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <table class="table table-bordered" id="datatable">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kode Kelurahan</th>
                        <th scope="col">Nama Kelurahan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kelurahan as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kecamatan->nama_kecamatan}}</td>
                        <td>{{$data->kode_kelurahan}}</td>
                        <td>{{$data->nama_kelurahan}}</td>
                        <form action="{{route('kelurahan.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary btn-sm" href="{{route('kelurahan.show', $data->id)}}"><i class="fa fa-eye"></i></a>|
                                <a class="btn btn-warning btn-sm" href="{{route('kelurahan.edit', $data->id)}}"> <i class="fa fa-edit"></i> </a>|
                                <button type="submit" class="btn btn-danger fa fa-trash-alt btn-sm" onclick="return confirm('Apakah anda yakin ?')"></button>
                        </td>
                      </tr>
                                    @endforeach
                            </tbody>  
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection