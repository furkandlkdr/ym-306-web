# Web Programlama Ders Notları: HTML, PHP ve MySQL

Bu doküman, web programlama derslerinde incelenen PHP, HTML ve MySQL konularının kapsamlı bir özetini sunmaktadır.

## 1. Temel HTML Yapısı ve PHP Etkileşimi

### Formların Yapısı ve Veri Gönderme

HTML formları, kullanıcıdan veri toplayıp PHP betiklerine göndermek için kullanılır. Formların temel bileşenleri:

- `form` etiketi: `action` özelliği (verilerin gönderileceği PHP dosyası) ve `method` özelliği (GET veya POST) içerir
- `input` etiketleri: Çeşitli `type` değerleriyle (text, submit vb.) kullanıcı girişi alır
- `name` özelliği: PHP'de verilere erişmek için kullanılan anahtar

**Örnek Form Yapısı:**

```html
<form name="form1" method="post" action="ders3_2.php">
  <table width="425" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="122">Sayı:1</td>
      <td width="172"><input type="text" name="deger1" id="textfield"></td>
    </tr>
    <tr>
      <td>Sayı2</td>
      <td><input type="text" name="deger2" id="textfield2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="button" id="button" value="TOPLA">
      </td>
    </tr>
  </table>
</form>
```

Bu form, iki sayı girişi alıp "TOPLA" düğmesine basıldığında verileri `ders3_2.php` dosyasına POST metoduyla gönderir.

## 2. Temel PHP Konuları

### Sözdizimi ve Değişkenler

PHP kodları `<?php` ve `?>` etiketleri arasına yazılır. Değişkenler `$` işareti ile başlar.

```php
<?php
// Değişken tanımlama
$str = "php kodlamaya başlıyoruz";
echo $str;

// Sayısal değişkenler
$a = 5;
$b = 8;
echo $a;

// Değişkenleri birleştirme
echo "Sonuç=" . $tpl;
?>
```

PHP'de değişkenler dinamik olarak tiplendirilir, yani önceden tanımlamaya gerek yoktur.

### Operatörler

PHP'de yaygın kullanılan operatörler:

```php
// Matematiksel Operatörler
$a = 5;
$b = 8;
$tpl = $a + $b; // Toplama
echo "Sonuç=" . $tpl;
echo "Mod=" . $a % $b; // Mod alma

// Karşılaştırma Operatörleri
// <, >, <=, >=, ==, !=

// Mantıksal Operatörler 
// && (ve), || (veya)
```

### Diziler (Arrays)

PHP'de diziler indeksli veya ilişkisel olabilir:

```php
<?php
// İndeksli dizi tanımlama
$dizi = array(2, 4, 6);
$dizi2 = array('kayseri', 'ankara', 'istanbul');

// Dizi elemanına erişim
echo $dizi[0]; // 2 yazdırır
$dizi[0] = 8; // Değer değiştirme

// Alternatif dizi tanımlama
$dizi3[0] = 1;
$dizi3[1] = 3;
$dizi3[2] = 5;

// Dizi eleman sayısı
echo "Dizinin eleman sayısı: " . count($dizi3);

// Diziyi döngü ile yazdırma
for($i = 0; $i < count($dizi3); $i++) {
    echo "Dizinin " . ($i+1) . ". elemanı " . $dizi3[$i];
    echo '<br>';
}
?>
```

### Kontrol Yapıları ve Döngüler

#### If-Else Yapısı

```php
<?php
if(false) {
    echo "if içerisindeyiz";
} else if(false) {
    // Boş
} else if(true) {
    // Boş
} else {
    echo "else içerisindeyiz";
}

// Pratik bir örnek
$a = 6;
$b = 3;
$str = "Büyük Sayı : ";
if($a > $b) {
    echo $str . $a;
} else {
    echo "Büyük Sayı : " . $b;
}
?>
```

#### For Döngüsü

```php
<?php
// For döngüsü
for($i = 0; $i <= 5; $i = $i + 1) {
    echo $i;
}

// Pratik bir örnek - belirli aralıktaki çift sayıları sayma
$tpl = 0;
for($i = $ks; $i <= $bs; $i++) {
    if($i % 2 == 0) {
        $tpl = $tpl + 1;
    }
}
?>
```

