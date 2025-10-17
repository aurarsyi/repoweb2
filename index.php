<?php
// index.php - Halaman Dinamis dengan Tema Waktu (Warna Gradasi Biru Sesuai Waktu)

// Judul halaman
$title = "Selamat Datang di APP2";

// Waktu saat ini
$date = date('l, d F Y H:i:s');
$hour = date('H');

// Identitas Pembuat
$name = "Aura Rizkiatul Arsyi";
$nim = "H1101231003";

// Tema warna biru sesuai waktu
if ($hour >= 5 && $hour < 11) {
    // Pagi — biru lembut dan cerah
    $bgColor = "linear-gradient(135deg, #D6EAF8, #AED6F1)";
    $textColor = "#1A1A1A";
    $greeting = "Selamat Pagi! Awali harimu dengan semangat dan senyum 😊";
} elseif ($hour >= 11 && $hour < 15) {
    // Siang — biru langit segar
    $bgColor = "linear-gradient(135deg, #5DADE2, #3498DB)";
    $textColor = "#fff";
    $greeting = "Selamat Siang! Terus produktif dan jangan lupa istirahat sejenak ☀️";
} elseif ($hour >= 15 && $hour < 18) {
    // Sore — biru agak gelap ke navy lembut
    $bgColor = "linear-gradient(135deg, #2874A6, #1B4F72)";
    $textColor = "#f1f1f1";
    $greeting = "Selamat Sore! Waktu yang pas untuk refleksi dan bersyukur 🌇";
} else {
    // Malam — biru tua ke hitam elegan
    $bgColor = "linear-gradient(135deg, #0D1B2A, #1B263B)";
    $textColor = "#EAECEE";
    $greeting = "Selamat Malam! Waktunya menenangkan diri dan beristirahat 🌙";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: <?php echo $bgColor; ?>;
            color: <?php echo $textColor; ?>;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            transition: background 1s ease;
        }

        .card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            max-width: 700px;
            width: 90%;
            padding: 50px;
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        h1 {
            color: #FFFFFF;
            font-size: 2em;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .info {
            margin-top: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            display: inline-block;
            animation: pulse 3s infinite;
        }

        .highlight {
            color: #00BFFF;
            font-weight: 600;
        }

        .footer {
            margin-top: 40px;
            font-size: 0.9em;
            opacity: 0.85;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(0,191,255, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(0,191,255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0,191,255, 0); }
        }

        .quote {
            margin-top: 25px;
            font-style: italic;
            font-size: 1em;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $title; ?></h1>
        <p>Website ini berhasil di-deploy menggunakan <span class="highlight">GitHub Actions CI/CD</span>.</p>
        <p>Waktu saat ini: <strong><?php echo $date; ?></strong></p>

        <div class="info">
            <p><strong><?php echo $greeting; ?></strong></p>
        </div>

        <div class="quote">
            <?php
                // Pesan motivasi acak ringan
                $quotes = [
                    "Konsistensi kecil setiap hari jauh lebih berarti daripada usaha besar sesekali.",
                    "Belajar bukan soal cepat, tapi soal terus melangkah.",
                    "Kamu tidak harus hebat untuk memulai, tapi kamu harus memulai untuk menjadi hebat.",
                    "Setiap kesulitan adalah tanda bahwa kamu sedang bertumbuh.",
                    "Jangan takut gagal, takutlah jika kamu berhenti mencoba."
                ];
                echo $quotes[array_rand($quotes)];
            ?>
        </div>

        <div class="footer">
            <p>Dikembangkan oleh <span class="highlight"><?php echo $name; ?></span><br>
            NIM: <strong><?php echo $nim; ?></strong></p>
            &copy; <?php echo date('Y'); ?> APP1. All Rights Reserved.
        </div>
    </div>
</body>
</html>
