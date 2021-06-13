<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>アンケートフォーム</title>
</head>
<body>
<main>
    <h1>電気代に関するアンケート</h1>
    <form method ="post" action="write.php">
    <div class="basic">
        <p>お名前： <input type="text" name ="name" id ="name" size="15"></p>
        <p>メールアドレス： <input type="text" name ="email" id ="email" size="20"></p>
    </div>   
    <div class="basic">
        <p>家族構成：
            <select name="family" id="family">
            <option value="1人">1人</option>
            <option value="2人">2人</option>
            <option value="3人">3人</option>
            <option value="4人">4人</option>
            <option value="5人">5人</option>
            <option value="5人以上">5人以上</option>
        </select></p>
        <p>おおよその1か月の電気代：
            <select name="bill" id="bill">
            <option value="3,000">～3,000円</option>
            <option value="4,000">3,001～5,000円</option>
            <option value="6,000">5,001～7,000円</option>
            <op6/13 16:00tion value="8,000">7,001～9,000円</op6>
            <option value="10,000">9,000円以上</option></p>
    </div>
    <br>
    <div class="submit_button">
        <input type="submit" value="送信" id="submit"></button>
    </div>

    </form>
<div class="result">
    <a href="read.php">これまでの結果を表示</a>
</div>
<footer>
    <img src="img/aisatsu_dog.png" alt="dog" width ="33" height="40">
    ご協力ありがとうございました
    <img src="img/aisatsu_dog.png" alt="dog" width ="33" height="40">
</footer>
</main>



<!-- JQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- JQuery -->

<!-- <script>
    $("#button").on("click",function(){
    $("#name").html("");
    $("#email").html("");
    $("#family").html("");
    $("#bill").html("");
});
</script> -->

</body>
</html>