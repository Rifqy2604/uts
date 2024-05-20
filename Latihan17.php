<center>

<?php

function total($harga,$jumlah)
{
    $total = $harga * $jumlah;
    return $total;
}

function diskon($harga,$jumlah)
{
    $total = $harga * $jumlah;
    if($total>10000) $diskon = 0.1 * $total;
    else $diskon=0;
    return $diskon;
}

function hasilakhir($harga,$jumlah,$diskon)
{
    $total = $harga * $jumlah - $diskon;
    return $total;
}

$penjualan = array (
    array("BUDI","TEH BOTOL",3000,2),
    array("ASEP","AIR MINERAL",2000,5),
    array("TINA","COCA COLA",4000,3),
    array("TATI","FANTA",3500,5),
    array("RANI","TEH BOTOL",3000,10)
);

echo "<table border=1>
<tr><th> NO<th>PEMBELI <th>BARANG <th>HARGA <th>JUMLAH <th>TOTAL <th>DISKON <th>HASIL AKHIR";

for($i = 0; $i < 5; $i++) {
    echo "<tr>";
    echo "<td>" . $i+1;
    for($j = 0; $j < 4; $j++) {
        
        echo "<td align=center>" . $penjualan[$i][$j];
        
    }
    $harga = $penjualan[$i][2];
    $jumlah = $penjualan[$i][3];
    $diskon = diskon($harga,$jumlah);
    
    echo "<td align=center>". total($harga,$jumlah);
    echo "<td align=center>" . $diskon;
    echo "<td align=center>" . hasilakhir($harga,$jumlah,$diskon);

}

?>