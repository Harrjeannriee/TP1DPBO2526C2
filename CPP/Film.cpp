#include "Film.h"

// mengisi Construktor yang dimiliki oleh class film (class::contruktor)
Film::Film(){

}

// constructor yang digunakan ketika memberikan data pada object
Film::Film(string idFilm, string Judul, string Genre, int Durasi, int TahunRilis){
    // Note buat saya: (this->object = parameter constructor)
    this->idFilm = idFilm;
    this->Judul = Judul;
    this->Genre = Genre;
    this->Durasi = Durasi;
    this->TahunRilis = TahunRilis;
}

// GETTER DAN SETTER idFilm
string Film::getIdFilm(){
    return idFilm;
}
void Film::setIdFilm(string idFilm){
    this->idFilm = idFilm;
}

// GETTER DAN SETTER Judul
string Film::getJudul(){
    return Judul;
}
void Film::setJudul(string Judul){
    this->Judul = Judul;
}

// GETTER DAN SETTE Durasi
string Film::getGenre(){
    return Genre;
}
void Film::setGenre(string Genre){
    this->Genre = Genre;
}

// GETTER DAN SETTE Durasi
int Film::getDurasi(){
    return Durasi;
}
void Film::setDurasi(int Durasi){
    this->Durasi = Durasi;
}

// GETTER DAN SETTER TahunRilis
int Film::getTahunRilis(){
    return TahunRilis;
}
void Film::setTahunRilis(int TahunRilis){
    this->TahunRilis = TahunRilis;
}
