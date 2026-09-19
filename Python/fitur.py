from film import Film
from file import simpanData

#   TAMBAH DATA FILM
def tambahData(daftarFilm):
    print("--------------------------")
    print("|    TAMBAH DATA FILM    |")
    print("--------------------------")
    idFilm = input("ID film      : ")
    Judul = input("Judul        : ")
    Genre = input("Genre        : ")
    Durasi = int(input("Durasi       : "))
    TahunRilis = int(input("Tahun Rilis  : "))

    # Wadah atau list
    filmBaru = Film(idFilm, Judul, Genre, Durasi, TahunRilis)

    # masukkan objek ke list
    daftarFilm.append(filmBaru)

    simpanData(daftarFilm)

    print("\nData film berhasil ditambahkan!")

# TAMPILKAN DATA FILM
def tampilkanData(daftarFilm):
    print("--------------------------------")
    print("|      DATA FILM TERSEDIA      |")
    print("--------------------------------")

    if len(daftarFilm) == 0:
        print("\nBelum ada data film...")
        return
    
    for film in daftarFilm:
        print("\nID Film        : ", film.getIdFilm())
        print("Judul          : ", film.getJudul())
        print("ID Genre       : ", film.getGenre())
        print("ID Durasi      : ", film.getDurasi(), "menit")
        print("ID Tahun Rilis : ", film.getTahunRilis())

# UPDATE DATA FILM
def updateFilm(daftarFilm):
    print("-----------------------")
    print("|  UPDATE DATA FILM   |")
    print("-----------------------")

    idFilm = input("Masukkan ID Film yang ingin diupdate: ")

    # loop data yang tersimpan pada daftarfilm
    for film in daftarFilm:
        # bandingkan, jika sama lanjut minta data baru
        if film.getIdFilm() == idFilm:
            print("\nData film ditemukan")
            print("Masukkan Data Baru: ")
            
            Judul = input("Judul        : ")
            Genre = input("Genre        : ")
            Durasi = int(input("Durasi       : "))
            TahunRilis = int(input("Tahun Rilis  : "))

            film.setJudul(Judul)
            film.setGenre(Genre)
            film.setDurasi(Durasi)
            film.setTahunRilis(TahunRilis)

            # Simpan update-an data ke file.txt
            simpanData(daftarFilm)

            print("\nData film berhasil diupdate")
            return

    # jika id yang diminta tidak ada
    print("Data film tidak ditemukan...")

# DELETE DATA FILM
def deleteFilm(daftarFilm):
    print("--------------------------")
    print("|    DELETE DATA FILM    |")
    print("--------------------------")

    idFilm = input("Masukkan ID Film yang ingin didelete: ")

    for film in daftarFilm:
        if film.getIdFilm() == idFilm:
            daftarFilm.remove(film)

            # Simpan data terkini ke file
            simpanData(daftarFilm)

            print("\nData film berhasil dihapus!")
            return

    # Kalau data yang diminta gak ada
    print("\nData film tidak ditemukan...")

# CARI DATA FILM
def searchFilm(daftarFilm):
    judul = input("Masukkan Judul Film yang ingin dicari: ")

    for film in daftarFilm:
        if film.getJudul().lower() == judul.lower():
            print("\n   !Data Film Ditemukan!   ")
            print("ID Film : ", film.getIdFilm())
            print("Judul : ", film.getJudul())
            print("Genre : ", film.getGenre())
            print("Durasi : ", film.getDurasi(), "menit")
            print("Tahun Rilis : ", film.getTahunRilis())
            return
        
    # Jika id tidak ditemukan di daftar
    print("\nFilm tidak ditemukan...")        
