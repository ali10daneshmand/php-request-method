<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت من</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            font-family: sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">سایت من</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="/">صفحه اصلی</a></li>
        <li class="nav-item"><a class="nav-link" href="/webprogramming/infs.php">اطلاعات</a></li>
        <li class="nav-item"><a class="nav-link" href="/webprogramming/contact-us.php">تماس با ما</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="form-container">
    <h4 class="mb-4 text-center">بخش اول: ارسال اطلاعات</h4>
    <form action="process-form.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">نام</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">نام خانوادگی</label>
            <input type="text" class="form-control" name="last_name" id="last_name" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
    </form>
</div>

</body>
</html>
