<?php

//POSTデータの取得
$name = $_POST["name"];
$email = $_POST["email"];
$family = $_POST["family"];
$bill = $_POST["bill"];

//入力時間取得
$date = date("Y/m/d H:i");

//書き込むファイルの配列を作る
$array = [$date, $name, $email, $family, $bill];

//書き込み先のファイルを読み込む
$file = fopen ("data.csv","a");

//ファイルに書き込む
fputcsv($file, $array);

//ファイルを閉じる
fclose($file);

//read.phpを開いて入力内容を表示
header("Location:read.php");
exit();

// <script type="text/javascript">
//        window.open('read.php', '_blank');
// </script>

?>