#### While Döngüsü

```php
<?php
$i = 0;
while($i <= 5) {
    echo $i;
    $i = $i + 1;
}

// Pratik bir örnek - 3 ve 5'e bölünebilen sayıların toplamı
$tpl = 0;
while($ks <= $bs) {
    if(($ks % 3 == 0) && ($ks % 5 == 0)) {
        $tpl = $tpl + $ks;
    }
    $ks++;
}
?>
```

### Rastgele Sayı Üretme

```php
<?php
// Rastgele sayı üretme
echo rand(); // Varsayılan aralıkta rastgele sayı
echo rand(10, 20); // 10 ile 20 arasında rastgele sayı

// Rastgele sayılardan dizi oluşturma
for($i = 0; $i < $_POST['boyut']; $i++) {
    echo $dizi[$i] = rand($_POST['deger1'], $_POST['deger2']);
    echo '<br>';
    $tpl = $tpl + $dizi[$i];
}
?>
```

### Fonksiyonlar

PHP'de fonksiyonlar `function` anahtar sözcüğü ile tanımlanır:

```php
<?php
// Parametresiz fonksiyon
function fnk_parametresiz() {
    echo "parametresiz fonksiyon çalıştı";
}

// Parametreli fonksiyon
function fnk_parametreli($a, $b, $c) {
    echo $a + $b + $c;
}

// Değer döndüren fonksiyon
function fnk_dg($a, $b) {
    $tpl = $a + $b;
    return $tpl;
}

$toplam = fnk_dg(4, 5);
echo $toplam;

// Faktöriyel hesaplayan fonksiyon
function fnk_faktoriyel($a) {
    $fk = 1;
    for($i = 1; $i <= $a; $i++) {
        $fk = $fk * $i;
    }
    return $fk;
}
?>
```

## 3. Form Verilerini İşleme ($_GET ve $_POST)

PHP'de form verileri, `$_GET` ve `$_POST` süper global değişkenleri ile alınır. Bu değişkenler, formdan gönderilen verileri anahtar-değer çiftleri olarak içerir.

### POST Metoduyla Veri Alma

```php
<?php
// form.php'den gelen POST verilerini alma
$a = $_POST['deger1'];

echo "1. sayı:" . $a;
echo '<br>';
echo "2. sayı:" . $_POST['deger2'];
echo '<br>';
echo "Toplam=" . ($_POST['deger1'] + $_POST['deger2']);
?>
```

POST metodu, hassas verilerin gönderilmesi için tercih edilir, çünkü veriler URL'de görünmez.

### Form Verilerini Doğrulama ve İşleme

```php
<?php
// Formdan gelen sayının tek/çift kontrolü
$a = $_POST['sayi'];

if($_POST['sayi'] % 2 == 0) {
    echo "Sayı çift";
} else {
    echo "Sayı Tek";
}
?>
```

### Form Verilerini Kullanarak Hesaplamalar Yapma

```php
<?php
// İki sayı arasındaki çift sayıların sayısını bulma
if($_POST['deger1'] > $_POST['deger2']) {
    $bs = $_POST['deger1'];
    $ks = $_POST['deger2'];
} else {
    $bs = $_POST['deger2'];
    $ks = $_POST['deger1'];
}

$tpl = 0;
for($i = $ks; $i <= $bs; $i++) {
    if($i % 2 == 0) {
        $tpl = $tpl + 1;
    }
}

echo $ks . " ile " . $bs . " arasındaki çift sayıların sayısı=" . $tpl;
?>
```

## 4. Oturum Yönetimi (Session)

PHP'de oturum yönetimi, kullanıcı bilgilerini saklamak ve sayfalar arasında taşımak için kullanılır.

### Oturum Başlatma ve Değişken Tanımlama

```php
<?php
session_start();

// Oturum değişkeni tanımlama
$_SESSION['giris'] = "ok";
?>
```

### Oturum Kontrolü

```php
<?php
session_start();

// Kullanıcı girişi kontrolü
if($_POST['kad'] == 'a' && $_POST['ksifre'] == 'a') { // doğru
    $_SESSION['giris'] = "ok";
    header('location:yonetim.php');
} else { // yanlış
    header('location:index.php?h=1');
}
?>
```

