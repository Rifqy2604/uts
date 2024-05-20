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

$penjualan = array (
    array("BUDI","TEH BOTOL",3000,2),
    array("ASEP","AIR MINERAL",2000,5),
    array("TINA","COCA COLA",4000,3),
    array("TATI","FANTA",3500,5),
    array("RANI","TEH BOTOL",3000,10)
);

echo "<table border=1>
<tr><th>PEMBELI <th>BARANG <th>HARGA <th>JUMLAH <th>TOTAL <th>DISKON";

for($i = 0; $i < 5; $i++) {
    echo "<tr>";
    for($j = 0; $j < 4; $j++) {
        echo "<td align=center>" . $penjualan[$i][$j];
        
    }
    echo "<td align=center>". total($penjualan[$i][2], $penjualan[$i][3]);
    echo "<td align=center>" . diskon($penjualan[$i][2], $penjualan[$i][3]);
}

?>