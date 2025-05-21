<?php
define('TEXT', '0');
defined('TEXT') or die;

echo "<strong>Request Method:</strong> " . htmlspecialchars($_SERVER['REQUEST_METHOD']) . '<br><br>';
echo "<strong>POST Data:</strong><br>";
echo '<pre>';
var_dump($_POST);
echo '</pre>';
echo "<strong>GET Data:</strong><br>";
echo '<pre>';
var_dump($_GET);
echo '</pre>';
?>
