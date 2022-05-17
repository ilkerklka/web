<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bilgi Formu</title>
</head>
<body style=" font-family: arial; background-color: #333333;">
    <form style="border:2px solid ; border-radius:5px ;margin-right: 400px ; margin-left: 400px; padding: 15px; background-color: white;  " action="">
        <label for="">Adınız :</label><br>
        <input type="text" name="Adınız :" required > <br><br>
        <!--------------------------------------->
        <label for="">Soyadınız :</label><br>
        <input type="text" name="Soyad :" required> <br><br>
        <!--------------------------------------->
        <label for="">Telefon Numarası :</label><br><br>
        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required name="Telefon"><br>
        <small>Örnek : 555-555-5555</small><br><br>
        <!--------------------------------------->
        <label for="">E-Mail :</label><br>
        <input type="email" name="Mail" required> <br><br>
        <!--------------------------------------->
        <label for="">Cinsiyet :</label><br><br>
        <table >
            <tr><td><input type="radio" name="Cinsiyet" value="erkek" ></td><td>Erkek</td></tr>
            <tr><td><input type="radio" name="Cinsiyet"value="erkek"></td><td>Kadın</td></tr>
        </table><br><br>
        <!--------------------------------------->
        <label for="">Dersler :</label><br><br>
        <select name="" id="">
            <option value="1">Yazılım Mimarileri</option>
            <option value="2">Web Programlama</option>
            <option value="3">Sunucu İşletim Sistemleri</option>
        </select><br><br>
        <!--------------------------------------->
        <label for="">Notunuz :</label><br><br>
        <textarea name="mesajınız" id="" cols="30" rows="10"></textarea><br><br>
        <!--------------------------------------->
        <input class="buton" type="submit" value="Gönder">
        <input class="buton" type="reset" value="Sil">

    </form>
</body>
</html>