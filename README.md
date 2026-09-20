# T1PDPBO2526C2
Tugas Praktikum 1 DPBO

## Identitas
Nama  : Andina Dwi Listiana
NIM  : 2501065
Kelas  : C2

## Janji
Saya Andina Dwi Listiana dengan NIM 2501065 mengerjakan TP 1
dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

## Desain Program
Class yang digunakan dalam program ini adalah `Film`. Class ini digunakan untuk menyimpan data dari setiap film. Atribut yang digunakan pada class `Film` yaitu:
- idFilm
- Judul
- Genre
- Durasi
- TahunRilis
Note: Pada PHP terdapat satu atribut tambahan yaitu `Gambar`, karena data gambar digunakan pada tampilan website.

Data film kemudian disimpan dalam sebuah kumpulan object `Film`. Program memiliki beberapa fitur untuk mengelola data tersebut, yaitu:
- Tambah data
- Tampilkan data
- Update data
- Hapus data
- Cari/Search data

## Flow Program
Alur program secara umum yaitu:
1. Program dijalankan.
2. Program menampilkan menu yang berisi pilihan fitur.
3. User memilih fitur yang ingin digunakan(1-5).
4. Program menjalankan fitur sesuai pilihan user.
5. Setelah selesai, program kembali ke menu.
6. Menu nomor 6 digunakan untuk menyelesaikan program.

## Flow Pada Fitur
### Tambah Data
1. User memilih menu tambah data.
2. User memasukkan Id, Judul, Genre, Durasi, dan Tahun Rilis,
3. Data digunakan uuntuk membuat objek film.
4. Objek tersebut dimasukkan ke dalam daftar film.

### Tampilkan Data
1. User memilih menu tampilkan data.
2. Program mengambil data film yang tersimpan.
3. Program menampilkan seluruh data film.

### Update Data
1. User memilih menu update.
2. User memasukkan Id film yang ingin diubah.
3. Program mencari film berdasarkan ID.
4. User memasukkan data yang baru.
5. Data film diperbarui.

### Hapus Data
1. User memilih menu hapus.
2. User memasukkan Id film yang ingin dihapus.
3. Program mencari film berdasarkan Id.
4. Data film tersebut dihapus dari daftar.

### Cari Data
1. User memilih menu cari.
2. User memasukkan judul film yang ingin dicari.
3. Program mencari data yang sesuai.
4. Data film yang ditemukan ditampilkan.
