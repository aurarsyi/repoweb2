<?php
// index.php - Halaman Awal

// Judul halaman
$title = "Selamat Datang di APP2";

// Waktu saat ini
$date = date('l, d F Y H:i:s');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 100px auto;
            text-align: center;
        }
        h1 {
            color: #007bff;
        }
        p {
            font-size: 1.1em;
            margin-top: 20px;
        }
        .footer {
            margin-top: 50px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <p>Website ini berhasil di-deploy menggunakan GitHub Actions CI/CD.</p>
        <p>Waktu saat ini: <?php echo $date; ?></p>
        <div class="footer">
            &copy; <?php echo date('Y'); ?> APP1. All rights reserved.
        </div>
    </div>
</body>
</html>
