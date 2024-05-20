<h1>
<?php

function luas($panjang,$lebar)
{
    $Luas = $panjang * $lebar;
    return $Luas;
}

function keliling($panjang,$lebar)
{
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
}

$panjang = 10;
$lebar = 5;

echo "Panjang $panjang <br>";
echo "Lebar $lebar <br>";
echo "Luas Persegi Panjang : ".luas($panjang,$lebar);

echo "<hr> <br> Keliling Persegi Panjang : ". keliling($panjang,$lebar);

?>