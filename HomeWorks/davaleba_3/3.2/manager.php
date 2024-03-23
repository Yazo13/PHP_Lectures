<?php
echo "<h2>Submitted Information</h2>";

echo "<ul>";
foreach ($_POST as $key => $value) {
    echo "<li><storng style='font-size: 1.2em; font-weight:bold;'>" . htmlspecialchars($key) . ":</storng> ";

    if (is_array($value)) {
        echo implode(", ", array_map('htmlspecialchars', $value));
    } else {
        echo htmlspecialchars($value);
    }

    echo "</li>";
}
echo "</ul>";
?>
