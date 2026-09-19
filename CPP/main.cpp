#include "Film.h"
#include <vector>
#include <iostream>

using namespace std;

// Fungsi dari fitur.cpp
void tambahData(vector<Film>& daftarFilm);
void tampilkanData(vector<Film>& daftarFilm);
void updateFilm(vector<Film>& daftarFilm);
void deleteFilm(vector<Film>& daftarFilm);
void searchFilm(vector<Film>& daftarFilm);

// Fungsi dari file.cpp
vector<Film> bacaData();


int main()
{
    vector<Film> daftarFilm = bacaData();

    while (true)
    {
        cout << "\n-----------------------------" << endl;
        cout << "|     MENU FILM BIOSKOP     |" << endl;
        cout << "-----------------------------" << endl;
        cout << "| 1. Tambah Data            |" << endl;
        cout << "| 2. Tampilkan Data         |" << endl;
        cout << "| 3. Update Data            |" << endl;
        cout << "| 4. Hapus Data             |" << endl;
        cout << "| 5. Cari Data              |" << endl;
        cout << "| 6. Exit                   |" << endl;
        cout << "-----------------------------" << endl;

        int pilihan;

        cout << "Pilih Menu (nomor): ";
        cin >> pilihan;

        // Mengecek apakah input berhasil dibaca
        if (cin.fail())
        {
            cout << "\nInput tidak valid! Masukkan angka 1-6." << endl;

            cin.clear();
            cin.ignore(1000, '\n');

            continue;
        }

        if (pilihan == 1)
        {
            tambahData(daftarFilm);
        }
        else if (pilihan == 2)
        {
            tampilkanData(daftarFilm);
        }
        else if (pilihan == 3)
        {
            updateFilm(daftarFilm);
        }
        else if (pilihan == 4)
        {
            deleteFilm(daftarFilm);
        }
        else if (pilihan == 5)
        {
            searchFilm(daftarFilm);
        }
        else if (pilihan == 6)
        {
            cout << "\nProgram Selesai" << endl;
            break;
        }
        else
        {
            cout << "\nPilihan Tidak Tersedia" << endl;
        }
    }

    return 0;
}