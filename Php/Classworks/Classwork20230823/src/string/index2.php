<?php
echo "string/index.php is connected.<br>";
$text = $_GET['text'] ?? '';
echo htmlspecialchars($text);
