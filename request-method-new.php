<?php
$name = '';
$last_name = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $last_name = htmlspecialchars($_POST['last_name'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Submission</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            border: 1px solid #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>نام: <?= $name ?></td>
            <td>نام خانوادگی: <?= $last_name ?></td>
        </tr>
    </table>
</body>
</html>
