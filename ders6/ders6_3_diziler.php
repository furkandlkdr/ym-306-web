<?php
$dizi = array(2, 4, 6, 8, 10, 12);
$dizi2 = array("Kayseri", "Ankara", "Istanbul");

// echo $dizi; // Bu şekilde diziyi ekrana yazdıramayız. Dizinin elemanlarını tek tek yazdırmalıyız.
echo "<br>";
echo $dizi[0]; // 2
echo "<br>";
$dizi[0] = 20; // Dizinin ilk elemanını 20 yapıyoruz.
echo $dizi[0]; // 20
echo "<br>";

$dizi3[0] = 1; // Dizinin ilk elemanını 1 yapıyoruz.
$dizi3[1] = 2; // Dizinin ikinci elemanını 2 yapıyoruz.
$dizi3[2] = 3; // Dizinin üçüncü elemanını 3 yapıyoruz.
echo "<br>";
echo $dizi3[0]; // 1
echo "<br>";

echo "Dizinin eleman sayısı: " . count($dizi); // Dizinin eleman sayısını yazdırıyoruz.
echo "<br> <br>";

for($i = 0; $i < count($dizi); $i++) { // Dizinin elemanlarını tek tek yazdırıyoruz.
    echo "Dizinin " . ($i+1) . ". elemanı: " . $dizi[$i] . "<br>";
}
echo "<br> <br>";
// Çok fazla fonksiyon var hepsini gösteremem işimize yarayanları göstereceğiz

echo rand(); // 0 ile 32767 arasında rastgele bir sayı üretir.
echo "<br>";
echo rand(1, 100); // 1 ile 100 arasında rastgele bir sayı üretir.  Sayılar arasında 1 ve 100 dahil.
echo "<br>";

?>