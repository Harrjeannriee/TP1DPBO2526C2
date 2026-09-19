import java.io.*;
import java.util.ArrayList;

public class file
{
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
            BufferedReader file = new BufferedReader(new FileReader("film.txt"));

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
}