# <b>TUGAS PRATIKUM 11 PERTEMUAN 12</b> #

PEMROGRAMAN WEB

TEKNIK INFORMATIKA

UNIVERSITAS PELITA BANGSA
<table>
  <tr>
    <td>NAMA</td>
    <td>Nurokhim</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312010064</td>
  </tr>
  <tr>
    <td>KELAS</td>
    <td>TI.20.D1</td>
  </tr>
  <tr>
    <td>MATKUL</td>
    <td>Pemrograman Web</td>
  </tr>
 <tr>
    <td>DOSEN</td>
    <td> Agung Nugroho,S.Kom.,M.Kom </td>
  </tr>
</table>

<b>Langkah-langkah Praktikum</b>

1.Membuat folder lab11_php_ci

![image](https://user-images.githubusercontent.com/101801920/172710110-2b831ee1-08b3-4c46-9734-706fdc5cd8bc.png)

2.Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan: • php-json ekstension untuk bekerja dengan JSON; • php-mysqlnd native driver untuk MySQL; • php-xml ekstension untuk bekerja dengan XML; • php-intl ekstensi untuk membuat aplikasi multibahasa; • libcurl (opsional), jika ingin pakai Curl. Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/101801920/172710505-d96162c2-6584-41ad-a8e1-00d63a515bc5.png)

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101801920/172711104-90618eb6-6d4a-4317-8aea-f61b45535ed9.png)

3.Instalasi Codeigniter 4 Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual. • Unduh Codeigniter dari website https://codeigniter.com/download • Extrak file zip Codeigniter ke direktori htdocs/lab11_ci. • Ubah nama direktory framework-4.x.xx menjadi ci4. • Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

![image](https://user-images.githubusercontent.com/101801920/172711199-9c0e3c1e-3e4b-4d5e-8274-86a58ac6ec5a.png)

4.Menjalankan CLI (Command Line Interface) Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Kemudian arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/)

