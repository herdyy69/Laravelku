<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>PESANAN</h1>
            @if($makanan == "mie goreng")
            <p>Nama Makanan : {{$makanan}}</p>
            @elseif($makanan == "mie kuah")
            <p>Nama Makanan : {{$makanan}}</p>
            @elseif($makanan == "seblak")
            <p>Nama Makanan : {{$makanan}}</p>
            @else
            {{ $harga_makanan = "belum diketahui"; }}
            @endif 
        </div>
    </div>

    <h4>   
        Saya Memesan  <br>
        Makanan : {{ $makanan }} <br>
        Minuman : {{ $minuman }} <br>
        Cemilan : {{ $cemilan }} <br>
        Harga Makanan  : 
            @if($makanan == "mie goreng")
            {{ $harga_makanan = 5000;}}
            @elseif($makanan == "seblak")
            {{ $harga_makanan = 7500; }}
            @elseif($makanan == "mie kuah")
            {{ $harga_makanan = 5000; }}
            @else
            {{ $harga_makanan = "belum diketahui"; }}
            @endif 
        <br>
        Harga Minuman :
        @if($minuman == "kopi")
        {{ $harga_minuman = 5000;}}
        @elseif($minuman == "jus")
        {{ $harga_minuman = 7500; }}
        @elseif($minuman == "teh")
        {{ $harga_minuman = 5000; }}
        @else
        {{ $harga_minuman = "belum diketahui"; }}
        @endif 
        <br>
        Harga Cemilan :
        @if($cemilan == "kacang")
        {{ $harga_cemilan = 3000;}}
        @elseif($cemilan == "sukro")
        {{ $harga_cemilan = 2500; }}
        @elseif($cemilan == "pilus")
        {{ $harga_cemilan = 1000; }}
        @else
        {{ $harga_cemilan = "belum diketahui"; }}
        @endif 
        <br>
        Pemesan : {{ $pemesan }}
    </h4>
</body>
</html>