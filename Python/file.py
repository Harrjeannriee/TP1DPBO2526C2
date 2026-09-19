from film import Film

# WRITE DATA FILM
def simpanData(daftarFilm):
    file = open("film.txt", "w")

    for film in daftarFilm:
        file.write(film.getIdFilm() + "|")
        file.write(film.getJudul() + "|")
        file.write(film.getGenre() + "|")
        file.write(str(film.getDurasi()) + "|")
        file.write(str(film.getTahunRilis()) + "\n")
        

    file.close()

# READ DATA FILM
def bacaData():
    daftarFilm = []

    file = open("film.txt", "r")

    for baris in file:
        data = baris.strip().split("|")

        filmBaru = Film(
            data[0], data[1], data[2], int(data[3]), int(data[4])
        )

        daftarFilm.append(filmBaru)

    file.close()

    return daftarFilm