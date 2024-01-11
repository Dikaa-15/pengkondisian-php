<?php

$program = "<h3>==== Program Menghitung Nilai Akhir ====</h3>";
echo "$program";

$nilaiharian = 90 * 30 / 100;
$nilaiuts = 80 * 30 / 100;
$nilaiuas = 85 * 40 / 100;
$nilaiakhir = + $nilaiharian + $nilaiuts + $nilaiakhir;

echo "nama : Dwi andika F <br />";
echo "kelas : X RPL 2 <br />";
echo " nilai harian : $nilaiharian <br />";
echo " nilai uts : $nilaiuts <br />";
echo " nilai uas : $nilaiuas <br />";
echo " nilai akhir : $nilaiakhir <br />";


if($nilaiakhir >= 90 && $nilaiakhir <= 100){
    echo "predikat : A+";
} else if($nilaiakhir >= 85 && $nilaiakhir <= 89){
    echo "predikat : A";
} else if($nilaiakhir >= 84 && $nilaiakhir <= 84){
    echo "predikat : B+";
} else if($nilaiakhir >= 76 && $nilaiakhir <= 79){
    echo "predikat : B";
} else if($nilaiakhir >= 60 && $nilaiakhir <= 75){
    echo "predikat : C";
} else if($nilaiakhir >= 40 && $nilaiakhir <= 59){
    echo "predikat : D";
} else if($nilaiakhir >= 0 && $nilaiakhir <= 39){
    echo "predikat : E";
}







?>