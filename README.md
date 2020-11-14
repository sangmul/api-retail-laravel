# API-Retail-Laravel

REST API ini dibuat dalam rangga Contoh Back End yang digunakan pada Workshop Pengembangan Mobile Apps dengan React Native Dasar di Universitas Merdeka Madiun 21 November 2020 

Cara Menjalankan : 

* Jalankan XAMPP/MAMP
* Jalankan database MySQL dan buat sebuah database dengan nama `dbretail`
* Silahkan rubah konfigurasi database pada file .env

Spesifikasi :
```.nv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1(disetting sesuai settingan komputer/server masing-masing)
DB_PORT=8889(disetting sesuai settingan komputer/server masing-masing)
DB_DATABASE=dbretail
DB_USERNAME=root(disetting sesuai settingan komputer/server masing-masing)
DB_PASSWORD=root(disetting sesuai settingan komputer/server masing-masing)
```

Jika Berhasil maka akan muncul output seperti berikut :

```json
{
  "access_token" : "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsiUkVTT1VSQ0VfSURfR0FURVdBWSJdLCJ1c2VyX25hbWUiOiJyaXpraSIsInNjb3BlIjpbInJlYWQiLCJ3cml0ZSJdLCJleHAiOjE0OTYzMDcyOTIsImF1dGhvcml0aWVzIjpbIlJPTEVfVVNFUiJdLCJqdGkiOiI2OWJkMzY0YS0wODJiLTQ0ZGItOWQzYS01ZTBlODQyZjYwNDUiLCJjbGllbnRfaWQiOiJDTElFTlRfSURfUEFTU1dPUkQifQ.ultPrI5PQNWxPChfL4G7Ja0NhvJcjWnXWYOgts9HLXQ",
  "token_type" : "bearer",
  "refresh_token" : "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsiUkVTT1VSQ0VfSURfR0FURVdBWSJdLCJ1c2VyX25hbWUiOiJyaXpraSIsInNjb3BlIjpbInJlYWQiLCJ3cml0ZSJdLCJhdGkiOiI2OWJkMzY0YS0wODJiLTQ0ZGItOWQzYS01ZTBlODQyZjYwNDUiLCJleHAiOjE0OTYzMDcyOTIsImF1dGhvcml0aWVzIjpbIlJPTEVfVVNFUiJdLCJqdGkiOiI3MzcwMTYyNC1jYTQ0LTRhZjItYjZlYy1jNGYzNTljOTcxZTAiLCJjbGllbnRfaWQiOiJDTElFTlRfSURfUEFTU1dPUkQifQ.1wPUJy2S7ONLzPKDhY2IvZrCiX8PSwCy6r7hxkWnczE",
  "expires_in" : 1442,
  "scope" : "read write",
  "jti" : "69bd364a-082b-44db-9d3a-5e0e842f6045"
}
```

Contoh Cara Akses API :

```bash
curl "http://localhost:8080/api/books/1" \
  -H "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsiUkVTT1VSQ0VfSURfR0FURVdBWSJdLCJ1c2VyX25hbWUiOiJyaXpraSIsInNjb3BlIjpbInJlYWQiLCJ3cml0ZSJdLCJleHAiOjE0OTYzMDcyOTIsImF1dGhvcml0aWVzIjpbIlJPTEVfVVNFUiJdLCJqdGkiOiI2OWJkMzY0YS0wODJiLTQ0ZGItOWQzYS01ZTBlODQyZjYwNDUiLCJjbGllbnRfaWQiOiJDTElFTlRfSURfUEFTU1dPUkQifQ.ultPrI5PQNWxPChfL4G7Ja0NhvJcjWnXWYOgts9HLXQ" \
  -H "Content-Type: application/json"
```

Jika Berhasil maka akan muncul output seperti berikut :

```json
{
  "id": 1,
  "title": "Judul Buku 1",
  "description": "deskripsi buku ini adalah 1",
  "reviews": [
    {
      "id": 1,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 1-1"
    },
    {
      "id": 11,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 2-1"
    },
    {
      "id": 21,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 3-1"
    },
    {
      "id": 31,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 4-1"
    },
    {
      "id": 41,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 5-1"
    },
    {
      "id": 51,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 6-1"
    },
    {
      "id": 61,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 7-1"
    },
    {
      "id": 71,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 8-1"
    },
    {
      "id": 81,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 9-1"
    },
    {
      "id": 91,
      "bookId": 1,
      "reviewText": "ini adalah contoh review no 10-1"
    }
  ]
}
```

Jika client id tidak memiliki hak akses untuk resource tertentu maka akan ditolak, silahkan jalankan perintah berikut :

```bash
curl "http://localhost:8081/api/books" \
  -H "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsiUkVTT1VSQ0VfSURfR0FURVdBWSJdLCJ1c2VyX25hbWUiOiJyaXpraSIsInNjb3BlIjpbInJlYWQiLCJ3cml0ZSJdLCJleHAiOjE0OTYzMDcyOTIsImF1dGhvcml0aWVzIjpbIlJPTEVfVVNFUiJdLCJqdGkiOiI2OWJkMzY0YS0wODJiLTQ0ZGItOWQzYS01ZTBlODQyZjYwNDUiLCJjbGllbnRfaWQiOiJDTElFTlRfSURfUEFTU1dPUkQifQ.ultPrI5PQNWxPChfL4G7Ja0NhvJcjWnXWYOgts9HLXQ" \
  -H "Content-Type: application/json"
```

Karena tidak memiliki akses suatu resource maka akan muncul output seperti berikut.

```json
{
  "error":"access_denied",
  "error_description":"Invalid token does not contain resource id (RESOURCE_ID_BOOK)"
}
```