### Güvenlik Kontrolü

```php
<?php
// Oturum kontrolü - giriş yapılmamışsa ana sayfaya yönlendir
if($_SESSION['giris'] != "ok") {
    header('location:index.php');
}
?>
```

### Oturumu Sonlandırma

```php
<?php
session_start();

// Oturum değişkenini silme
unset($_SESSION['giris']);

// Ana sayfaya yönlendirme
header('location:index.php');
?>
```

## 5. MySQL Veritabanı Bağlantısı (XAMPP Ortamında)

### Bağlantı Kurma Kodları

PHP ile MySQL veritabanına bağlanmak için `mysqli` fonksiyonları kullanılır.

```php
<?php
// Veritabanı bağlantısı
$baglan = mysqli_connect("localhost", "root", "");
mysqli_select_db($baglan, "kayu");

// Bağlantı kontrolü
if (!$baglan) {
    echo "Veri Baglanti Hatasi!!!!!!";
    echo mysqli_error();
    exit;
}

// Karakter seti ayarları
mysqli_query($baglan, "SET NAMES 'utf8'");
mysqli_query($baglan, "SET CHARACTER SET 'utf8'");
mysqli_query($baglan, "SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
date_default_timezone_set('Europe/Istanbul');
?>
```

Bu kod bloğu:
1. `mysqli_connect()` fonksiyonu ile MySQL sunucusuna bağlanır (sunucu adresi, kullanıcı adı, şifre)
2. `mysqli_select_db()` fonksiyonu ile veritabanını seçer
3. Bağlantı başarısız olursa hata mesajı gösterir
4. Türkçe karakter desteği için karakter seti ayarlarını yapar

### Veri Ekleme (INSERT)

```php
<?php
include("baglanti.php");

$tarih = date("y-m-d");

// Müşteri verilerini ekleme sorgusu
$sql = "insert into musteri values(NULL, '" . $_POST['m_ad'] . "', '" . $_POST['m_sad'] . "', '" 
      . $_POST['m_mail'] . "', '" . $_POST['m_adres'] . "', '" . $_POST['m_il'] . "', '" . $tarih . "')";

mysqli_query($baglan, $sql) or die(mysqli_error());

header('location:yonetim.php?s=musteri');
?>
```

Bu kod:
1. Form verilerini alarak SQL INSERT sorgusu oluşturur
2. `mysqli_query()` fonksiyonu ile sorguyu çalıştırır
3. İşlem tamamlandıktan sonra müşteri sayfasına yönlendirir

### Veri Güncelleme (UPDATE)

```php
<?php
include("baglanti.php");

// Müşteri verilerini güncelleme sorgusu
$sql = "update musteri set m_adi='" . $_POST['m_ad'] . "', " .
      "m_sadi='" . $_POST['m_sad'] . "', m_mail='" . $_POST['m_mail'] . "'," .
      "m_adresi='" . $_POST['m_adres'] . "', m_il='" . $_POST['m_il'] . "' " .
      "where id=" . $_GET['gid'];
      
mysqli_query($baglan, $sql);

header('location:yonetim.php?s=musteri');
?>
```

Bu kod:
1. Form verilerini alarak SQL UPDATE sorgusu oluşturur
2. `mysqli_query()` fonksiyonu ile sorguyu çalıştırır
3. İşlem tamamlandıktan sonra müşteri sayfasına yönlendirir

### Veri Silme (DELETE)

```php
<?php
include("baglanti.php");

// Müşteri verilerini silme sorgusu
mysqli_query($baglan, "delete from musteri where id=" . $_GET['sil']);

header('location:yonetim.php?s=musteri');
?>
```

Bu kod:
1. URL'den alınan ID parametresine göre silme sorgusu oluşturur
2. `mysqli_query()` fonksiyonu ile sorguyu çalıştırır
3. İşlem tamamlandıktan sonra müşteri sayfasına yönlendirir

### Veri Sorgulama (SELECT) ve Sonuçları Gösterme

```php
<?php
$sql = mysqli_query($baglan, "select * from musteri where id=" . $_GET['gid']);
while($satir = mysqli_fetch_assoc($sql)) {
    // Verileri kullanma örneği
    echo $satir['m_adi']; 
}
?>
```

