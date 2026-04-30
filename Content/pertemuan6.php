<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/style.css">
    <link rel="stylesheet" href="../Assets/style2.css">
</head>
<body>
    <?php include '../Assets/header.php'; ?>

    <div id="container">
        <h1>Form Pendaftaran Mahasiswa</h1>
        <p class="deskripsi">
            Silakan isi data pendaftaran dengan lengkap dan benar.
        </p>

        <form action="#" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="contoh@email.com"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input
                    type="date"
                    id="tanggal"
                    name="tanggal"
                    required
                >
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">Pilih jurusan</option>
                    <option value="informatika">Teknik Informatika</option>
                    <option value="sistem-informasi">Sistem Informasi</option>
                    <option value="manajemen">Manajemen</option>
                    <option value="akuntansi">Akuntansi</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="pilihan">
                    <input
                        type="radio"
                        id="laki"
                        name="jenis_kelamin"
                        value="Laki-laki"
                        required
                    >
                    <label for="laki">Laki-laki</label>
                </div>
                <div class="pilihan">
                    <input
                        type="radio"
                        id="perempuan"
                        name="jenis_kelamin"
                        value="Perempuan"
                    >
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label>Minat Belajar</label>
                <div class="pilihan">
                    <input
                        type="checkbox"
                        id="html"
                        name="minat[]"
                        value="HTML"
                    >
                    <label for="html">HTML</label>
                </div>
                <div class="pilihan">
                    <input
                        type="checkbox"
                        id="css"
                        name="minat[]"
                        value="CSS"
                    >
                    <label for="css">CSS</label>
                </div>
                <div class="pilihan">
                    <input
                        type="checkbox"
                        id="javascript"
                        name="minat[]"
                        value="JavaScript"
                    >
                    <label for="javascript">JavaScript</label>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea
                    id="alamat"
                    name="alamat"
                    rows="4"
                    placeholder="Masukkan alamat lengkap"
                    required
                ></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Kirim Data</button>
                <button type="reset" class="reset">Reset</button>
            </div>
        </form>
    </div>
    <?php include '../Assets/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>