#include <string>
using namespace std;

// class bernama Film dengan 5 datanya
class Film{
    private:
        string idFilm;
        string Judul;
        string Genre;
        int Durasi;
        int TahunRilis;

    public:
        // Constructor
        Film();
        Film(string idFilm, string Judul, string Genre, int Durasi, int TahunRilis);

        // FUNGSI GETTER DAN SETTER (belum ada isinya)
        string getIdFilm();
        void setIdFilm(string idFilm);

        string getJudul();
        void setJudul(string Judul);

        string getGenre();
        void setGenre(string Genre);

        int getDurasi();
        void setDurasi(int Durasi);

        int getTahunRilis();
        void setTahunRilis(int TahunRilis);
};