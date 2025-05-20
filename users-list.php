÷<?php
define('TEXT', '0');
defined('TEXT') or die;

$rows = [
    [   
        '#' => 1,
        'First Name' => 'Mohammad',
        'Last Name' => 'Rezaei',
        'Username' => '@mrezaei'
    ],
    [ 
        '#' => 2,
        'First Name' => 'Abbas',
        'Last Name' => 'Ahmadi',
        'Username' => '@aahmadi'
    ],
    [ 
        '#' => 3,
        'First Name' => 'Fatemeh',
        'Last Name' => 'Mohammadi',
        'Username' => '@fmohammadi'
    ]
];
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>برنامه نویسی وب - اطلاعات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <style>
        body {
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        h1 {
            color: #0d6efd;
            margin-bottom: 30px;
            font-weight: 600;
        }
        table {
            margin-top: 20px;
            border: 1px solid #dee2e6;
            background-color: #fff;
        }
        th, td {
            padding: 12px 15px;
            vertical-align: middle;
        }
        th {
            font-weight: 600;
            font-size: 1.05rem;
        }
    </style>
</head>
<body style="max-width: 800px; margin: 0 auto;">
    <h1 class="text-center">لیست کاربران</h1>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $value): ?>
                <tr>
                    <?php foreach ($value as $v): ?>
                        <td><?= htmlspecialchars($v) ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
