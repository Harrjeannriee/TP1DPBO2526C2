from fitur import tambahData, tampilkanData, updateFilm, deleteFilm, searchFilm
from file import bacaData

def main():
    daftarFilm = bacaData()

    while True:
        print("\n-----------------------------")
        print("|     MENU FILM BIOSKOP     |")
        print("-----------------------------")
        print("| 1. Tambah Data            |")
        print("| 2. Tampilkan Data         |")
        print("| 3. Update Data            |")
        print("| 4. Hapus Data             |")
        print("| 5. Cari Data              |")
        print("| 6. Exit                   |")
        print("-----------------------------")

        pilihan = input("Pilih Menu(nomor): ")
        if pilihan == "1":
            tambahData(daftarFilm)
        elif pilihan == "2":
            tampilkanData(daftarFilm)
        elif pilihan == "3":
            updateFilm(daftarFilm)
        elif pilihan == "4":
            deleteFilm(daftarFilm)
        elif pilihan == "5":
            searchFilm(daftarFilm)
        elif pilihan == "6":
            print("\nProgram Selesai")
            break
        else:
            print("\nPilihan Tidak Tersedia")


if __name__ == "__main__":
    main()