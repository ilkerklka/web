<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $isimler=array();
    $isimler[]="reyhan";
    $isimler[]="ilker";
    $isimler[]="murtaza";
    $isimler[]="hanifiye";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $isimler2= array();
    $isimler2["isim1"]="mahmut";
    $isimler["isim2"]="mustafa";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";

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
    );

    echo "<br><hr>";
        echo "<h3> koşul ifadeleri </h3>";


    

    
    ?>

echo "<br><hr>";
        echo "<h2> koşul ifadeleri </h2>";
        <p>İf-else bloklarında öncelikle koşul belirtidil ve sonraki dallanma koşula göre devam eder.</p>
        <h4>karşılaştırma operatörleri</h4>
        <ol>
            <li>== ($a==$b) Eşit ise demek. (genellikle matematiksel bir karşılaştırma yapılır)</li>
            <li>=== ($a===$b) denk ise. (genellikle string bir karşılaştırma yapılır.)</li>
            <li>!= ($a!=$b) eşit değil ise. ()genellikle matematiksel bir karşılaştırma yapılır</li>
            <li>!== ($a!==$b) denk değil ise. (genellikle string bir karşılaştırma yapılır)</li>
            <li>> ($a>$b) büyük ise. ()</li>
            <li>>=($a >= $b)büyük veya eşit ise</li>
            <li>< ($a<$b)küçük ise</li>
            <li><= ($a <= $b)küçük veya eşit ise</li>

        </ol>
        <h4>mantıksal sınama operatörleri</h4>
        <ol>
            <li>! (olmsuzsa) (!$a)--> $a nın değeri false ise true döner. Aksini yapar olumsuzmu diye sorar</li>
            <li>&& (ve) ($a&&$b) --> $a nın değeri olumluysa true döner. iki koşulda sağlanmak zorundaadır. kouşşulardan bir tanesi false dönerse genel değer false olur.</li>
            <li>|| (veya) ($a||$b) -->$a nın veya dolar $b nin herhangi birisinin değeri olumlu ise sonuç true olarak döner.  herhangi birisinin koşulu sağlaması genel dönüşü true yapar.</li>
        </ol>

        <h3>Not:</h3>
        <ol>
            <li>elseif sürekli tekrar eden sorgu bloğu açar</li>
            <li>else son kapanış koşuludur. (herhangi bir şart belirtmez hiçbir koşul gerçekleşmediğinde çalışacak son koşulu ifade eder)</li>


            <?php
            
            // if (condition) {
            //     # code...
            // }elseif (condition) {
            //     # code...
            // }elseif (condition) {
            //     # code...
            // }elseif (condition) {
            //     # code...
            // }else {
            //     # code...
            // }


            $sayi = 123;

            $sayi2 = 366;

            $metin="adü";

            if ($sayi1) {
                echo "if bloğu çalıştı : $sayi1";
            }
            
            
            ?>

        </ol>
</body>
</html>