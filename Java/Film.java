import java.io.*;
import java.util.ArrayList;
import java.util.Scanner;

public class Film
{
    // ATRIBUT
    private String idFilm;
    private String judul;
    private String genre;
    private int durasi;
    private int tahunRilis;

    // CONSTRUCTOR
    public Film(String idFilm, String judul, String genre, int durasi, int tahunRilis)
    {
        this.idFilm = idFilm;
        this.judul = judul;
        this.genre = genre;
        this.durasi = durasi;
        this.tahunRilis = tahunRilis;
    }

    // GETTER DAN SETTER ID FILM
    public String getIdFilm()
    {
        return idFilm;
    }
    public void setIdFilm(String idFilm)
    {
        this.idFilm = idFilm;
    }

    // GETTER DAN SETTER JUDUL
    public String getJudul()
    {
        return judul;
    }
    public void setJudul(String judul)
    {
        this.judul = judul;
    }

    // GETTER DAN SETTER GENRE
    public String getGenre()
    {
        return genre;
    }
    public void setGenre(String genre)
    {
        this.genre = genre;
    }

    // GETTER DAN SETTER DURASI
    public int getDurasi()
    {
        return durasi;
    }
    public void setDurasi(int durasi)
    {
        this.durasi = durasi;
    }

    // GETTER DAN SETTER TAHUN RILIS
    public int getTahunRilis()
    {
        return tahunRilis;
    }
    public void setTahunRilis(int tahunRilis)
    {
        this.tahunRilis = tahunRilis;
    }

    // WRITE DATA FILM
    public static void simpanData(ArrayList<Film> daftarFilm)
    {
        try
        {
            FileWriter file = new FileWriter("film.txt");

            for (Film film : daftarFilm)
            {
                file.write(film.getIdFilm() + "|");
                file.write(film.getJudul() + "|");
                file.write(film.getGenre() + "|");
                file.write(String.valueOf(film.getDurasi()) + "|");
                file.write(String.valueOf(film.getTahunRilis()) + "\n");
            }

            file.close();
        }
        catch (IOException e)
        {
            System.out.println("Terjadi kesalahan saat menyimpan data.");
        }
    }

    // READ DATA FILM
    public static ArrayList<Film> bacaData()
    {
        ArrayList<Film> daftarFilm = new ArrayList<>();

        try
        {
            BufferedReader file = new BufferedReader(
                new FileReader("film.txt")
            );

            String baris;

            while ((baris = file.readLine()) != null)
            {
                String[] data = baris.split("\\|");

                Film filmBaru = new Film(
                    data[0],
                    data[1],
                    data[2],
                    Integer.parseInt(data[3]),
                    Integer.parseInt(data[4])
                );

                daftarFilm.add(filmBaru);
            }

            file.close();
        }
        catch (IOException e)
        {
            System.out.println("Terjadi kesalahan saat membaca data.");
        }

        return daftarFilm;
    }

    // TAMBAH DATA FILM
    public static void tambahData(
        ArrayList<Film> daftarFilm,
        Scanner input
    )
    {
        System.out.println("--------------------------");
        System.out.println("|    TAMBAH DATA FILM    |");
        System.out.println("--------------------------");

        System.out.print("ID film      : ");
        String idFilm = input.nextLine();

        System.out.print("Judul        : ");
        String judul = input.nextLine();

        System.out.print("Genre        : ");
        String genre = input.nextLine();

        System.out.print("Durasi       : ");
        int durasi = Integer.parseInt(input.nextLine());

        System.out.print("Tahun Rilis  : ");
        int tahunRilis = Integer.parseInt(input.nextLine());

        Film filmBaru = new Film(
            idFilm,
            judul,
            genre,
            durasi,
            tahunRilis
        );

        daftarFilm.add(filmBaru);

        simpanData(daftarFilm);

        System.out.println("\nData film berhasil ditambahkan!");
    }

    // TAMPILKAN DATA FILM
    public static void tampilkanData(ArrayList<Film> daftarFilm)
    {
        System.out.println("--------------------------------");
        System.out.println("|      DATA FILM TERSEDIA      |");
        System.out.println("--------------------------------");

        if (daftarFilm.size() == 0)
        {
            System.out.println("\nBelum ada data film...");
            return;
        }

        for (Film film : daftarFilm)
        {
            System.out.println("\nID Film        : " + film.getIdFilm());
            System.out.println("Judul          : " + film.getJudul());
            System.out.println("Genre          : " + film.getGenre());
            System.out.println("Durasi         : " + film.getDurasi() + " menit");
            System.out.println("Tahun Rilis    : " + film.getTahunRilis());
        }
    }

