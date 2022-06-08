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

Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan:

• php-json ekstension untuk bekerja dengan JSON;

• php-mysqlnd native driver untuk MySQL;

• php-xml ekstension untuk bekerja dengan XML;

• php-intl ekstensi untuk membuat aplikasi multibahasa;

• libcurl (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian
Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/101801920/172675011-aafe536e-864e-4e9e-8dca-4419888c3547.png)

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101801920/172675631-34b3c77e-3b08-4522-9be9-a4da59738e1b.png)

Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.

• Unduh Codeigniter dari website https://codeigniter.com/download

• Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.

• Ubah nama direktory framework-4.x.xx menjadi ci4.

• Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

![m1](https://user-images.githubusercontent.com/101801920/172675837-50e1672a-b24c-401f-955e-f398bebe6c68.PNG)

Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk
mengakses CLI buka terminal/command prompt.

![m2](https://user-images.githubusercontent.com/101801920/172676105-84ff50f2-25fb-4e73-b453-63807bd3ee44.PNG)

Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat
(xampp/htdocs/lab11_ci/ci4/)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: <b>php spark</b>

![m3](https://user-images.githubusercontent.com/101801920/172676734-a2db3b4e-6e5e-46cc-b4f9-e93aae504727.PNG)

<b>Mengaktifkan Mode Debugging</b>

Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk
mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.

Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan
pesan kesalahan seperti berikut.

![m4](https://user-images.githubusercontent.com/101801920/172676993-2bf632a7-a84c-4395-a839-15b769e6a5e3.PNG)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis
errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi
pada environment variable CI_ENVIRINMENT menjadi development.

![m5](https://user-images.githubusercontent.com/101801920/172677187-7e518ce2-b99e-4056-aca4-b8cb991ff591.PNG)

Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable
CI_ENVIRINMENT menjadi development.

![WhatsApp Image 2022-06-09 at 00 19 43](https://user-images.githubusercontent.com/101801920/172678526-908aac31-bd08-4347-b2b2-6cafbcac5328.jpeg)

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file
app/Controller/Home.php hilangkan titik koma pada akhir kode.

![m7](https://user-images.githubusercontent.com/101801920/172678891-a7a5eaa5-f895-4c5d-96bf-ca5963029cdd.PNG)

Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router
untuk meudian oleh router tesebut diarahkan ke Controller.

Router terletak pada file app/config/Routes.php

![m8](https://user-images.githubusercontent.com/101801920/172679203-631c5400-17fa-4843-b506-8c7ca422cda2.PNG)

Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat.

Contoh:

$routes->get('/', 'Home::index');

Kode tersebut akan mengarahkan rute untuk halaman home.


Membuat Route Baru.
Tambahkan kode berikut di dalam Routes.php

$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan
perintah berikut.

<b>php spark routes</b>

![m9](https://user-images.githubusercontent.com/101801920/172679983-66f9994b-5502-4b8b-8ccc-1fd2ccab962e.PNG)

Tampilan pada browser

![m10](https://user-images.githubusercontent.com/101801920/172680076-4cb16928-bfc1-4a8f-95fa-1ffd7ab409ea.PNG)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url
http://localhost:8080/about

![m11](https://user-images.githubusercontent.com/101801920/172680275-965c5d3b-746a-4dc8-aecb-5b3eaaaa7422.PNG)

Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page
tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih
dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

<b>Membuat Controller</b>

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php
pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172681189-230b3a32-089c-4e75-b9a6-95690d8cdace.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman
sudah dapat diakses.

![m12](https://user-images.githubusercontent.com/101801920/172681758-1b55f351-915e-46e8-b890-713a017270d2.PNG)

<b>Auto Routing</b>

Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status
autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true
menjadi false.

$routes->setAutoRoute(true);

Tambahkan method baru pada Controller Page seperti berikut.
public function tos()

{

echo "ini halaman Term of Services";

}

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan
alamat: http://localhost:8080/page/tos

![m13](https://user-images.githubusercontent.com/101801920/172683273-b8c7bc6e-68a2-40cc-9619-f1104a33e078.PNG)

<b>Membuat View</b>

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi
kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172684026-70ce5507-b825-40f3-943b-624bb0e432f3.png)

Ubah method about pada class Controller Page menjadi seperti berikut:

![m15](https://user-images.githubusercontent.com/101801920/172684261-40877157-86bd-4d35-8f38-e43d55279a0a.PNG)

Kemudian lakukan refresh pada halaman tersebut.

![m16](https://user-images.githubusercontent.com/101801920/172684339-ad24390b-d55b-4afe-821e-a68ea08083bc.PNG)

<b>Membuat Layout Web dengan CSS</b>

Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada
codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset
css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![image](https://user-images.githubusercontent.com/101801920/172685215-4e9a67cd-5e11-45b0-bae5-fd3d73412578.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan
footer.php

File app/view/template/header.php

![image](https://user-images.githubusercontent.com/101801920/172685726-2cebd3f5-4722-46af-aeb7-944bc3661831.png)

File app/view/template/footer.php

![image](https://user-images.githubusercontent.com/101801920/172685913-af422b64-900c-4a5d-a9f2-d5ef5486292b.png)

Kemudian ubah file app/view/about.php seperti berikut.

![image](https://user-images.githubusercontent.com/101801920/172686349-e53d7bb4-bcee-4770-848b-9c775fc01268.png)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![0](https://user-images.githubusercontent.com/101801920/172700181-6b524422-ce82-4366-aa6f-3f8c9d170a23.jpeg)
















