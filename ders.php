<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web Teknolojileri ve Programlama</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    /* yazdırma işlemi yapar   
    İçerisinde HTML etietleri kullanılabilir
    Çift veya Tek tırnak kullanılabilir
    Çİft tırnak içerisinde değişken içerikleri görsterilir
    Nokra işareti ile birleştirme yapılablir*/
    echo "<h1>Aydın Adnan Menderes üniversitesi</h1>";
    echo "<h3>Aydın Meslek Yüksekokulu</h3>";
    echo "Bİlgisayar Programcılığı" . "<br>" . "Web Teknolojileri";

    echo "<hr> <h2> Değişken Tanımlama Kuralları</h2>";

    echo "<ol>
        <li> Değişken isimleri Dolar ile başlar </li>
        <li> Değişken isimleri sayısal bir ifadeyle başlayamaz</li>
        <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa birinci_sinif , birinciSinif , birinci-sinif
        kullanımlar önerilir</li>
        <li>Değişken ve dosya isimlerinde türkçe karakter kullanılmamalıdır.</li>
        <li>Değişken isimlerinde büyük küçük harf kullanımına duyarlıdır . 
        sayi != Sayi</li>
        <li>Değişken içerisinde eğer metinsel bir ifade varsa (\") veya(') kullanılır</li>
        <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır.</li>
        <li>Değişken ismi değişkenin içeriğini ifade etmeli</li>
        <li>Değişkenler erkrana \" echo \" ile yazdırılır</li>
     
     </ol>";

    echo " <hr> <h2>Değişken Tanımlama Örnekleri</h2>";

    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 31;
    echo $isim . " " . $soyisim . " " . $yas;
    echo "<br>";
    echo " $isim $soyisim ";

    /* Uygulama 
     Üniversite myo ad soy ad numara değişkenlerini tanımlayın içeriği uygun şekilde doldurunuz. girilen bu değişkenlerin değerlerini bir HTML kablo içinde gösteriniz */

    echo "<br> <hr>";
    $okul = "Adnan Menderes Üniversitesi";
    $myo = "Aydın Meslek Yüksekokulu";
    $isimi = "İlker";
    $soyisimi = "Kücükyılmaz";
    $numara = 21601027;


    ?>
    <table border=1>
        <tr>
            <th>Okul</th>
            <th>Fakülte</th>
            <th>isim</th>
            <th>Soyisim</th>
            <th>Numara</th>
        </tr>
        <tr>
            <td><?php echo $okul ?></td>
            <td><?php echo $myo ?></td>
            <td><?php echo $isimi ?></td>
            <td><?php echo $soyisimi ?></td>
            <td><?php echo $numara ?></td>
        </tr>
    </table>
</body>

</html>