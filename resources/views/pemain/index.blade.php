@extends('layouts.app')

@section('content')
    <h1 align='center'>Data Barang</h1>

    <table style=" text-align: center;">
        <thead>
            <tr>
                <th>ID Pemain</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemains as $pemain)
                <tr>
                    <td>{{ $pemain->id_pemain }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
