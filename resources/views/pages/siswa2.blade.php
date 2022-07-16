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
        <legend>NILAI SISWA</legend>
        @foreach ($siswa as $murid)
        @php
            $nilai_s = 0;
        @endphp
        <hr>
            NAMA SISWA : {{ $murid['nama_siswa'] }} <br>
            JURUSAN : {{ $murid['jurusan'] }} <br>
            <hr> 
            @foreach ($murid['nilai'] as $nilai)
                MATA PELAJARAN : {{ $nilai['matpel'] }} <br>
                NILAI MATA PELAJARAN : {{ $nilai['nilai'] }} <br>
                ------ <br>
                @php
                    $nilai_s += $nilai['nilai'];
                @endphp
                
            @endforeach
            @php
                $nr = $nilai_s / 4;
            @endphp
            NILAI RATA-RATA : {{ $nr }} <br>
            
            @if ($nr >= 85 && $nr <= 100)
                GRADE : A
            @elseif ($nr >= 75 && $nr <= 84)
                GRADE : B
            @elseif ($nr >= 60 && $nr <= 75)
                GRADE : C
            @elseif ($nr >= 50 && $nr <= 59)
                GRADE : D
            @else
                GRADE : E
            @endif
            <br>
            ------ <br>
        @endforeach
        
    </fieldset>
</body>
</html>