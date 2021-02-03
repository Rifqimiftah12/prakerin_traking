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
                <div class="card-header"><center><b>{{ __('Data Rw') }}</b></center>
            </div>

            <div class="card-body">
            <a href="{{route('rw.create')}}" class="float-right btn btn-outline-primary">Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Rw</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($rw as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kelurahan->nama_kelurahan}}</td>
                        <td>{{$data->nama}}</td>
                        <form action="{{route('rw.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary btn-sm" href="{{route('rw.show', $data->id)}}"><i class="fa fa-eye"></i></a>|
                                <a class="btn btn-warning btn-sm" href="{{route('rw.edit', $data->id)}}"> <i class="fa fa-edit"></i> </a>|
                                <button type="submit" class="btn btn-danger fa fa-trash-alt btn-sm" onclick="return confirm('Apakah anda yakin ?')"></button>
                        </td>
                      </tr>
                                    @endforeach
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection