# SIAKAD CodeIgniter 4

## Apakah ini?
SIAKAD merupakan sebuah website php berbasis framework [CI](https://codeigniter.com) yang digunakan untuk mengelola sistem akademik sekolah.


## Cara pemasangan & Update.
Anda bisa melakukan cloning dengan cara.
Masuk pada terminal yang Anda gunakan kemudian ketikan perintah berikut :
```gh repo clone whywidodo/ci4-siakad```

Setelah proses cloning selesai, jalankan update composer dengan mengetikan perintah berikut :
```composer update```

Maka composer akan melakukan pembaruan terhadap file yang telah Anda cloning tadi. Setelah proses update selesai, maka Anda akan melihat ada folder baru yang bernama `vendor`.

Jika sudah maka Anda bisa menjalankan website ini menggunakan perintah `php spark serve` dalam terminal/gitbash.


## Catatan

Untuk menjalankan website ini, dibutuhkan PHP minimal versi 7.2.

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) Apabila Anda berkeinginan untuk menggunakan HTTP/CurlRequest

Dan pastikan bahwa ekstensi tambahan berikut ini telah aktif pada PHP Anda :

- json (secara default sudah aktif)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (secara default sudah aktif)

# Terimakasih
- [Codeigniter-4](https://codeigniter.com)
- [SBAdmin-2](https://startbootstrap.com/theme/sb-admin-2)