Bu kod:
1. `mysqli_query()` ile veritabanından veri çeker
2. `mysqli_fetch_assoc()` fonksiyonu ile sonuçları ilişkisel dizi olarak alır
3. Döngü ile tüm sonuçları işler

## 6. Pratik Uygulamalar

### Matematiksel Formül Hesaplama

```php
<?php
/*(2X+Y!)/(4T-K) formülünü hesaplama*/

function fnk_carpim($a, $b) {
    return $a * $b;
}
function fnk_toplama($a, $b) {
    return $a + $b;
}
function fnk_bolme($a, $b) {
    return $a / $b;
}
function fnk_cikarma($a, $b) {
    return $a - $b;
}
function fnk_faktoriyel($a) {
    $fk = 1;
    for($i = 1; $i <= $a; $i++) {
        $fk = $fk * $i;
    }
    return $fk;
}
function fnk_yaz($a) {
    echo $a;
}

$payda = fnk_cikarma(fnk_carpim(4, $_POST['t']), $_POST['k']);

if($payda == 0) {
    echo "Hesaplanamaz";
} else {
    $pay = fnk_toplama(fnk_carpim(2, $_POST['x']), fnk_faktoriyel($_POST['y']));
    fnk_yaz(fnk_bolme($pay, $payda));
}
?>
```

Bu örnek, fonksiyonların nasıl birleştirilerek karmaşık hesaplamalar yapılabileceğini gösterir.

### Rastgele Çift Sayılardan Dizi Oluşturma

```php
<?php
$tpl = 0;
for($i = 0; $i < $_POST['boyut']; $i++) {
    $rs = rand($_POST['deger1'], $_POST['deger2']);
    if($rs % 2 == 0) {
        echo $dizi[$i] = $rs;
        echo '<br>';
        $tpl = $tpl + $dizi[$i];
    } else {
        $i = $i - 1;
    }
}
echo "Toplam:" . $tpl;
?>
```

Bu kod:
1. Kullanıcının belirttiğı aralıkta rastgele sayılar üretir
2. Sadece çift sayıları diziye ekler
3. Tek sayı gelirse döngü sayacını azaltarak tekrar dener
4. Eklenen çift sayıların toplamını hesaplar

## 7. Sınav Soruları ve Çözümleri

Bu bölümde sınavda çıkan sorular ve çözümleri yer almaktadır. Tüm çözümler ders içeriklerine dayanmaktadır.

### Soru 1: Veritabanı Bağlantısı

**Soru:** Veritabanı ismi "öğrenci" kullanıcı adı "Kayseri" Şifresi "123" olan veri tabanına bağlanın.

**Çözüm:**

```php
<?php
// Veritabanı bağlantısı
$baglan = mysqli_connect("localhost", "Kayseri", "123");
mysqli_select_db($baglan, "öğrenci");

// Bağlantı kontrolü
if (!$baglan) {
    echo "Veri Baglanti Hatasi!!!!!!";
    echo mysqli_error();
    exit;
}

// Karakter seti ayarları (Türkçe karakter desteği için)
mysqli_query($baglan, "SET NAMES 'utf8'");
mysqli_query($baglan, "SET CHARACTER SET 'utf8'");
mysqli_query($baglan, "SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
date_default_timezone_set('Europe/Istanbul');
?>
```

**Açıklama:** 
Bu kod, ders8/baglanti.php dosyasındaki örnekten uyarlanmıştır. `mysqli_connect()` fonksiyonu ile MySQL sunucusuna bağlanırız. İlk parametre sunucu adresi (localhost), ikinci parametre kullanıcı adı (Kayseri), üçüncü parametre şifre (123)'tür. `mysqli_select_db()` ile veritabanını seçeriz. Bağlantı kontrolü ve karakter seti ayarları da eklenir.

### Soru 2: Veri Silme İşlemi

**Soru:** "sil.php" dosyası içerisinde id'si verilen bir dosyanın veri tabanından silme işlemini yap.

**Çözüm:**

```php
<?php
include("baglanti.php");

// ID'si verilen kaydı silme sorgusu
mysqli_query($baglan, "delete from tablo_adi where id=" . $_GET['sil']);

// İşlem tamamlandıktan sonra yönlendirme
header('location:ana_sayfa.php');
?>
```

