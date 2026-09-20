<?php

class Film
{
    private $idFilm;
    private $judul;
    private $genre;
    private $durasi;
    private $tahunRilis;
    private $gambar;

    // Constructor
    public function __construct($idFilm, $judul, $genre, $durasi, $tahunRilis, $gambar)
    {
        $this->idFilm = $idFilm;
        $this->judul = $judul;
        $this->genre = $genre;
        $this->durasi = $durasi;
        $this->tahunRilis = $tahunRilis;
        $this->gambar = $gambar;
    }

    // Getter dan Setter ID Film
    public function getIdFilm()
    {
        return $this->idFilm;
    }
    public function setIdFilm($idFilm)
    {
        $this->idFilm = $idFilm;
    }

    // Getter dan Setter Judul
    public function getJudul()
    {
        return $this->judul;
    }
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    // Getter dan Setter Genre
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    // Getter dan Setter Durasi
    public function getDurasi()
    {
        return $this->durasi;
    }
    public function setDurasi($durasi)
    {
        $this->durasi = $durasi;
    }

    // Getter dan Setter Tahun Rilis
    public function getTahunRilis()
    {
        return $this->tahunRilis;
    }
    public function setTahunRilis($tahunRilis)
    {
        $this->tahunRilis = $tahunRilis;
    }

    // Getter dan Setter Gambar
    public function getGambar()
    {
        return $this->gambar;
    }
    public function setGambar($gambar)
    {
        $this->gambar = $gambar;
    }
}

?>