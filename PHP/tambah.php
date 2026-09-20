<?php

require_once "film.php";

session_start();

if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}

if (isset($_POST['tambah'])) {

    $filmBaru = new Film(
        $_POST['idFilm'],
        $_POST['judul'],
        $_POST['genre'],
        $_POST['durasi'],
        $_POST['tahunRilis'],
        $_POST['gambar']
    );

    $_SESSION['daftarFilm'][] = $filmBaru;

    header("Location: tampil.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Film</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">
                🎞
            </div>

            <div>
                <div class="logo-title">
                    Gladioulus
                </div>

                <div class="logo-subtitle">
                    MOVIES TP 1
                </div>
            </div>
        </div>


        <div class="nav-menu">
            <a href="index.php">
                ⌂ Home
            </a>

            <a href="tambah.php" class="active">
                ＋ Tambah Data
            </a>

            <a href="tampil.php">
                ▤ Tampilkan Data
            </a>

            <a href="update.php">
                ✎ Update Data
            </a>

            <a href="hapus.php">
                ▣ Hapus Data
            </a>

            <a href="cari.php">
                ⌕ Cari Data
            </a>
        </div>


        <div class="slogan">
            <span>Good Movies</span>
            <br>
            <span>Better Days</span>
        </div>
    </nav>


    <!-- FORM TAMBAH -->
    <main class="form-page">
        <div class="form-card">
            <h1>Tambah Data Film</h1>
            <p class="form-description">
                Isi informasi film bioskop yang ingin ditambahkan
                ke dalam database.
            </p>
            <form method="POST">
                <div class="form-group">
                    <label>
                        ID Film
                    </label>
                    <input
                        type="text"
                        name="idFilm"
                        placeholder="Contoh: F001"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Judul Film
                    </label>
                    <input
                        type="text"
                        name="judul"
                        placeholder="Contoh: Interstellar"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Genre
                    </label>
                    <input
                        type="text"
                        name="genre"
                        placeholder="Contoh: Sci-Fi"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Durasi (menit)
                    </label>

                    <input
                        type="number"
                        name="durasi"
                        placeholder="Contoh: 169"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Tahun Rilis
                    </label>

                    <input
                        type="number"
                        name="tahunRilis"
                        placeholder="Contoh: 2014"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Gambar Film
                    </label>
                    <input
                        type="text"
                        name="gambar"
                        placeholder="Contoh: images/hero.jpg"
                        required
                    >
                    <small>
                        Masukkan path gambar lokal.
                    </small>
                </div>

                <div class="form-buttons">
                    <button
                        type="submit"
                        name="tambah"
                        class="btn-primary"
                    >
                        ⊕&nbsp; Simpan Data
                    </button>

                    <button
                        type="reset"
                        class="btn-secondary"
                    >
                        ↻&nbsp; Reset
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>