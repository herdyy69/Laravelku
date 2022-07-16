<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>DATA POST</legend>
        <br>
        <table>
            <tr>
                <th>NOMOR</th>
                <th>ID</th>
                <th>JUDUL</th>
                <th>KONTEN</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($post as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>
                        <a href="{{ url('postindex/'.$data->id) }}">{{ $data->judul }}</a></td>
                    <td>{{ $data->konten }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>