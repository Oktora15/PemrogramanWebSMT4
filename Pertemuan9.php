<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kategori Usia Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .header .icon {
            font-size: 48px;
            margin-bottom: 12px;
        }

        .header h1 {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1.3;
        }

        .header p {
            font-size: 13px;
            color: #888;
            margin-top: 6px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e8e8e8;
            border-radius: 10px;
            font-size: 15px;
            color: #1a1a2e;
            transition: border-color 0.2s;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #0f3460;
        }

        input[type="text"]::placeholder,
        input[type="number"]::placeholder {
            color: #bbb;
        }

        button[type="submit"] {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #0f3460, #1a1a2e);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 8px;
            transition: opacity 0.2s, transform 0.1s;
        }

        button[type="submit"]:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        /* Result card */
        .result {
            margin-top: 28px;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .result .result-icon {
            font-size: 40px;
            margin-bottom: 8px;
        }

        .result .nama-output {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .result .umur-output {
            font-size: 13px;
            margin-bottom: 12px;
            opacity: 0.75;
        }

        .result .kategori-label {
            display: inline-block;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .kategori-anak     { background: #fff3cd; color: #664d00; }
        .icon-anak         { color: #f59e0b; }
        .label-anak        { background: #f59e0b; color: white; }

        .kategori-remaja   { background: #d1fae5; color: #064e3b; }
        .icon-remaja       { color: #10b981; }
        .label-remaja      { background: #10b981; color: white; }

        .kategori-dewasa   { background: #dbeafe; color: #1e3a5f; }
        .icon-dewasa       { color: #3b82f6; }
        .label-dewasa      { background: #3b82f6; color: white; }

        .kategori-lansia   { background: #ede9fe; color: #3b0764; }
        .icon-lansia       { color: #8b5cf6; }
        .label-lansia      { background: #8b5cf6; color: white; }

        .divider {
            border: none;
            border-top: 1px solid #f0f0f0;
            margin: 28px 0 0;
        }

        .footer-note {
            text-align: center;
            font-size: 11px;
            color: #ccc;
            margin-top: 16px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <div class="icon">🎓</div>
        <h1>Cek Kategori Usia Mahasiswa</h1>
        <p>Masukkan nama dan umur untuk melihat kategori usia</p>
    </div>

    <form method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Contoh: Budi Santoso"
                value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>"
                required
            >
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input
                type="number"
                id="umur"
                name="umur"
                placeholder="Contoh: 20"
                min="0"
                max="120"
                value="<?php echo isset($_POST['umur']) ? htmlspecialchars($_POST['umur']) : ''; ?>"
                required
            >
        </div>

        <button type="submit" name="submit">Cek Kategori Usia</button>
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $nama = htmlspecialchars($_POST['nama']);
        $umur = (int) $_POST['umur'];

        if ($umur < 13) {
            $kategori  = "Anak-anak";
            $kelas     = "anak";
            $emoji     = "🧒";
            $deskripsi = "Masa pertumbuhan dan belajar";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori  = "Remaja";
            $kelas     = "remaja";
            $emoji     = "🧑";
            $deskripsi = "Masa perkembangan dan pencarian jati diri";
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori  = "Dewasa";
            $kelas     = "dewasa";
            $emoji     = "👨";
            $deskripsi = "Masa produktif dan tanggung jawab";
        } else {
            $kategori  = "Lansia";
            $kelas     = "lansia";
            $emoji     = "👴";
            $deskripsi = "Masa bijaksana penuh pengalaman";
        }

        // Tampilkan hasil
        echo "
        <hr class='divider'>
        <div class='result kategori-{$kelas}'>
            <div class='result-icon icon-{$kelas}'>{$emoji}</div>
            <div class='nama-output'>{$nama}</div>
            <div class='umur-output'>Umur: {$umur} tahun</div>
            <span class='kategori-label label-{$kelas}'>{$kategori}</span>
            <p style='margin-top:10px; font-size:12px; opacity:0.7;'>{$deskripsi}</p>
        </div>
        ";
    }
    ?>

    <p class="footer-note">Program PHP Dasar &mdash; Praktikum Web Development</p>
</div>

</body>
</html>