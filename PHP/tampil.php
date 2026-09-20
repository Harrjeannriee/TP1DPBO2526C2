<?php

require_once "film.php";
session_start();

if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}

$daftarFilm = $_SESSION['daftarFilm'];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tampilkan Data Film</title>

    <link rel="stylesheet" href="style.css?v=2">    
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">🎞</div>
            <div>
                <div class="logo-title">Gladioulus</div>
                <div class="logo-subtitle">MOVIES TP 1</div>
            </div>
        </div>

        <div class="nav-menu">
            <a href="index.php">
                <span>⌂</span>
                Home
            </a>

            <a href="tambah.php">
                <span>＋</span>
                Tambah Data
            </a>

            <a href="tampil.php" class="active">
                <span>▤</span>
                Tampilkan Data
            </a>

            <a href="update.php">
                <span>✎</span>
                Update Data
            </a>

            <a href="hapus.php">
                <span>▣</span>
                Hapus Data
            </a>

            <a href="cari.php">
                <span>⌕</span>
                Cari Data
            </a>
        </div>

        <div class="slogan">
            <span>Good Movies</span><br>
            <span>Better Days</span>
        </div>
    </nav>

    <!-- TAMPIL DATA-->
    <main class="table-page">
        <div class="table-card">
            <h1>DAFTAR FILM TERSEDIA</h1>
            <p class="table-description">
                Berikut adalah daftar film yang tersedia...
            </p>

            <?php if (count($daftarFilm) > 0): ?>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>ID Film</th>
                                <th>Judul</th>
                                <th>Genre</th>
                                <th>Durasi</th>
                                <th>Tahun Rilis</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($daftarFilm as $film): ?>
                                <tr>
                                    <td>
                                        <img
                                            src="<?php echo htmlspecialchars($film->getGambar()); ?>"
                                            alt="<?php echo htmlspecialchars($film->getJudul()); ?>"
                                            class="film-image"
                                        >
                                        <p>
                                             Path: <?php echo htmlspecialchars($film->getGambar()); ?>
                                        </p>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($film->getIdFilm()); ?>
                                    </td>

                                    <td class="film-title">
                                        <?php echo htmlspecialchars($film->getJudul()); ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($film->getGenre()); ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($film->getDurasi()); ?>
                                        menit
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($film->getTahunRilis()); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            <?php else: ?>
                <div class="empty-data">
                    <div class="empty-icon">🎞</div>
                    <h2>Belum Ada Data Film</h2>
                    <p>
                        Belum ada film yang ditambahkan ke dalam daftar.
                    </p>

                    <a href="tambah.php" class="btn-primary">
                        ＋ Tambah Film
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>