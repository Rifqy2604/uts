    <?php

    function hargatiket($kota,$kelas){
        for($i = 0; $i <6; $i++){
            if($kota[$i] == "BOGOR"){
                if($kelas[$i] == "EKONOMI")
                    $harga[$i] = 50000;
                if($kelas[$i] == "BISNIS")
                    $harga[$i] = 60000;
                if($kelas[$i] == "EKSEKUTIF")
                    $harga[$i] = 75000;
            }
            if($kota[$i] == "CIREBON"){
                if($kelas[$i] == "EKONOMI")
                    $harga[$i] = 70000;
                if($kelas[$i] == "BISNIS")
                    $harga[$i] = 85000;
                if($kelas[$i] == "EKSEKUTIF")
                    $harga[$i] = 110000;
            }
            if($kota[$i] == "JAKARTA"){
                if($kelas[$i] == "EKONOMI")
                    $harga[$i] = 75000;
                if($kelas[$i] == "BISNIS")
                    $harga[$i] = 90000;
                if($kelas[$i] == "EKSEKUTIF")
                    $harga[$i] = 100000;
            }
        }
        return $harga;
        
    }

    function totalsemua($harga){
        $total = 0;
        for ($i = 0; $i<6; $i++ ){
            $total += $harga[$i];
        }
        return $total;
    }

    echo "<center> <h1> PENJUALAN TIKET";
    echo "<hr>";

    #table
    echo "<table border=10>";
    echo "<th>NO <th>NAMA PENUMPANG <th>KOTA TUJUAN <th>KELAS <th>HARGA TIKET";

    $namapenumpang = array("ADI","BUDI","TINI","RENO","DEWI","RIDA");
    $kota = array("CIREBON","JAKARTA","BOGOR","BOGOR","CIREBON","CIREBON");
    $kelas = array("EKONOMI","EKSEKUTIF","BISNIS","EKONOMI","EKSEKUTIF","BISNIS");

    $harga = hargatiket($kota,$kelas);
    for($i = 0; $i <6; $i++){
        echo "<tr>";
        echo "<td>" . $i + 1;
        echo "<td>" . $namapenumpang[$i];
        echo "<td>" . $kota[$i];
        echo "<td>" . $kelas[$i];
        echo "<td>" . $harga[$i];       
    }
    $total = totalsemua($harga);

    echo "<tr><td colspan='4' align='center'>TOTAL SEMUA</td><td>" . $total . "</td></tr>";


    
        
    ?>
</center>