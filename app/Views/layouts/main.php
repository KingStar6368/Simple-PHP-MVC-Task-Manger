<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت کار</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        header { background: #35424a; color: white; padding: 20px; margin-bottom: 20px; }
        nav a { color: white; margin-right: 20px; text-decoration: none; }
        .btn { display: inline-block; padding: 10px 15px; background: #35424a; color: white; text-decoration: none; border: none; cursor: pointer; }
        .btn-danger { background: #e74c3c; }
        .btn-success { background: #27ae60; }
        table { width: 100%; background: white; border-collapse: collapse; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f5f5f5; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>مدیریت کار</h1>
            <nav>
                <a href="/tasks">خانه</a>
                <a href="/tasks/create">کار جدید</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <?php include "../app/Views/$view.php"; ?>
    </div>
</body>
</html>