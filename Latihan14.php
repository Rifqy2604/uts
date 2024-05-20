<h1>halo</h1>

<?php
function halo()
{
    echo "Selamat siang <br>";
}

function salam($pesan, $nama)
{
    echo "$pesan";
    echo " perkenalkan  Nama Saya $nama";
}

function usia($sekarang, $lahir)
{
    $usia = $sekarang-$lahir;
    return $usia;
}

halo();
halo();
salam("Haloo Guys ","Sintia");
echo " Umur Saya Adalah ". usia(2024,2000) . "Tahun";


?>