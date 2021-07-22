@extends('adminlte::page')
@section('content')
<form action="">
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Kataegori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img src="{{asset($item->foto)}}" alt="" width="200"></td>
              <td>{{$item->name}}</td>
              <td>{{$item->harga}}</td>
              <td>{{$item->Kataegori}}</td>
              <td><a href="{{route('produk.edit', $item->id)}}" class="btn btn-primary">Edit</a>
              <form class="d-inline" action="{{route('produk.destroy',$item->id)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-primary">hapus</button>
              </form>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('produk.create')}}" class="btn btn-primary">+</a>
</form>
@endsection