**Açıklama:**
Bu kod, ders8/musteri_sil.php dosyasındaki örneğe dayanmaktadır. `include("baglanti.php")` ile veritabanı bağlantısını dahil ederiz. `mysqli_query()` fonksiyonu ile DELETE sorgusu çalıştırılır. `$_GET['sil']` ile URL'den gelen ID parametresi alınır. İşlem sonrası `header()` ile başka sayfaya yönlendirme yapılır.

### Soru 3: Kullanıcı Listesi

**Soru:** "kullanıcı" adlı tablodaki kullanıcı adı ve şifreleri html ve PHP kullanarak listele.

**Çözüm:**

```php
<?php
include("baglanti.php");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Listesi</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr bgcolor="#000000">
            <td style="color: white;">Sıra</td>
            <td style="color: white;">Kullanıcı Adı</td>
            <td style="color: white;">Şifre</td>
        </tr>
        <?php
        $i = 0;
        $sql = mysqli_query($baglan, "select * from kullanıcı order by id asc");
        while($satir = mysqli_fetch_assoc($sql)) {
            $i++;
            if($i % 2 == 0) {
                $rnk = '#FFFFFF';
            } else {
                $rnk = '#CCC';
            }
        ?>
        <tr bgcolor="<?php echo $rnk; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $satir['kullanici_adi']; ?></td>
            <td><?php echo $satir['sifre']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
```

**Açıklama:**
Bu kod, ders8/musteri.php dosyasındaki tablo listeleme örneğinden uyarlanmıştır. `mysqli_query()` ile SELECT sorgusu çalıştırılır. `mysqli_fetch_assoc()` ile sonuçlar ilişkisel dizi olarak alınır. `while` döngüsü ile tüm kayıtlar işlenir. HTML tablo yapısı ile veriler listelenir. Sıra numarası çift/tek kontrolü ile farklı renk ataması yapılır.

### Soru 4: Tek Sayıların Ortalaması

**Soru:** İki sayı arasındaki tek sayıların ortalamasını hesaplayan ve sonucu geri döndüren bir fonksiyon yaz.

**Çözüm:**

```php
<?php
function fnk_tek_sayilar_ortalama($sayi1, $sayi2) {
    // Küçük ve büyük sayıyı belirleme
    if($sayi1 > $sayi2) {
        $bs = $sayi1;
        $ks = $sayi2;
    } else {
        $bs = $sayi2;
        $ks = $sayi1;
    }
    
    $toplam = 0;
    $adet = 0;
    
    // Aralıktaki tek sayıları bulma ve toplama
    for($i = $ks; $i <= $bs; $i++) {
        if($i % 2 == 1) { // Tek sayı kontrolü
            $toplam = $toplam + $i;
            $adet = $adet + 1;
        }
    }
    
    // Ortalama hesaplama
    if($adet > 0) {
        $ortalama = $toplam / $adet;
        return $ortalama;
    } else {
        return 0; // Tek sayı yoksa 0 döndür
    }
}

// Fonksiyon kullanım örneği
$sonuc = fnk_tek_sayilar_ortalama(5, 15);
echo "Tek sayıların ortalaması: " . $sonuc;
?>
```

**Açıklama:**
Bu fonksiyon, ders içeriklerindeki fonksiyon tanımlama (ders6/ders6_6.php) ve döngü örneklerine (final_cheatsheet.md'deki for döngüsü ve mod alma örnekleri) dayanmaktadır. 

- `function` anahtar sözcüğü ile fonksiyon tanımlanır
- İki parametre alır: başlangıç ve bitiş sayıları  
- `if-else` ile büyük-küçük sayı belirlenir
- `for` döngüsü ile aralıktaki sayılar kontrol edilir
- `%` (mod) operatörü ile tek sayı kontrolü yapılır (`i % 2 == 1`)
- Toplam ve adet sayacı tutulur
- `return` ile sonuç geri döndürülür
- Sıfıra bölme hatası kontrolü yapılır

Bu çözümler tamamen ders içeriklerinde işlenen konulara dayanmaktadır ve ders dosyalarındaki kod örneklerinden uyarlanmıştır.
