import java.util.ArrayList;
import java.util.Scanner;

public class fitur
{
    static Scanner input = new Scanner(System.in);


    // TAMBAH DATA FILM
    public static void tambahData(ArrayList<Film> daftarFilm)
    {
        System.out.println("--------------------------");
        System.out.println("|    TAMBAH DATA FILM    |");
        System.out.println("--------------------------");

        System.out.print("ID film      : ");
        String idFilm = input.nextLine();

        System.out.print("Judul        : ");
        String Judul = input.nextLine();

        System.out.print("Genre        : ");
        String Genre = input.nextLine();

        System.out.print("Durasi       : ");
        int Durasi = Integer.parseInt(input.nextLine());

        System.out.print("Tahun Rilis  : ");
        int TahunRilis = Integer.parseInt(input.nextLine());


        // Wadah atau list
        Film filmBaru = new Film(idFilm, Judul, Genre, Durasi, TahunRilis);

        // Masukkan objek ke list
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
    public static void updateFilm(ArrayList<Film> daftarFilm)
    {
        System.out.println("-----------------------");
        System.out.println("|  UPDATE DATA FILM   |");
        System.out.println("-----------------------");

        System.out.print("Masukkan ID Film yang ingin diupdate: ");
        String idFilm = input.nextLine();

        // Loop data yang tersimpan pada daftarFilm
        for (Film film : daftarFilm)
        {
            // Bandingkan, jika sama lanjut minta data baru
            if (film.getIdFilm().equals(idFilm))
            {
                System.out.println("\nData film ditemukan");
                System.out.println("Masukkan Data Baru: ");

                System.out.print("Judul        : ");
                String Judul = input.nextLine();

                System.out.print("Genre        : ");
                String Genre = input.nextLine();

                System.out.print("Durasi       : ");
                int Durasi = Integer.parseInt(input.nextLine());

                System.out.print("Tahun Rilis  : ");
                int TahunRilis = Integer.parseInt(input.nextLine());

                film.setJudul(Judul);
                film.setGenre(Genre);
                film.setDurasi(Durasi);
                film.setTahunRilis(TahunRilis);

                // Simpan update data ke film.txt
                simpanData(daftarFilm);

                System.out.println("\nData film berhasil diupdate");

                return;
            }
        }

        // Jika ID yang diminta tidak ada
        System.out.println("Data film tidak ditemukan...");
    }


    // DELETE DATA FILM
    public static void deleteFilm(ArrayList<Film> daftarFilm)
    {
        System.out.println("--------------------------");
        System.out.println("|    DELETE DATA FILM    |");
        System.out.println("--------------------------");

        System.out.print("Masukkan ID Film yang ingin didelete: ");
        String idFilm = input.nextLine();

        for (Film film : daftarFilm)
        {
            if (film.getIdFilm().equals(idFilm))
            {
                daftarFilm.remove(film);

                // Simpan data terkini ke file
                simpanData(daftarFilm);

                System.out.println("\nData film berhasil dihapus!");

                return;
            }
        }

        // Kalau data yang diminta tidak ada
        System.out.println("\nData film tidak ditemukan...");
    }


    // CARI DATA FILM
    public static void searchFilm(ArrayList<Film> daftarFilm)
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

        // Jika judul tidak ditemukan di daftar
        System.out.println("\nFilm tidak ditemukan...");
    }


    // Memanggil fungsi simpanData dari file.java
    public static void simpanData(ArrayList<Film> daftarFilm)
    {
        file.simpanData(daftarFilm);
    }
}