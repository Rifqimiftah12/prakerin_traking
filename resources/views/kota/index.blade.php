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
                <div class="card-header"><b>{{ __('Data Kota') }}</b>
                <a href="{{route('kota.create')}}" class="float-right btn btn-primary">Tambah Data(+)</a>
            </div>

            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <table class="table table-bordered" id="datatable">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kode Kota</th>
                        <th scope="col">Nama Kota</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kota as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->provinsi->nama_provinsi}}</td>
                        <td>{{$data->kode_kota}}</td>
                        <td>{{$data->nama_kota}}</td>
                        <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary btn-sm" href="{{route('kota.show', $data->id)}}"><i class="fa fa-eye"></i></a>|
                                <a class="btn btn-warning btn-sm" href="{{route('kota.edit', $data->id)}}"> <i class="fa fa-edit"></i> </a>|
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