![m2](https://user-images.githubusercontent.com/101801920/172711807-34b437a7-5e14-449f-9904-d34633d025eb.PNG)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:

![m3](https://user-images.githubusercontent.com/101801920/172711974-f9693a04-7bbc-4abe-a404-3fc4c124c03e.PNG)

5.Mengaktifkan Mode Debugging Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/174207863-ffaf2399-6922-467c-a281-209e13dca2ac.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development. Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development.

![image](https://user-images.githubusercontent.com/101801920/172712193-edfc2c3d-79c0-433d-957d-ec897a8a7031.png)

6.Contoh eror Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.

![image](https://user-images.githubusercontent.com/101801920/172712325-dededb96-f17c-4b53-b9f9-a1d5346f95eb.png)

![image](https://user-images.githubusercontent.com/101801920/174131278-83e93b1f-4678-45d6-abf8-eb7543295354.png)

7.Membuat route baru dalam Routes.php Tambahkan kode berikut ini pada Routes.php

![image](https://user-images.githubusercontent.com/101801920/172712534-603c5afa-a1c2-4ba5-819c-fa0886f52173.png)

![m10](https://user-images.githubusercontent.com/101801920/172712671-029da921-fc42-4fdb-baf8-41d9649165cd.PNG)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

![image](https://user-images.githubusercontent.com/101801920/174209317-8c671adf-2fc1-4efb-b191-a97ccbdfc486.png)

8.Membuat Controller Kemudian membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172712889-f40d2aa6-cb20-4375-9e7b-72baab7d7a72.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.

![m12](https://user-images.githubusercontent.com/101801920/174211293-a891acbe-49ca-4b11-a2d8-1ca1d60cf965.PNG)

9.Auto Routing Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

![image](https://user-images.githubusercontent.com/101801920/172713060-66e63666-3adc-4bb4-a771-388e002716f7.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

![m13](https://user-images.githubusercontent.com/101801920/174210663-7436d5a6-9613-4b37-a895-fd49df9b36f6.PNG)

10.Membuat View Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172713229-74389a85-e604-4524-9e80-fcfebf1307e4.png)

Ubah method about pada class Controller Page menjadi seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/172713344-01535c26-2cd1-4ba4-866d-4b0c260dbf3c.png)

Kemudian lakukan refresh pada halaman tersebut.

![m16](https://user-images.githubusercontent.com/101801920/174211689-d4c2a8af-ab94-4a37-b8b0-85fb78aae7b1.PNG)

11.Membuat Layout Web dengan CSS Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public. Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![image](https://user-images.githubusercontent.com/101801920/172713508-e5220c13-42ee-4683-963a-48759606ce5c.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

File app/view/template/header.php 

![image](https://user-images.githubusercontent.com/101801920/172713639-2bafd557-06bb-4cbb-b00b-6c01b66e1a17.png)

File app/view/template/footer.php

![image](https://user-images.githubusercontent.com/101801920/172713713-959510d6-2850-498c-97b5-eafaf95b3b93.png)

ubah File app/view/template/about menjadi seperti di bawah ini

![image](https://user-images.githubusercontent.com/101801920/172716556-ea96757b-38c5-4da5-8e81-f5d0574ad0df.png)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![image](https://user-images.githubusercontent.com/101801920/172717010-5c25eed7-3056-42f9-b9ea-54b0acd6df00.png)



# <b>PRAKTKUM 12</b> #

Langkah-Langkah Pratikum

1. Membuat Database: Studi Kasus Data Artikel dengan nama lab_ci4;

![image](https://user-images.githubusercontent.com/101801920/173865442-e8905cac-0182-40c1-b13a-2e8da5dc28ec.png)

2. Buat tabel pada database lab_ci4

![image](https://user-images.githubusercontent.com/101801920/173866622-52bd166b-284a-4619-bc22-309dadcefbb7.png)

3.Konfigurasi koneksi database

Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![image](https://user-images.githubusercontent.com/101801920/173870139-e0bb4dab-3162-41aa-8a30-9bd4b20926ec.png)

4. Membuat Model

Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

![image](https://user-images.githubusercontent.com/101801920/173870958-6129d385-ec1a-4acc-9cc2-1166a002c28b.png)

5. Membuat Controller

Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![image](https://user-images.githubusercontent.com/101801920/173871790-dad398de-04d1-42ee-9294-c5ea5e1e71e8.png)

6. Membuat View

Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file
baru dengan nama index.php.

![image](https://user-images.githubusercontent.com/101801920/173872207-7bf4ed31-efac-4070-9584-62d8a9f87e47.png)

7. Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

![image](https://user-images.githubusercontent.com/101801920/174093380-a96ddf60-6075-4707-ac7d-745cfa4f3131.png)

Refresh kembali browser untuk melihat hasil perubahannya.

![image](https://user-images.githubusercontent.com/101801920/174206532-dc42818b-0788-4366-bb2b-223eb7d8761b.png)

8. Membuat Tampilan Detail Artikel yaitu Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. dengan cara tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](https://user-images.githubusercontent.com/101801920/174107563-5e6b7968-ceeb-424c-8f98-42b6e5a45194.png)

9. Membuat View Detail. Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![image](https://user-images.githubusercontent.com/101801920/174108216-c22c87c0-a1d5-4a1d-a268-907e6a35a779.png)

10. Membuat Routing untuk artikel detail, Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![image](https://user-images.githubusercontent.com/101801920/174115632-0b651dc7-ec92-43a6-8974-d2c429a44784.png)

Kemudian klik pada artikel 1 atau 2 untuk melihat hasilnya.

![image](https://user-images.githubusercontent.com/101801920/174128983-995e4583-8312-44a8-a068-caaf0e71fb31.png)

11. Membuat Menu Admin, menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![image](https://user-images.githubusercontent.com/101801920/174116826-a158d965-ceb7-4598-a6df-e1e54b4e3cc1.png)

12. Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![image](https://user-images.githubusercontent.com/101801920/174117276-ba7505c9-6a06-4bc8-a478-c03b6eed2b90.png)

![image](https://user-images.githubusercontent.com/101801920/174117392-c35927bb-389a-4bd8-9f25-afd2093ea724.png)

13. Tambahkan routing untuk menu admin seperti berikut

![image](https://user-images.githubusercontent.com/101801920/174118172-336bc44a-7e25-489a-b0d0-d72ccfa015c1.png)

Akses menu admin dengan url http://localhost:8080/admin/artikel 

![image](https://user-images.githubusercontent.com/101801920/174124757-ccec6b8f-627f-4f6d-b4c0-9b7e8d785b9f.png)

14. Menambah Data Artikel, tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![image](https://user-images.githubusercontent.com/101801920/174121509-564bc8e0-f351-4e16-a9d6-6e30b704102b.png)

15. Kemudian buat view untuk form tambah dengan nama form_add.php

![image](https://user-images.githubusercontent.com/101801920/174121968-9b79b48f-063e-4564-847d-4771540aacbf.png)

![image](https://user-images.githubusercontent.com/101801920/174125414-82f6f71f-bcbe-4104-8911-bab7d95cd3d1.png)

16. Mengubah Data, tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![image](https://user-images.githubusercontent.com/101801920/174125079-87333233-0926-4152-bd7d-02d7f1b32398.png)

17. Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://user-images.githubusercontent.com/101801920/174126075-84787a5b-73c2-4cfc-9531-c54ea9c800a9.png)

![image](https://user-images.githubusercontent.com/101801920/174127054-245575ae-0534-48d2-a426-8e36ca15e2b0.png)

18. Menghapus Data, tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![image](https://user-images.githubusercontent.com/101801920/174127189-7d71da1c-8050-4f9f-9f5c-2c59faf6b8fe.png)




# <b>PRAKTIKUM 13</b> #

Langkah-langkah Praktikum

Persiapan

Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

1. <u>Membuat Tabel User : Login</u>

![n1](https://user-images.githubusercontent.com/101801920/175486649-0490d770-08c8-459a-81b4-d67792d9397e.PNG)

![n2](https://user-images.githubusercontent.com/101801920/175486607-aa1bf530-43c5-4776-934a-094c2d1da75a.PNG)

2. Membuat Model User

Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php

![image](https://user-images.githubusercontent.com/101801920/175488329-58b28207-35d0-42d8-9bfc-0c426b53f1f3.png)

3. Membuat Controller User

Buat Controller baru dengan nama User.php pada direktori app/Controllers.

Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.

![image](https://user-images.githubusercontent.com/101801920/175490353-a9e64ff7-a155-4ffc-9908-2a838613ee50.png)

![image](https://user-images.githubusercontent.com/101801920/175490480-e7578742-3cb4-4fc6-a4f4-b2343dc1b38b.png)

4. Membuat View Login

Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.

![image](https://user-images.githubusercontent.com/101801920/175493390-9133503f-6458-4c29-9924-882b4b9795cf.png)

![image](https://user-images.githubusercontent.com/101801920/175493518-38084fce-a6d8-468d-ae9d-01e7ce47581e.png)

5. Membuat Database Seeder

Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. 

Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![image](https://user-images.githubusercontent.com/101801920/175495583-0e094eb3-f187-4974-8dfe-3c16b7464df7.png)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori/app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![image](https://user-images.githubusercontent.com/101801920/175499201-e4367767-e6d2-49c1-b241-fa5ac30af15f.png)

Selanjutnya buka kembali CLI dan ketik perintah berikut:

![image](https://user-images.githubusercontent.com/101801920/175499739-04908880-df5c-494a-8dac-a3cabd170dc9.png)

6. Uji Coba Login

Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/175763785-c1bfbe95-92ab-4371-aa3d-497c7a444463.png)

7. Menambahkan Auth Filter

Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.

![image](https://user-images.githubusercontent.com/101801920/175764039-9ed9d4d6-4413-4cf7-99cf-082b362c0f95.png)

8. Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![image](https://user-images.githubusercontent.com/101801920/175764158-deb07ffe-1e02-49b0-a193-ff93ba6d1166.png)

9.Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya

![image](https://user-images.githubusercontent.com/101801920/175764284-cf7472e7-703e-4c5c-8bda-17b098b3ed59.png)

10. Percobaan Akses Menu Admin

Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

![image](https://user-images.githubusercontent.com/101801920/175764663-6c06e643-1962-49a9-a2f9-0f16a2987f92.png)

11. Fungsi Logout

Tambahkan method logout pada Controller User seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/175764786-8ea3ac76-a823-48d0-99f3-4a31fa21093d.png)

Kemudian tambahkan navbar pada admin_header seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/175764970-8a604847-df00-4d26-b073-c9cacb83aadd.png)

Ketika kita klik navbar maka akan langsunh mengarah pada halaman login.

![image](https://user-images.githubusercontent.com/101801920/175765194-f564f8d2-f76b-47f2-9c92-6c6741962c4c.png)

# <b>PRATIKUM 14 </b> #

Langkah-langkah Praktikum

<b>Membuat Pagination</b>

1. Pagination merupakan proses yang digunakan untuk membatasi tampilan yang panjang dari data yang banyak pada sebuah website. Fungsi pagination adalah memecah
tampilan menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan pada setiap halaman. Pada Codeigniter 4, fungsi pagination sudah tersedia pada Library sehingga cukup mudah menggunakannya. Untuk membuat pagination, buka Kembali Controller Artikel, kemudian modifikasi kode pada method admin_index seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/175776807-695440eb-9c28-49ef-addf-5bdb9f705cfd.png)

2. Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut dibawah deklarasi tabel data.

![image](https://user-images.githubusercontent.com/101801920/175776991-e302c41f-756b-42bb-8bc2-1d063b79270d.png)

3. Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.

![image](https://user-images.githubusercontent.com/101801920/175779675-505672bb-c0ca-490b-ac08-7ef8d8052cd8.png)

4. Membuat Pencarian

Pencarian data digunakan untuk memfilter data.

Untuk membuat pencarian data, buka kembali Controller Artikel, pada method admin_index ubah kodenya seperti berikut

![image](https://user-images.githubusercontent.com/101801920/175779781-baaec188-77f4-43ab-adc0-fee0e454b7eb.png)

5. Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/175779912-721a1a3b-3e79-4c4a-8b75-bc848b2b336c.png)

Dan pada link pager ubah seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/175779990-c6612dce-3c7a-463a-af59-bba842f101d9.png)

Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian.

![image](https://user-images.githubusercontent.com/101801920/175780429-7193ef11-617e-45d6-999a-23775ceb7f26.png)

6. Upload Gambar

Menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali Controller Artikel, sesuaikan kode pada method add seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/175780605-4b6b7f49-19ab-494a-8454-953db1418c19.png)

Kemudian pada file views/artikel/form_add.php tambahkan field input file seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/175780950-466afbd4-4d08-449e-abc5-da737d4e5020.png)

Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/175780914-584a60c6-af43-40c7-bbb0-d7bbeac14db4.png)

Ujicoba file upload dengan mengakses menu tambah artikel.

![image](https://user-images.githubusercontent.com/101801920/175781424-e4dfa10b-a42b-4133-8f9c-c56bb5908338.png)


