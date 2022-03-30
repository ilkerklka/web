<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama</title>
</head>
<body>
    <?php 
        echo "<hr><br>";
        echo "<h3>Sık Kullanılan string Fonksiyonlar</h3>";
        $yazi = "Aydın Adnan Menderes Üniversitesi";
        echo "\$yazi değişken içeriği: $yazi";
        echo "<br>\$yazi değişkeninin türü:". gettype($yazi);
        echo "<hr><br>";
        echo "<h3>İçeriğin Büyük Harfe Dönüştürülmesi</h3>";
        echo "<br>\$yazi değişkeninin Büyük harfle yazılması:" . $byazi=strtoupper($yazi);
        echo "<br>\$yazi değişkeninin Büyük harfle yazılması:" . $byazi=mb_strtoupper($yazi);
        echo "<hr><br>";
        echo "<h3>İçeriğin Küçük Harfle yazılması</h3>";
        echo "<br>\$yazi değişkeninin küçük harfle yazılması:". $kyazi = strtolower($byazi);
        echo "<br>\$yazi değişkeninin küçük harfle yazılması:". $kyazi = mb_strtolower($byazi);
        echo "<hr><br>";
        echo "<h3>İlk Harfin büyük yazılması</h3>";
        echo "<br>\$yazi değişkeninin ilk harfinin büyük yazılması:". $yazi = ucfirst($kyazi);
        echo "<hr><br>";
        echo "<h3>İçerikteki her kelimenin ilk harfinin büyük harfle yazılması</h3>";
        echo "<br>\$yazi değişkeninin her kelimesinin ilk harfinin büyük yazılması:".$yazi = ucwords($kyazi);
        echo "<hr><br>";
        echo "<h3>İçeriğin Harf Sayısı</h3>";
        echo "<br>\$yazi değişkeninin harf sayısı:". strlen($yazi);
        echo "<hr><br>";
        echo "<h3>Ascıı Char Dönüşümü</h3>";
        echo "Karakter karşılığı(65):". chr(65);
        echo "<hr><br>";
        echo "<h3>0-255 arasındaki değerleri chr foknsiyonuna sokarak satır olarak yazdırması</h3>";
        
            for ($i=33; $i < 126; $i++) { 
                echo "<br>0-255 arasındaki değerler:". chr($i)."<br>";
            }
            echo "<hr><br>";
            echo "<h3>Metnin Parçalanarak Diziye Dönüştürülmesi</h3>";
            $dizi =explode(" ",$yazi);
            
            echo "<pre>";
            print_r($dizi);
            echo "</pre>";
        echo "<hr><br>";
        echo "<h3>Metin İçerisindeki Kelime ve Cümle Sayısını alt alta yazdılımı</h3>";
        $metin =" Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quo aperiam debitis, iste tempora odit corrupti deleniti vero necessitatibus sit. Ipsam exercitationem reiciendis ipsum similique sapiente, laudantium quasi autem ea.";
        echo "<br>\$metin değişkinindeki harf sayısı:" . strlen($metin);
        echo "<br>";
        echo "<br>\$metin değşikenindeki kelime sayısı:";
        $kelim =explode(" ",$metin);    
            echo    count($kelim);    
        echo "<br>";
        echo "<br>\$metin değikenindeki cümle sayısı:";
        $cumle =explode(".",$metin);
            echo count($cumle);
            echo "<hr><br>";
            echo "<h3>Veritabanından gelen 2022-11-20 şeklinde gelen tarihi 20.11.2022 şeklinde ekrana ayzdırma</h3>";
            $tarih = "2022-11-20";
            $tarih_dizisi=explode("-",$tarih);
            echo "<pre>";
            print_r($tarih_dizisi);
            echo "</pre>";

            echo "Tarih: $tarih_dizisi[2].$tarih_dizisi[1].$tarih_dizisi[0]";
            echo "<hr><br>";
        echo "<h3>dizinin metine dönüştürülmesi</h3>";
        $aylar_dizisi = array(
            "ocak",
            "şubat",
            "mart",
            "nisan",
            "mayıs",
            "haziran",
            "temmuz",
            "ağustos",
            "eylü",
            "ekim",
            "kasım",
            "aralık",
        );
        echo "<pre>";
        print_r($aylar_dizisi);
        echo "</pre>";


        echo $aylarstring = implode("-",$aylar_dizisi);

        echo "<hr><br>";
        echo "<h3>str_split string parçalama işlemi </h3>";

        $iban ="TR001234567891234567";
        $yeniiban= str_split($iban,4);
        echo "<pre>";
        print_r($yeniiban);
        echo "</pre>";
        echo "foreacch iban:";
        foreach ($yeniiban as $parca) {
            echo "$parca ";
        }
        echo "<br>";
        echo "implode iban:". implode("-",$yeniiban);
        echo "<br>for iban:";
        for ($i=0; $i < count($yeniiban) ; $i++) { 
            echo $yeniiban[$i]." ";
        }
        

        
        
    ?>
   
</body>
</html>