public class Film
{
    private String idFilm;
    private String Judul;
    private String Genre;
    private int Durasi;
    private int TahunRilis;

    // constructor
    public Film(String idFilm, String Judul, String Genre, int Durasi, int TahunRilis)
    {
        this.idFilm = idFilm;
        this.Judul = Judul;
        this.Genre = Genre;
        this.Durasi = Durasi;
        this.TahunRilis = TahunRilis;
    }

    // Getter dan Setter idFilm
    public String getIdFilm()
    {
        return idFilm;
    }
    public void setIdFilm(String idFilm)
    {
        this.idFilm = idFilm;
    }

    // Getter dan Setter Judul
    public String getJudul()
    {
        return Judul;
    }
    public void setJudul(String Judul)
    {
        this.Judul = Judul;
    }

    // Getter dan Setter Genre
    public String getGenre()
    {
        return Genre;
    }
    public void setGenre(String Genre)
    {
        this.Genre = Genre;
    }

    // Getter dan Setter Durasi
    public int getDurasi()
    {
        return Durasi;
    }
    public void setDurasi(int Durasi)
    {
        this.Durasi = Durasi;
    }

    // Getter dan Setter TahunRilis
    public int getTahunRilis()
    {
        return TahunRilis;
    }
    public void setTahunRilis(int TahunRilis)
    {
        this.TahunRilis = TahunRilis;
    }
}