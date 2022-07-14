<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-5">
            <fieldset>
                <legend>JADWAL ACARA TV</legend>
                @foreach($televisi as $tv)
                    ------------------------- <br>
                    NAMA ACARA : {{ $tv['nama_channel'] }} <br>
                    -- <br>
                    @foreach($tv['jadwal'] as $jadwal)
                    Acara : {{ $jadwal['nama'] }} <br>
                    Jam Tayang : {{ $jadwal['jam_tayang'] }} <br>
                    @endforeach
                    -------------------------- <br>
                @endforeach
            </fieldset>
        </div>
    </div>
</body>
</html>