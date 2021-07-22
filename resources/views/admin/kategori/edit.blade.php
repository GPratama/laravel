@extends('adminlte::page')
@section('content')
<form action="{{route('kategori.update',$kategori->id)}}" method="post" >
    @csrf
    @method('put')
<div class="container">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value={{"$kategori->name"}} required>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
@endsection