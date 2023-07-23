@extends('layout.master')
@section('content')
<div class="container">
    <h4>Data Peminjam</h4>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Kode Peminjam</th>
            <th>Nama Peminjam</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </thead>
        <tbody>
            @foreach ($data_peminjams as $peminjam)
                <tr>
                    <td>{{ $peminjam->$id }}</td>
                    <td>{{ $peminjam->$kode_peminjam }}</td>
                    <td>{{ $peminjam->$nama_peminjam }}</td>
                    <td>{{ $peminjam->$jenis_kelamin }}</td>
                    <td>{{ $peminjam->$tanggal_lahir }}</td>
                    <td>{{ $peminjam->$alamat }}</td>
                    <td>{{ $peminjam->$pekerjaan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>   
@endsection