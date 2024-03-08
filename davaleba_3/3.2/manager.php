<?php
echo "<h2>Submitted Information</h2>";

echo "<ul>";
foreach ($_POST as $key => $value) {
    echo "<li><storng style='font-size: 1.2em; font-weight:bold;'>" . htmlspecialchars($key) . ":</storng> ";

    // Check if $value is an array
    if (is_array($value)) {
        // If $value is an array, print its elements separated by commas
        echo implode(", ", array_map('htmlspecialchars', $value));
    } else {
        // If $value is not an array, print it directly
        echo htmlspecialchars($value);
    }

    echo "</li>";
}
echo "</ul>";
?>
