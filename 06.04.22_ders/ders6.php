<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama</title>
</head>
<body>
<h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>
    

    <?php
        echo "<br><hr>";
        $dizi1 = array(1,2,3,4,"kemal","arıca",135.3);
        $dizi2 = [2,3,4,"kemal","arıysa",135.3];
        echo "<pre>";
        print_r($dizi1);
        echo "</pre >";
        echo "<br>";
        echo "<pre>";
        print_r($dizi2);
        echo "</pre >";
        echo "<br>";
        echo "Dizinin 5. Elemanı : $dizi1[5]";
        echo "<br>";
        echo "Dizinin 5. Elemanın türü :". gettype($dizi1[5]);
        echo "<br><hr>";
        echo "<h3>Dizinin içeriğinin foreach döngüsü ile yapılandırılması </h3>";

        foreach ($dizi1 as $item) {
            echo $item . "<br>";
        }

        echo "<br><hr>";
        echo "<h3>Dizinin içeriğinin foreach döngüsü ile yapılandırılması-2 </h3>";

        foreach ($dizi1 as $key => $value) {
            echo "$key - $value  <br>";
        }
        
        echo "<br><hr>";
        echo "<h3>Dizinin içeriğinin for döngüsü ile yapılandırılması </h3>";

        for ($i=0; $i < count($dizi1) ; $i++) { 
            echo $dizi1[$i] . "<br>";
        }

        echo "<br><hr>";
        

        $sayilar = array(1,2,3,4,5,6);

        $sayilar= array(array(1,3,5,7,9),
        array(2,4,6,8)
    );

    echo  "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "sayilar dizisindeki 2. dizinin 3. elemanını yazdırınız : ". $sayilar[1][1];
    echo "<br>";
        
    echo  "sayılar dizisindeki 1. dizenin 4. indisli elemanını yazdırınız :" .$sayilar[0][4];


    echo "<br><hr>";

    $sayilar = array(
        "inteeger" => array(55,61,69,31),
        "double" => array(15.2,31.69,45.65,35.47)
    );


    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";


    echo "birinci dizenin ikinci elemanını yazınız :" . $sayilar["inteeger"][1];
    echo "<br>";

    echo "ikinci dizenin 3. indisli elemanını yazdırınız :" . $sayilar["double"][3];

    echo "<br><hr>";
        

    $bilgiler = array(
        "id" => "0",
        "Adi"=> "Neslihan",
        "Soyadi"=> "gülmez",
        "gsm" => "5556664466",
        "yas" => "32"
    );
    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo "$bilgiler[Adi]  $bilgiler[Soyadi] hoşgeldiniz";

    echo "<br><hr>";
      

    
    ?>
    
</body>
</html>