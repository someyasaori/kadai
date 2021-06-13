<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>アンケート結果</title>
</head>
<body>

<h2>これまでの結果</h2>

<table>
<tr><th>提出日時</th>
<th>名前</th>
<th>メールアドレス</th>
<th>家族構成</th>
<th>おおよその1か月の電気代</th>
</tr>

<?php

//xss対策用関数
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

//ファイルを変数に格納
$filename = "data.csv";

//fopenでファイルを読み込みモード（”r”）で開く
$fp = fopen($filename, "r");

//CSVファイルから1行ずつ取得する
while (($array = fgetcsv($fp)) !== FALSE)  {
    // var_dump($array);

//空行を取り除く
if(!array_diff($array,array(''))){
    continue;
}
    echo"<tr>";
  for($i = 0; $i < count($array); $i++){
    echo '<td>'.$array[$i].'</td>';
  }
    echo '<tr>';
}



//ファイルを閉じる
fclose($fp);

?>
</table>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- JQuery -->  

<script type="text/javascript">

</script>

</body>
</html>