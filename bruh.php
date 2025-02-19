<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>哈哈哈大優惠</title>
</head>
<body>
<img src="aqua.png" width="480px"/>
<a href="https://youtu.be/WWB01IuMvzA?si=CK8ENwNh_v6wtM-P">A wonderful song</a>
<p>
<a href="https://youtu.be/dQw4w9WgXcQ?si=gcjBl9FzYtlKxjfj" target="_blank">The best video on the world</a>
<p>
<img src="https://cdn.discordapp.com/attachments/971692563281104918/1341608962457342103/20dcd8b2166a6e4486aa1ee1375529c7.jpg?ex=67b69e36&is=67b54cb6&hm=cd19f5e25f9917128667f0c83c269a177512ce37d3ceb61c4e44c824ebff5a28&" width="300" height="value" alt="還真是高高在上呢">

<img src="https://cdn.discordapp.com/attachments/971692563281104918/1341609848181358654/1720628382537.gif?ex=67b69f09&is=67b54d89&hm=dfe740e5706f71728cdb73826d7cf3f9b33e211ce6a233cc0036759a55c94d0f&" width="300" height="value" alt="gif">
<p><form action = "bruh.php" method = "post">

<h1>歡迎進入詐騙kk園區</h1>
<p>姓名:<input type = "text" name = "username" autofocus>
出生日期:<input type = "date" name = "birth" autofocus>
<p>性別:
<input type = "radio" name = "sex" value = "1" id = "M">男性
<input type = "radio" name = "sex" value = "0" id = "W">女性
<p>電話:<input type = "tel" name = "tel" autofocus>
<p>電子郵件:<input type = "email" name = "mail" autofocus>
<p>銀行卡號:<input type = "text" name = "card_number" autofocus>
<p>密碼:<input type = "password" name = "pwd" required>
<p><input type = "submit" value = "同意賣出身體所有權">
<p><input type = "reset" value = "改填寫朋友訊息">
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 取得表單資料
    $username = $_POST["username"];
    $birth = $_POST["birth"];
    $sex = ($_POST["sex"] == "1") ? "男性" : "女性";
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $card_number = $_POST["card_number"];
    $pwd = $_POST["pwd"]; // ⚠️ 密碼通常不建議明文存儲

    // 設定儲存檔案
    $file = fopen("bruh form.txt", "a"); // 以追加模式開啟
    fwrite($file, "姓名: $username | 出生日期: $birth | 性別: $sex | 電話: $tel | 電子郵件: $mail | 銀行卡號: $card_number | 密碼: $pwd\n");
    fclose($file);

    echo "資料已儲存！";
}
?>