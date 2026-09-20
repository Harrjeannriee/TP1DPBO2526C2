<?php

require_once "film.php";
session_start();

if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}

$hasil = [];


// ========================================
// CARI DATA
// ========================================

if (isset($_GET['judul'])) {

    $judulCari = strtolower(trim($_GET['judul']));

    foreach ($_SESSION['daftarFilm'] as $film) {

        if (
            strtolower($film->getJudul()) == $judulCari
        ) {

            $hasil[] = $film;

        }

    }

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cari Data Film</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar">

    <div class="logo">

        <div class="logo-icon">🎞</div>

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

        <a href="tambah.php">
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

        <a href="cari.php" class="active">
            ⌕ Cari Data
        </a>

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

        <h1>Cari Data Film</h1>

        <p class="form-description">
            Masukkan judul film yang ingin dicari.
        </p>


        <!-- FORM SEARCH -->

        <form method="GET">

            <div class="search-box">

                <input
                    type="text"
                    name="judul"
                    placeholder="Contoh: Interstellar"
                    required
                >

                <button
                    type="submit"
                    class="btn-primary"
                >
                    ⌕ Cari
                </button>

            </div>

        </form>


        <?php if (isset($_GET['judul'])) { ?>

            <hr class="form-divider">


            <?php if (count($hasil) > 0) { ?>

                <h2 class="hasil-title">
                    Hasil Pencarian
                </h2>


                <?php foreach ($hasil as $film) { ?>

                    <div class="search-result">

                        <img
                            src="<?= $film->getGambar(); ?>"
                            alt="<?= $film->getJudul(); ?>"
                        >


                        <div>

                            <h2>
                                <?= $film->getJudul(); ?>
                            </h2>

                            <p>
                                <strong>ID:</strong>
                                <?= $film->getIdFilm(); ?>
                            </p>

                            <p>
                                <strong>Genre:</strong>
                                <?= $film->getGenre(); ?>
                            </p>

                            <p>
                                <strong>Durasi:</strong>
                                <?= $film->getDurasi(); ?>
                                menit
                            </p>

                            <p>
                                <strong>Tahun:</strong>
                                <?= $film->getTahunRilis(); ?>
                            </p>

                        </div>

                    </div>

                <?php } ?>


            <?php } else { ?>

                <p class="pesan-error">
                    Film tidak ditemukan.
                </p>

            <?php } ?>

        <?php } ?>

    </div>

</main>

</body>
</html>