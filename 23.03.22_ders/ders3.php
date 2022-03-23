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
        /*Uygulama Ödevi:
            kuyruk ve yığın yapılarının php üzerinde dizileri kullanılarak örneklendirilmesi
         */
        echo "<br><hr>";
        echo "<h3>Rastgele yazılan sayı 50 den büyükse geçtiniz 50 den küçükse kaldınız yazan uygulama: </h3>";
        $rasgele_sayi= rand(10,100);
        
        if($rasgele_sayi>=50){
            echo "Geçtiniz - Notunuz: $rasgele_sayi";
        }else{
            echo "Kaldınız - notunuz: $rasgele_sayi";
        }
    ?>
</body>
</html>