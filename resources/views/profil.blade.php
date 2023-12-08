<h1>Profil BTS</h1>
<hr>
<table border='0'>
    @if($nama == 'Jimin')
    <tr>
        <td>Nama Lengkap</td>
        <td>{{ $nama }}</td>
    </tr>
    @else
    <tr>
        <td>Nama Lengkap</td>
        <td>Park Jimin</td>
    </tr>
    @endif
<table>
@if($nama == 'Taehyung')
<tr>
    <td>Nama Lengkap</td>
    <td>{{ $nama }}</td>
</tr>
@else
<tr>
    <td>Nama Lengkap</td>
    <td>Kim Taehyung</td>
</tr>
@endif
<table>
<hr>
<h1>Contoh Pengulangan</h1>
<table>
    @forelse($data_array as $data)
        <tr>
            <td>Nama</td>
            <td>{{ $data }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="2">Data Masih Kosong</td>
        </tr>
    @endforelse
</table>
<hr>
<h1>Contoh Pengulangan Ke2</h1>
<table> 
    @forelse($data_array as $data)
    <tr>
        <td>Nama</td>
        <td>{{ $data }}</td>
    <tr>
    @empty
    <tr>
        <td colspan="3">Data Ada</td>
    <tr>
    @endforelse
<table>
@foreach ($data_array as $data)
<tr>
    <td>This is user {{ $data->id }}</td>
<tr>
@endforeach
<table>
