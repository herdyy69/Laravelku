<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>NAMA PEMBELI</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($Barang as $Barang)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $Barang->id }}</td>
                <td> <a href="{{ url('taskindex/bidang/'.$Barang->id) }}">{{ $Barang->nama_barang }}</a> </td>
                <td>{{ $Barang->harga }}</td>
                <td>{{ $Barang->stok }}</td>
                <td>{{ $Barang->nama_supplier }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
    <table>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAMA SUPPLIER</th>
            <th>NO TELP</th>
            <th>ALAMAT</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($Supplier as $Supplier)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $Supplier->id }}</td>
                <td> <a href="{{ url('taskindex/bidang/'.$Supplier->id) }}">{{ $Supplier->nama_supplier }}</a> </td>
                <td>{{ $Supplier->no_telp }}</td>
                <td>{{ $Supplier->alamat }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
</table>
<hr>
<table>
    <tr>
        <th>NO</th>
        <th>ID</th>
        <th>NAMA PEMBELI</th>
        <th>jk</th>
        <th>no_telp</th>
        <th>Alamat</th>
    </tr>
    @php
        $no = 1;
    @endphp
    @foreach ($Pembeli as $Pembeli)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $Pembeli->id }}</td>
            <td> <a href="{{ url('taskindex/bidang/'.$Pembeli->id) }}">{{ $Pembeli->nama_pembeli }}</a> </td>
            <td>{{ $Pembeli->jk }}</td>
            <td>{{ $Pembeli->no_telp }}</td>
            <td>{{ $Pembeli->alamat }}</td>
        </tr>
    @endforeach
</table>
<hr>
<table>
    <tr>
        <th>NO</th>
        <th>ID</th>
        <th>tgl_bayar</th>
        <th>ttb</th>
        <th>kt</th>
    </tr>
    @php
        $no = 1;
    @endphp
    @foreach ($Pembayaran as $Pembayaran)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $Pembayaran->id }}</td>
            <td> <a href="{{ url('taskindex/bidang/'.$Pembayaran->id) }}">{{ $Pembayaran->tgl_bayar }}</a> </td>
            <td>{{ $Pembayaran->total_bayar }}</td>
            <td>{{ $Pembayaran->kode_transaksi }}</td>
        </tr>
    @endforeach
</table>
<hr>
<table>
    <tr>
        <th>NO</th>
        <th>ID</th>
        <th>nama_barang</th>
        <th>n p</th>
        <th>tgl</th>
        <th>ket</th>
    </tr>
    @php
        $no = 1;
    @endphp
    @foreach ($Transaksi as $Transaksi)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $Transaksi->id }}</td>
            <td> <a href="{{ url('taskindex/bidang/'.$Transaksi->id) }}">{{ $Transaksi->nama_barang }}</a> </td>
            <td>{{ $Transaksi->nama_pembeli }}</td>
            <td>{{ $Transaksi->tanggal }}</td>
            <td>{{ $Transaksi->keterangan }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>