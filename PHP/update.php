<?php

require_once "film.php";
session_start();

if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}

$filmDipilih = null;


// ========================================
// MENCARI DATA BERDASARKAN ID
// ========================================

if (isset($_POST['cariId'])) {

    $idFilm = $_POST['idFilm'];

    foreach ($_SESSION['daftarFilm'] as $film) {

        if ($film->getIdFilm() == $idFilm) {
            $filmDipilih = $film;
            break;
        }
    }
}


// ========================================
// MENYIMPAN PERUBAHAN
// ========================================

if (isset($_POST['update'])) {

    $idFilm = $_POST['idFilm'];

    foreach ($_SESSION['daftarFilm'] as $film) {

        if ($film->getIdFilm() == $idFilm) {

            $film->setJudul($_POST['judul']);
            $film->setGenre($_POST['genre']);
            $film->setDurasi($_POST['durasi']);
            $film->setTahunRilis($_POST['tahunRilis']);
            $film->setGambar($_POST['gambar']);

            break;
        }
    }

    header("Location: tampil.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Data Film</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar">

    <div class="logo">

        <div class="logo-icon">🎞</div>

        <div>
            <div class="logo-title">Gladioulus</div>

            <div class="logo-subtitle">
                MOVIES TP 1
            </div>
        </div>

    </div>


    <div class="nav-menu">

        <a href="index.php">⌂ Home</a>

        <a href="tambah.php">＋ Tambah Data</a>

        <a href="tampil.php">▤ Tampilkan Data</a>

        <a href="update.php" class="active">
            ✎ Update Data
        </a>

        <a href="hapus.php">▣ Hapus Data</a>

        <a href="cari.php">⌕ Cari Data</a>

    </div>


    <div class="slogan">
        <span>Good Movies</span>
        <br>
        <span>Better Days</span>
    </div>

</nav>


<!-- CONTENT -->

<main class="form-page">

    <div class="form-card">

        <h1>Update Data Film</h1>

        <p class="form-description">
            Masukkan ID film yang ingin diperbarui.
        </p>


        <!-- FORM CARI ID -->

        <form method="POST">

            <div class="form-group">

                <label>ID Film</label>

                <input
                    type="text"
                    name="idFilm"
                    placeholder="Contoh: F001"
                    required
                >

            </div>

            <div class="form-buttons">

                <button
                    type="submit"
                    name="cariId"
                    class="btn-primary"
                >
                    Cari Data
                </button>

            </div>

        </form>


        <?php if ($filmDipilih != null) { ?>

            <hr class="form-divider">


            <p class="form-description">
                Data ditemukan. Silakan ubah informasi film.
            </p>


            <!-- FORM UPDATE -->

            <form method="POST">

                <input
                    type="hidden"
                    name="idFilm"
                    value="<?= $filmDipilih->getIdFilm(); ?>"
                >


                <div class="form-group">

                    <label>Judul Film</label>

                    <input
                        type="text"
                        name="judul"
                        value="<?= $filmDipilih->getJudul(); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Genre</label>

                    <input
                        type="text"
                        name="genre"
                        value="<?= $filmDipilih->getGenre(); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Durasi (menit)</label>

                    <input
                        type="number"
                        name="durasi"
                        value="<?= $filmDipilih->getDurasi(); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Tahun Rilis</label>

                    <input
                        type="number"
                        name="tahunRilis"
                        value="<?= $filmDipilih->getTahunRilis(); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Gambar Film</label>

                    <input
                        type="text"
                        name="gambar"
                        value="<?= $filmDipilih->getGambar(); ?>"
                        required
                    >

                </div>


                <div class="form-buttons">

                    <button
                        type="submit"
                        name="update"
                        class="btn-primary"
                    >
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        <?php } ?>


        <?php

        if (isset($_POST['cariId']) && $filmDipilih == null) {

            echo '<p class="pesan-error">
                    Data film dengan ID tersebut tidak ditemukan.
                  </p>';
        }

        ?>

    </div>

</main>

</body>
</html>