#include "Film.h"
#include <vector>
#include <fstream>  //untuk membaca dan menulis file
#include <sstream>  //untuk memecah isi satu baris

using namespace std;

// BACA DATA
vector<Film> bacaData(){    //bikin fungsi yang akan mengembalikan vector berisi object film
    vector<Film> daftarFilm;    //membuat wadah kosong

    // buka file film.txt buat dibaca
    ifstream file("film.txt");

    string baris;

    // baca file per baris
    while(getline(file, baris))
    {
        stringstream ss(baris);

        // tempat untuk memisahkan kata pada satu baris 
        string idFilm;
        string Judul;
        string Genre;
        string Durasi;
        string TahunRilis;

        // ambil data setiap ketemu |
        getline(ss, idFilm, '|');
        getline(ss, Judul, '|');
        getline(ss, Genre, '|');
        getline(ss, Durasi, '|');
        getline(ss, TahunRilis, '|');

        Film filmBaru(
            idFilm, Judul, Genre, stoi(Durasi), stoi(TahunRilis)
        );

        // masukkan filmBaru ke daftarFilm
        daftarFilm.push_back(filmBaru);
    }

    file.close();   //selesai baca file

    return daftarFilm;
}


// SIMPAN DATA
void simpanData(vector<Film> daftarFilm)
{
    // buka file untuk menulis
    ofstream file("film.txt");

    // setiap objek film yang ada di daftarFilm masukkan sementara ke variabel film
    for(Film film : daftarFilm)
    {
        // gabungkan dengan |
        file << film.getIdFilm() << "|";
        file << film.getJudul() << "|";
        file << film.getGenre() << "|";
        file << film.getDurasi() << "|";
        file << film.getTahunRilis() << endl;
    }
    file.close();
}
