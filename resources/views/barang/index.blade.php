@extends('layouts.app')

@section('content')
    <h1>Data Barang</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