    // UPDATE DATA FILM
    public static void updateFilm(
        ArrayList<Film> daftarFilm,
        Scanner input
    )
    {
        System.out.println("-----------------------");
        System.out.println("|  UPDATE DATA FILM   |");
        System.out.println("-----------------------");

        System.out.print("Masukkan ID Film yang ingin diupdate: ");
        String idFilm = input.nextLine();

        for (Film film : daftarFilm)
        {
            if (film.getIdFilm().equals(idFilm))
            {
                System.out.println("\nData film ditemukan");
                System.out.println("Masukkan Data Baru:");

                System.out.print("Judul        : ");
                String judul = input.nextLine();

                System.out.print("Genre        : ");
                String genre = input.nextLine();

                System.out.print("Durasi       : ");
                int durasi = Integer.parseInt(input.nextLine());

                System.out.print("Tahun Rilis  : ");
                int tahunRilis = Integer.parseInt(input.nextLine());

                film.setJudul(judul);
                film.setGenre(genre);
                film.setDurasi(durasi);
                film.setTahunRilis(tahunRilis);

                simpanData(daftarFilm);

                System.out.println("\nData film berhasil diupdate!");

                return;
            }
        }

        System.out.println("\nData film tidak ditemukan...");
    }

    // DELETE DATA FILM
    public static void deleteFilm(
        ArrayList<Film> daftarFilm,
        Scanner input
    )
    {
        System.out.println("--------------------------");
        System.out.println("|    DELETE DATA FILM    |");
        System.out.println("--------------------------");

        System.out.print("Masukkan ID Film yang ingin didelete: ");
        String idFilm = input.nextLine();

        for (int i = 0; i < daftarFilm.size(); i++)
        {
            Film film = daftarFilm.get(i);

            if (film.getIdFilm().equals(idFilm))
            {
                daftarFilm.remove(i);

                simpanData(daftarFilm);

                System.out.println("\nData film berhasil dihapus!");

                return;
            }
        }

        System.out.println("\nData film tidak ditemukan...");
    }

    // CARI DATA FILM
    public static void searchFilm(
        ArrayList<Film> daftarFilm,
        Scanner input
    )
    {
        System.out.print("Masukkan Judul Film yang ingin dicari: ");
        String judul = input.nextLine();

        for (Film film : daftarFilm)
        {
            if (film.getJudul().equalsIgnoreCase(judul))
            {
                System.out.println("\n   !Data Film Ditemukan!   ");
                System.out.println("ID Film      : " + film.getIdFilm());
                System.out.println("Judul        : " + film.getJudul());
                System.out.println("Genre        : " + film.getGenre());
                System.out.println("Durasi       : " + film.getDurasi() + " menit");
                System.out.println("Tahun Rilis  : " + film.getTahunRilis());

                return;
            }
        }

        System.out.println("\nFilm tidak ditemukan...");
    }

    // MAIN PROGRAM
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);

        ArrayList<Film> daftarFilm = bacaData();

        while (true)
        {
            System.out.println("\n-----------------------------");
            System.out.println("|     MENU FILM BIOSKOP     |");
            System.out.println("-----------------------------");
            System.out.println("| 1. Tambah Data            |");
            System.out.println("| 2. Tampilkan Data         |");
            System.out.println("| 3. Update Data            |");
            System.out.println("| 4. Hapus Data             |");
            System.out.println("| 5. Cari Data              |");
            System.out.println("| 6. Exit                   |");
            System.out.println("-----------------------------");

            System.out.print("Pilih Menu (nomor): ");
            String pilihan = input.nextLine();

            if (pilihan.equals("1"))
            {
                tambahData(daftarFilm, input);
            }
            else if (pilihan.equals("2"))
            {
                tampilkanData(daftarFilm);
            }
            else if (pilihan.equals("3"))
            {
                updateFilm(daftarFilm, input);
            }
            else if (pilihan.equals("4"))
            {
                deleteFilm(daftarFilm, input);
            }
            else if (pilihan.equals("5"))
            {
                searchFilm(daftarFilm, input);
            }
            else if (pilihan.equals("6"))
            {
                System.out.println("\nProgram Selesai");
                break;
            }
            else
            {
                System.out.println("\nPilihan Tidak Tersedia");
            }
        }

        input.close();
    }
}