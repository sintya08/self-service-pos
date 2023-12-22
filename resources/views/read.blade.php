@extends('master')
@section('konten')

<table class="table table-bordered">
    <thead class="">
    <tr>
        <th>Nama Barang</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Opsi</th>
    </tr>
</thead>
<tbody>
    @foreach ($barangs as $barang)
        <tr>
            <th class="">{{ $barang->nama_barang }}</th>
            <td>Rp. {{ $barang->price }}</td>
            <td>{{ $barang->stock }}</td>
            <td>
                <a href="{{ url('/edit/'.$barang->id) }}"><button class="btn btn-warning">Edit</button></a>
                        |
                <a href="{{ url('/destroy/'.$barang->id) }}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @endforeach
</tbody>
</table>
<div class="text-center">
    {{ $barangs->links('vendor.pagination.bootstrap-4') }}
</div>
<div class="my-6">
<a href="/create" class="py-2 px-4 rounded bg-green-700 shadow-md text-white hover:bg-green-900 focus:outline-none">Kembali</a>
</div>
@endsection 