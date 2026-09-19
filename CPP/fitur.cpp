#include "Film.h"
#include <vector>
#include <iostream>
#include <string>
#include <algorithm>
#include <cctype>

using namespace std;

void simpanData(vector<Film> daftarFilm);

string lowerString(string teks)
{
    transform(teks.begin(), teks.end(), teks.begin(), ::tolower);

    return teks;
}


// TAMBAH DATA FILM
void tambahData(vector<Film>& daftarFilm)
{
    cout << "--------------------------" << endl;
    cout << "|    TAMBAH DATA FILM    |" << endl;
    cout << "--------------------------" << endl;

    string idFilm;
    string Judul;
    string Genre;
    int Durasi;
    int TahunRilis;

    // Membersihkan enter dari input menu sebelumnya
    cin.ignore();

    cout << "ID film      : ";
    getline(cin, idFilm);

    cout << "Judul        : ";
    getline(cin, Judul);

    cout << "Genre        : ";
    getline(cin, Genre);

    cout << "Durasi       : ";
    cin >> Durasi;

    cout << "Tahun Rilis  : ";
    cin >> TahunRilis;

    Film filmBaru(idFilm, Judul, Genre, Durasi, TahunRilis);

    daftarFilm.push_back(filmBaru);

    simpanData(daftarFilm);

    cout << "\nData film berhasil ditambahkan!" << endl;
}


// UPDATE DATA FILM
void updateFilm(vector<Film>& daftarFilm)
{
    cout << "-----------------------" << endl;
    cout << "|  UPDATE DATA FILM   |" << endl;
    cout << "-----------------------" << endl;

    string idFilm;

    cout << "Masukkan ID Film yang ingin diupdate: ";
    cin >> idFilm;

    for (Film& film : daftarFilm)
    {
        if (film.getIdFilm() == idFilm)
        {
            cout << "\nData film ditemukan" << endl;
            cout << "Masukkan Data Baru:" << endl;

            string Judul;
            string Genre;
            int Durasi;
            int TahunRilis;

            // Membersihkan Enter setelah input ID
            cin.ignore();

            cout << "Judul        : ";
            getline(cin, Judul);

            cout << "Genre        : ";
            getline(cin, Genre);

            cout << "Durasi       : ";
            cin >> Durasi;

            cout << "Tahun Rilis  : ";
            cin >> TahunRilis;

            film.setJudul(Judul);
            film.setGenre(Genre);
            film.setDurasi(Durasi);
            film.setTahunRilis(TahunRilis);

            simpanData(daftarFilm);

            cout << "\nData film berhasil diupdate!" << endl;

            return;
        }
    }

    cout << "\nData film tidak ditemukan..." << endl;
}


// DELETE DATA FILM
void deleteFilm(vector<Film>& daftarFilm)
{
    cout << "--------------------------" << endl;
    cout << "|    DELETE DATA FILM    |" << endl;
    cout << "--------------------------" << endl;

    string idFilm;

    cout << "Masukkan ID Film yang ingin didelete: ";
    cin >> idFilm;

    for (auto it = daftarFilm.begin(); it != daftarFilm.end(); it++)
    {
        if (it->getIdFilm() == idFilm)
        {
            daftarFilm.erase(it);

            simpanData(daftarFilm);

            cout << "\nData film berhasil dihapus!" << endl;

            return;
        }
    }

    cout << "\nData film tidak ditemukan..." << endl;
}


// CARI DATA FILM
void searchFilm(vector<Film>& daftarFilm)
{
    string judul;

    cout << "Masukkan Judul Film yang ingin dicari: ";
    cin.ignore();
    getline(cin, judul);

    for (Film film : daftarFilm)
    {
        if (lowerString(film.getJudul()) == lowerString(judul))
        {
            cout << "\n   !Data Film Ditemukan!   " << endl;
            cout << "ID Film      : " << film.getIdFilm() << endl;
            cout << "Judul        : " << film.getJudul() << endl;
            cout << "Genre        : " << film.getGenre() << endl;
            cout << "Durasi       : " << film.getDurasi() << " menit" << endl;
            cout << "Tahun Rilis  : " << film.getTahunRilis() << endl;

            return;
        }
    }

    // Jika judul tidak ditemukan di daftar
    cout << "\nFilm tidak ditemukan..." << endl;
}

// TAMPILKAN DATA FILM
void tampilkanData(vector<Film>& daftarFilm)
{
    cout << "--------------------------------" << endl;
    cout << "|      DATA FILM TERSEDIA      |" << endl;
    cout << "--------------------------------" << endl;

    if (daftarFilm.size() == 0)
    {
        cout << "\nBelum ada data film..." << endl;
        return;
    }

    for (Film film : daftarFilm)
    {
        cout << "\nID Film        : " << film.getIdFilm() << endl;
        cout << "Judul          : " << film.getJudul() << endl;
        cout << "Genre          : " << film.getGenre() << endl;
        cout << "Durasi         : " << film.getDurasi() << " menit" << endl;
        cout << "Tahun Rilis    : " << film.getTahunRilis() << endl;
    }
}