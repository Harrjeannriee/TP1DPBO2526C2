<?php

require_once "film.php";
session_start();

if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}


// ========================================
// HAPUS DATA
// ========================================

if (isset($_GET['id'])) {

    $idFilm = $_GET['id'];

    foreach ($_SESSION['daftarFilm'] as $index => $film) {

        if ($film->getIdFilm() == $idFilm) {

            unset($_SESSION['daftarFilm'][$index]);

            break;
        }
    }

    $_SESSION['daftarFilm'] =
        array_values($_SESSION['daftarFilm']);

    header("Location: hapus.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hapus Data Film</title>

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

        <a href="index.php">⌂ Home</a>

        <a href="tambah.php">＋ Tambah Data</a>

        <a href="tampil.php">▤ Tampilkan Data</a>

        <a href="update.php">✎ Update Data</a>

        <a href="hapus.php" class="active">
            ▣ Hapus Data
        </a>

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

        <h1>Hapus Data Film</h1>

        <p class="form-description">
            Pilih film yang ingin dihapus dari daftar.
        </p>


        <div class="delete-list">

            <?php if (count($_SESSION['daftarFilm']) == 0) { ?>

                <p class="pesan-info">
                    Belum ada data film.
                </p>

            <?php } ?>


            <?php foreach ($_SESSION['daftarFilm'] as $film) { ?>

                <div class="delete-item">

                    <div>

                        <strong>
                            <?= $film->getJudul(); ?>
                        </strong>

                        <p>
                            <?= $film->getIdFilm(); ?>
                            &nbsp; • &nbsp;
                            <?= $film->getGenre(); ?>
                            &nbsp; • &nbsp;
                            <?= $film->getTahunRilis(); ?>
                        </p>

                    </div>


                    <a
                        href="hapus.php?id=<?= $film->getIdFilm(); ?>"
                        class="btn-delete"
                        onclick="return confirm('Yakin ingin menghapus film ini?');"
                    >
                        Hapus
                    </a>

                </div>

            <?php } ?>

        </div>

    </div>

</main>

</body>

</html>