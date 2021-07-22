@extends('adminlte::page')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id_kategori</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
              <td>
                <a href="{{route('kategori.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                <form class="d-inline" action="{{route('kategori.destroy',$item->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-primary">hapus</button>
                </form>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('kategori.create')}}" class="btn btn-primary">tambah</a>
@endsection