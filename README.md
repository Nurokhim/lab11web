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

![image](https://user-images.githubusercontent.com/101801920/172712379-480bfff0-66fe-41af-9040-496496881a29.png)

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
