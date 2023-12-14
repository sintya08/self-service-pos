@extends('master')
@section('konten')

<div class="form-group">
<form action="/read" method="post">

    {{ csrf_field() }}
    <label for="nama">Nama Barang</label>
    <input type="text" name="nama" id="name" class ="form-control"> </br>


    <label for="email">Price</label>
    <input type="email" name="email" id="email" class ="form-control"> </br>

    <label for="Alamat">Stock</label>
    <input type="alamat" name="alamat" id="alamat" class ="form-control"> </br>

    <input type="submit" value="Save" class="btn btn-success">
</form>
</div>
@stop