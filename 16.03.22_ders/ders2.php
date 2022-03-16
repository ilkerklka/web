<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <?php
    echo "<h1>Tırnak İşaretleri Arasındaki Farklar</h1>";
    $uni = "Adnan Menderes Üniversitesi";
    echo "<h3>değişken içeriği : $uni</h3>";
    echo "Adnan Menderes Üniversitesi";
    echo "<br>";
    echo "Kazandığınız üniversite: $uni ";
    echo "<br>";
    echo "Kazandığınız üniversite: " . $uni;
    echo "<br>";
    echo "Kazandığınız üniversite: " . '$uni';
    echo "<br>";
    echo "Kazandığınız üniversite: " . "$uni";
    echo "<br>";
    echo "<hr><h2>Temel Matematiksel işlemler</h2>";
    echo "<h3>Toplama işlemleri</h3>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo 'sayi1 + sayi2 =' . ($sayi1 + $sayi2);
    echo "<br><hr>";
    echo "$sayi1 + $sayi2 =" . ($sayi1 + $sayi2);
    echo "<br><hr>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";
    echo "<br><hr>";
    echo "<h3>Çıkarma İşlemleri</h3>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo 'sayi1 - sayi2 =' . ($sayi1 - $sayi2);
    echo "<br><hr>";
    echo "$sayi1 + $sayi2 =" . ($sayi1 - $sayi2);
    echo "<br><hr>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";
    echo "<br><hr>";
    echo"<h3>Çarpma İşlemi</h3>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo 'sayi1 * sayi2 =' . ($sayi1 * $sayi2);
    echo "<br><hr>";
    echo "$sayi1 * $sayi2 =" . ($sayi1 * $sayi2);
    echo "<br><hr>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";
    echo "<br><hr>";
    echo"<h3>Bölme İşlemleri</h3>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo 'sayi1 / sayi2 =' . ($sayi1 / $sayi2);
    echo "<br><hr>";
    echo "$sayi1 / $sayi2 =" . ($sayi1 / $sayi2);
    echo "<br><hr>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";
    echo"<br><hr>";
    echo"<h3>Üst Alma İşlemleri(pow)</h3>";
    $x = 3;
    $y = 2;

    echo "$x<sup>$y</sup> =", pow($x,$y);

    echo "<br>";
    echo "<h5>Değişken Tipi Öğrenme :</h5>" , gettype($x);

    echo "<br><hr>";
    echo "<h3>Karekök Alma(sqrt)</h3>";
    $x = 25;
    $karekök=sqrt($x);
    echo "$x ' in karekökü : $karekök";
    
    echo "<br><hr>";
    echo "<h3>Mutlak Değer İşlemi(abs)</h3>";
    $x =(-4);
    $mutlak=abs($x);
    echo "|$x| 'in mutlak değeri: $mutlak";

    echo "<br><hr>";
    echo "<h3>Taban Değiştirme İşlemi(base_convert(x,taban1,taban2))</h3>";
    $sayi= 30;
    $taban=10;
    $yenitaban=2;
    echo "27 sayısının 2'lik tabandaki karşılığı : " . base_convert(27,10,2);
    echo "<br><br>";
    $sonuc=base_convert($sayi,$taban,$yenitaban);
    echo "($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub>";

    echo "<br><hr>";
    echo "<h3>Mod İşlemi(fmod(x,y))</h3>";
    $x = 15;
    $y= 4;
    $kalan= fmod($x,$y);
    echo "$x mod $y = $kalan";
    echo "<br>";
    echo "$x Sayısı : " . ((fmod($x,2) ==0 )? " Çifttir.":"Tektir");
    echo "<br><hr>";
    echo "<h3></h3>";
    echo "<br><hr>";
    echo "<h3>Yuvarlama İşlemi(round(x,y))</h3>";
    $x=15.375;
    echo "$x Bir Ondalık Basamak Yuvarlaması :" . round($x,1);
    echo "<br><hr>";
    echo "<h3>Yuvarlama İşlemi(floor(x))</h3>";
    $x = 15.315;
    echo "$x : " . floor($x);
    echo "<br><hr>";
    echo "<h3>Yuvarlama İşlemi(ceil(x))</h3>";
    $x = 15.315;
    echo "$x : " . ceil($x);
    echo "<br><hr>";
    echo "<h3>Rastgele Sayı Üretme (rand())</h3>";
    echo "10-100 Arası rastgele Değer : ". rand(10,100);
    for ($i=0;$i<10;$i++)
    {
        echo "<br>$i . Eleman: " . rand(10,100);
    }





    

    ?>
</body>

</html>