<?php
$nim = 'I';
$nama = "Muhammad Rifky Al Fadry";
$umur = 18;
$nilai = 82.25;
$status = TRUE;

echo "---Belajar Tipe Data --- <br><br>";
echo "Tipe Data Char : " . $nim . "<br>";
echo "Tipe Data String : $nama<br>";
print "Tipe Data Int : " . $umur;
print "<br>";
print("Tipe Data Float : %.5f<br><br>".$nilai);
echo "Tipe Data Boolean : <br><Br>";
if ($status)
    echo"Status : Aktif";
else
    echo"Status: Tidak Aktif";
?> 
