<b>TUGAS PRATIKUM 11 PERTEMUAN 12</b>

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

![image](https://user-images.githubusercontent.com/101801920/172712095-c710e5cd-51b8-4d9f-a078-cb0262aaaab2.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development. Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development.

![image](https://user-images.githubusercontent.com/101801920/172712193-edfc2c3d-79c0-433d-957d-ec897a8a7031.png)

6.Contoh eror Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.

![image](https://user-images.githubusercontent.com/101801920/172712325-dededb96-f17c-4b53-b9f9-a1d5346f95eb.png)

![image](https://user-images.githubusercontent.com/101801920/174131278-83e93b1f-4678-45d6-abf8-eb7543295354.png)

7.Membuat route baru dalam Routes.php Tambahkan kode berikut ini pada Routes.php

![image](https://user-images.githubusercontent.com/101801920/172712534-603c5afa-a1c2-4ba5-819c-fa0886f52173.png)

![m10](https://user-images.githubusercontent.com/101801920/172712671-029da921-fc42-4fdb-baf8-41d9649165cd.PNG)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

![image](https://user-images.githubusercontent.com/101801920/172712780-ee4efea5-1e96-4d9f-947e-a664933de116.png)

8.Membuat Controller Kemudian membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172712889-f40d2aa6-cb20-4375-9e7b-72baab7d7a72.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.

![image](https://user-images.githubusercontent.com/101801920/172712967-69775708-edf6-451b-ad11-40adde9311b7.png)

9.Auto Routing Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

![image](https://user-images.githubusercontent.com/101801920/172713060-66e63666-3adc-4bb4-a771-388e002716f7.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/101801920/172713162-fe1bdbff-94b4-489d-9e39-3d5474b837f6.png)

10.Membuat View Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172713229-74389a85-e604-4524-9e80-fcfebf1307e4.png)

Ubah method about pada class Controller Page menjadi seperti berikut:

![image](https://user-images.githubusercontent.com/101801920/172713344-01535c26-2cd1-4ba4-866d-4b0c260dbf3c.png)

Kemudian lakukan refresh pada halaman tersebut.

![image](https://user-images.githubusercontent.com/101801920/172713420-8d95230e-47ad-41c5-814a-bdf36aac5f72.png)

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



<b>Pertemuan 13</b>

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

![image](https://user-images.githubusercontent.com/101801920/174101317-2c6806a5-f161-49c5-8b47-59c856c66168.png)

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
