# API-Retail-Laravel

REST API ini dibuat dalam rangga Contoh Back End yang digunakan pada Workshop Pengembangan Mobile Apps dengan React Native Dasar di Universitas Merdeka Madiun 21 November 2020 

Cara Menjalankan : 

* Jalankan XAMPP/MAMP
* Jalankan database MySQL dan buat sebuah database dengan nama `dbretail`
* Silahkan rubah konfigurasi database pada file .env

Spesifikasi Koneksi Database:
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1(disetting sesuai settingan komputer/server masing-masing)
DB_PORT=8889(disetting sesuai settingan komputer/server masing-masing)
DB_DATABASE=dbretail
DB_USERNAME=root(disetting sesuai settingan komputer/server masing-masing)
DB_PASSWORD=root(disetting sesuai settingan komputer/server masing-masing)
```

Menjalakan Back End yang didownload/pull dengan terminal :

```tahap 1
php artisan migrate
```

```tahap 2
php artisan serve
```

Jika Berhasil maka akan table yang ada di `dbretail` akan tergenerate :

GET PERSONDATA:
```
http://127.0.0.1:8000/api/persondata
```

POST PERSONDATA:
```
http://127.0.0.1:8000/api/persondata
```

PUTE PERSONDATA:
```
http://127.0.0.1:8000/api/persondata/{id}
```

DELETE PERSONDATA:
```
http://127.0.0.1:8000/api/persondata/{id}
```
