<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
        @foreach ($dosen as $dosen)
            Nama : {{ $dosen['namad'] }} <br>
            Mata Kuliah : {{ $dosen['matkul'] }}
            <?php $nilai_b = 0 ?>
            @foreach($dosen['mahasiswa'] as $mahasiswa)
                <li>Nama mahasiswa : {{ $mahasiswa['nama'] }}</li>
                <li>Nilai : {{ $mahasiswa['nilai'] }}</li>
                <?php $nilai_b += $mahasiswa['nilai'] ?>
            @endforeach
            <hr>
            NILAI = {{ $nilai_b }} <br>
            RATA-RATA  = {{ $nilai_b / count($dosen['mahasiswa']) }} <br>
            <hr>
        @endforeach
    </fieldset>
</body>
</html>
</body>
</html>