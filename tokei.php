<?php
date_default_timezone_set('Asia/Tokyo');
$now = date("Y年m月d日 H時i分s秒");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST["message"]);
    echo "<p>メッセージ: " . $message . "</p>";
    echo "<p>投稿日時: " . $now . "</p>";
}
?>

<form method="post">
    <input type="text" name="message" placeholder="メッセージを入力">
    <button type="submit">送信</button>
</form>
