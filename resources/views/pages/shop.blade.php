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
           - HARGA : {{ number_format($item['harga'],0,",",".")  }}
           <hr>
            <?php $total += $item['harga']  ?>
            
            @endforeach
        @if($total > 250000 && $total <500000)
        @php 
        $cashback = (5/100) * $total  @endphp
        @elseif($total >=500)
        @php 
        $cashback = (10/100) * $total  @endphp
        @else
        @endif 
        Harga : {{ number_format($total,0,",",".")  }} <br>
            Cashback : {{ number_format($cashback,0,",",".") }} <br>
            Total Harga : {{ number_format($total - $cashback,0,",",".")  }}
        @endforeach
    </fieldset>
</body>
</html>