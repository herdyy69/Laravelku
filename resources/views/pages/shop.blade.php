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
        <legend>BELANJA APA NICH</legend>
        @foreach ($belanja as $belanja)
        <hr>
            ------------------- <br>
            NAMA PEMBELI : {{ $belanja['nama_orang'] }} <br>
            -------------------
            <?php $total = 0; ?>
            @foreach ($belanja['pembelian'] as $item)
           <lI> JENIS {{ $item['jenis'] }} <br> </lI>
           - MERK  : {{ $item['merk'] }} <br>
           - HARGA : {{ $item['harga'] }}
           <hr>
            <?php $total += $item['harga']  ?>
            @endforeach
        @endforeach
        @if($total > 250 && $total <500)
        @php 
        $cashback = (5/100) * $total  @endphp
        @elseif($total >=500)
        @php 
        $cashback = (10/100) * $total  @endphp
        @else
        @endif 
        Total Harga : {{ $total }} <br>
        Cashback : {{ $cashback }}
    </fieldset>
</body>
</html>