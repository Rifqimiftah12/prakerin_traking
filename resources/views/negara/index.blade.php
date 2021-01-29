@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Negara') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('negara.create')}}"class="btn btn-outline-success float-right"><b>Tambah Data(+)</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Negara</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($negara as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_negara}}</td>
                        <td>{{$data->nama_negara}}</td>
                        <form action="{{route('negara.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary btn-sm" href="{{route('negara.show', $data->id)}}"><i class="fa fa-eye"></i></a>|
                                <a class="btn btn-warning btn-sm" href="{{route('negara.edit', $data->id)}}"> <i class="fa fa-edit"></i> </a>|
                                <button type="submit" class="btn btn-danger fa fa-trash-alt btn-sm" onclick="return confirm('Apakah anda yakin ?')"></button>
                        </td>
                      </tr>
                          </form>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
