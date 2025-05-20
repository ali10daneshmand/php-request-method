<?php
echo '<div style="width:60%;margin:2rem auto;font-family:sans-serif;">';
echo '<pre style="background:#f5f5f5;padding:1rem;border-radius:8px;">';

echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n\n";

if (!empty($_GET)) {
    echo "GET Parameters:\n";
    print_r($_GET);
    echo "\n";
}

if (!empty($_POST)) {
    echo "POST Parameters:\n";
    print_r($_POST);
    echo "\n";
}

echo '</pre>';
echo '</div>';
?>
