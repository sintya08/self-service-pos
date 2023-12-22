@extends('master')
@section('konten')

<div class="form-group">
    <form method="POST" action="{{ url('/store') }}">


    {{ csrf_field() }}
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang" id="nama_barang" class ="form-control"> </br>


    <label for="price">Price</label>
    <input type="price" name="price" id="price" class ="form-control"> </br>

    <label for="stock">Stock</label>
    <input type="stock" name="stock" id="stock" class ="form-control"> </br>

    <input type="submit" value="Save" class="btn btn-success custom-width">
</form>
</div>
@stop