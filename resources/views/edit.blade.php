@extends('master')
@section('konten')

<div class="form-group">
    <form method="POST" action="{{ url('/update/'.$barangs->id) }}">

    {{ csrf_field() }}
    @method('put')
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang" value="{{$barangs->nama_barang}}" id="nama_barang" class ="form-control"> </br>


    <label for="price">Price</label>
    <input type="price" name="price" value="{{$barangs->price}}" id="price" class ="form-control"> </br>

    <label for="stock">Stock</label>
    <input type="stock" name="stock" value="{{$barangs->stock}}" id="stock" class ="form-control"> </br>

    <input type="submit" value="Save" class="btn btn-success">
</form>
</div>
@stop