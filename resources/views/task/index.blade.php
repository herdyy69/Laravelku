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
            <th>NAMA</th>
            <th>NO HANDPHONE</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($karyawan as $karyawan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $karyawan->id }}</td>
                <td> <a href="{{ url('taskindex/karyawan/'.$karyawan->id) }}">{{ $karyawan->nama }}</a></td>
                <td>{{ $karyawan->no_hp }}</td>
            </tr>
        @endforeach
    </table>

    <table>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAMA BIDANG</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($bidang as $bidang)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $bidang->id }}</td>
                <td> <a href="{{ url('taskindex/bidang/'.$bidang->id) }}">{{ $bidang->nama_bidang }}</a> </td>
            </tr>
        @endforeach
    </table>
    
    <table>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAMA JABATAN</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($jabatan as $jabatan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $jabatan->id }}</td>
                <td> <a href="{{ url('taskindex/jabatan/'.$jabatan->id) }}">{{ $jabatan->nama_jabatan }}</a> </td>
            </tr>
        @endforeach
    </table>
</body>
</html>