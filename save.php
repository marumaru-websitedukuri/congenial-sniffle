<?php
if (isset($_POST['message'])) {
  $msg = trim($_POST['message']);
  if ($msg !== "") {
    $time = date("Y-m-d H:i:s");
    $entry = $time . " - " . $msg . "\n";
    file_put_contents("messages.txt", $entry, FILE_APPEND | LOCK_EX);
  }
}
header("Location: index.php");
exit;
?>
