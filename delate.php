<?php
if (isset($_POST['line'])) {
  $lineToDelete = (int)$_POST['line'];
  $lines = file("messages.txt", FILE_IGNORE_NEW_LINES);
  if (isset($lines[$lineToDelete])) {
    unset($lines[$lineToDelete]);
    file_put_contents("messages.txt", implode("\n", $lines) . "\n");
  }
}
header("Location: index.php");
exit;
?>
