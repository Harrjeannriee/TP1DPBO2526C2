import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);

        ArrayList<Film> daftarFilm = file.bacaData();

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
                fitur.tambahData(daftarFilm);
            }
            else if (pilihan.equals("2"))
            {
                fitur.tampilkanData(daftarFilm);
            }
            else if (pilihan.equals("3"))
            {
                fitur.updateFilm(daftarFilm);
            }
            else if (pilihan.equals("4"))
            {
                fitur.deleteFilm(daftarFilm);
            }
            else if (pilihan.equals("5"))
            {
                fitur.searchFilm(daftarFilm);
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