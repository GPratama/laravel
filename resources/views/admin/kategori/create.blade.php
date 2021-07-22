@extends('adminlte::page')
@section('content')
<form action="{{route('kategori.store')}}" method="POST">
    @csrf
    <div class="container">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">tambah</button>
    </div>
</form>
</form>
@endsection