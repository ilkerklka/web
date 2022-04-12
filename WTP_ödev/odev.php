<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev</title>
</head>
<body>
    <?php
        $küme = array("elma", "armut");
        array_push($küme, "muz", "portakal");
        print_r($küme);


        echo "<br><hr>";


        /*odev2*/
        //1- rasgele üretilen 0-100 arasında değerin tek veya çift olduğunu ekrana yazdırınız
        $sayi1= rand(0,100);
        if ($sayi1%2==0) {
            echo "üretilen sayı çifttir : $sayi1";
        }else {
            echo "üretilen sayı tektir : $sayi1";
        }

        echo"<br><hr>";

        //2- rasgele üretilen sayı 0-100 arasında 50 den lüçük olduğu durumlarda kaldınız büyük olduğu durumlarda geçtiniz yazdırınız
        $sayi2 = rand(0,100);
        if ($sayi2 > 50) {
            echo "Geçtiniz NOTUNUZ: $sayi2";
        }else {
            echo "Kaldınız NOTUNUZ: $sayi2";
        }


        echo "<br><hr>";
        //3-doğum yılına göre 18  yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız

        $dgmyıl = rand(1970,2022);
        $yas= (2022 - $dgmyıl);
        $klnsure = ($dgmyıl - 2004);
        if ($yas >= 18) {
            echo "Ehliyet alabilirsiniz <br> YAŞINIZ : $yas <br> DOĞUM YILINIZ : $dgmyıl";
        }else {
            echo "Ehliyet almazsınız <br>YAŞINIZ: $yas <br> DOĞUM YILINIZ: $dgmyıl<br>EHLİYET ALMANIZA KALAN SÜRE (YIL) : $klnsure ";
        }
        echo "<br><hr>";

        //4-öğrenci detayları dizisindeki her öğrencinin detaylarını alt alta yazdırınız
        $ogrenciDetaylari = array(
            "ogrenci1" => array(
                "id"        => 1,
                "adi"       => "Nurullah",
                "soyadi"    => "Yıldız",
                "bolum"     => "Bilgisayar",
                "yas"       => "25",
                "dersler"   => array(
                    "ders1" => "Veri Tabanı",
                    "ders2" => "Web Programlama",
                    "ders3" => "Mobil Programlama"
                ),
                "sinif"     => "2"
            ),
            "ogrenci2" => array(
                "id"        => 1,
                "adi"       => "Ayşen",
                "soyadi"    => "Güler",
                "bolum"     => "Makine",
                "yas"       => "22",
                "dersler"   => array(
                    "ders1" => "Matematik",
                    "ders2" => "Sayı Teorileri",
                    "ders3" => "Model Geliştirme"
                ),
                "sinif"     => "4"
            )
            );

            echo "<pre>";
            print_r($ogrenciDetaylari);
            echo "</pre>";

            echo "<br><hr>";

            //ogrenci detay dizisini döngü kullanarak yazdırınız

            $ogrencidetay = array(
                "id"      => "1",
                "adi"     => "reyhan",
                "soyadi"  => "koyunlu",
                "bolum"   => "bilgisayar",
                "yas"     => "25",
                "dersler" => array(
                    "ders1"   => "veri tabanı",
                    "ders2"   => "web programlama",
                    "ders3"   => "mobil programlama",
                ),
                "sinif" => "2"
            );

            foreach ($ogrencidetay as $key => $value) {
                echo "$key- $value <br>";
            }
            echo "<pre>";
            print_r($ogrencidetay);
            echo "</pre><hr><br>";
        ?>
</body>
</html>