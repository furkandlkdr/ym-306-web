<?php

function fnk_parametresiz()
{
    echo "Parametresiz, değer döndermeyen fonksiyon çalıştı." . "<br>";
}

fnk_parametresiz();

function fnk_parametreli($parametre)
{
    echo "Parametreli, değer döndermeyen fonksiyon çalıştı. Parametre: " . $parametre . "<br>";
}

fnk_parametreli("Merhaba Dünya!");
fnk_parametreli(1234);
fnk_parametreli(true);

function fnk_toplam_yazdir($a, $b)
{
    echo $a + $b . "<br>";
}

fnk_toplam_yazdir(5, 10);

function fnk_dg($a, $b)
{
    $tpl = $a + $b;
    return $tpl; // Değer döndüren fonksiyon
}

$tpl = fnk_dg(5, 10); // Değer döndüren fonksiyon çağrıldı ve sonucu $tpl değişkenine atandı.
echo "Sonuç: " . $tpl . "<br>";

// (2X + Y!) / (4T - K) formülü ile hesaplama yapan bir fonksiyon yazalım.
function fnk_formul_hesapla($x, $y, $t, $k)
{
    $y_fakt = 1;
    for ($i = 1; $i <= $y; $i++) {
        $y_fakt *= $i;
    }
    $pay = (2 * $x) + $y_fakt;
    $payda = (4 * $t) - $k;
    if ($payda == 0) {
        return "Payda sıfır olamaz!";
    } else {
        return $pay / $payda;
    }
}

echo fnk_formul_hesapla(2, 3, 4, 5) . "<br>";

include "ders6_5.php"; // include ile başka bir dosyayı ekleyebiliriz.

?>