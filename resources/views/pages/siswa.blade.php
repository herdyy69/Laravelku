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
        <legend>DATA SISWA</legend>
        @foreach ($siswa as $murid)
            @if ($murid['age'] >= 17)
            Nama : {{ $murid['nama'] }} <br>
            Umur : {{ $murid['age'] }} <br>
            Status : PUNYA KTP
            @else 
            Nama : {{ $murid['nama'] }} <br>
            Umur : {{ $murid['age'] }} <br>
            Status : BELUM PUNYA KTP
            @endif
            @foreach($murid['hobi'] as $hobi)
            <li>{{ $hobi }}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>
</html>