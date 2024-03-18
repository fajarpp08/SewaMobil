Selamat malam Bapak/Ibu,
HRD PT. Transindo Data Perkasa

Semoga sehat selalu, ini adalah jawaban saya mengenai technical test yang diberikan, saya mengerjakan tugas ini dengan sepenuh hati karena sangat besar harapan saya untuk dapat bergabung dan berkontribusi dengan perusahaan Bapak/Ibu.

Terimakasih banyak atas kesempatan yang Bapak/Ibu berikan.

Salam Hormat,
Fajar Putra Pratama
+62 81218173646

=====================================================================================
#Cara Testing Project 

Tools dan Library Yang Digunakan : PHP, Javascript, Laravel, MySQL, Bootstrap, Visual Studio Code.

Database Menggunakan mysql : 
Database bisa diambil dari dalam folder Panduan Project
Link Database : https://github.com/fajarpp08/SewaMobil/blob/master/Panduan%20Project/test-tdp-sewa-mobil.sql

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test-tdp-sewa-mobil
DB_USERNAME=root
DB_PASSWORD=


Data Login Admin : 
Nama = Fajar Admin
No SIM = 0011
Password = 123

Data Login User : 
Nama = Fajar User
No SIM = 0022
Password = 123

Cara menjalankan project melalui Github : 
- Pertama, Clone project meggunakan syntax 
"git clone https://github.com/fajarpp08/SewaMobil.git"
- lakukan "composer update" pada direktori project yang sudah di clone tersebut
- Lakukan Import database terlebih dahulu 
- nama db = test-tdp-sewa-mobil.sql import ke phpmyadmin / database lainnya.
- Atur .env untuk koneksikan database nya(ganti baris kode nya dengan kode tersebut jika menggunakan database mysql, jika yang lain dapat disesuaikan)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test-tdp-sewa-mobil
DB_USERNAME=root
DB_PASSWORD=
- Atau mungkin bisa melakukan migrasi ulang (opsional), dengan cara ketikkan : 
  "php artisan migrate"  lalu  "php artisan db:seed UserSeeder"
- kemudian, setelah selesai ketikkan "php artisan serve" untuk menjalankan project
- Project running.
