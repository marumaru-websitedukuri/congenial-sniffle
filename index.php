<?php
if (isset($_POST['comment'])) {
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
    file_put_contents("comments.txt", $comment . "\n", FILE_APPEND);
}
$comments = file_exists("comments.txt") ? file_get_contents("comments.txt") : "";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>掲示板</title>
</head>
<body>
  <h1>コメントを投稿</h1>
  <form method="post">
    <input type="text" name="comment" placeholder="コメントを入力">
    <button type="submit">投稿</button>
  </form>

  <h2>投稿一覧</h2>
  <pre><?php echo htmlspecialchars($comments); ?></pre>
</body>
</html>
