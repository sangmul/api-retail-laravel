# API-Retail-Laravel

REST API ini dibuat dalam rangga Contoh Back End yang digunakan pada Workshop Pengembangan Mobile Apps dengan React Native Dasar di Universitas Merdeka Madiun 21 November 2020 

##Cara Menjalankan : 

* Jalankan XAMPP/MAMP
* Jalankan database MySQL dan buat sebuah database dengan nama `dbretail`
* Silahkan rubah konfigurasi database pada file .env

##Spesifikasi Koneksi Database:
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1(disetting sesuai settingan komputer/server masing-masing)
DB_PORT=8889(disetting sesuai settingan komputer/server masing-masing)
DB_DATABASE=dbretail
DB_USERNAME=root(disetting sesuai settingan komputer/server masing-masing)
DB_PASSWORD=root(disetting sesuai settingan komputer/server masing-masing)
```

Menjalakan Back End yang telah didownload/pull dengan terminal :

```tahap 1
php artisan migrate
```

```tahap 2
php artisan serve
```

Jika Berhasil maka akan table yang ada di `dbretail` akan tergenerate :
Jalankan proses pemanggilan data dengan postman 

# API Spec
person-data-controller

## List PersonData

Request :
- Method : GET
- Endpoint : `/api/persondata`
- Header :
    - Accept: application/json

Response :

```json 
{
    "status" : "string",
    "message" : "string",
    "data" : [
        {
              "nama": "string",
              "alamat": "string",
              "no_npwp": "string",
              "phone": "string",
              "email": "string",
              "created_at": "datetime",
              "updated_at": "datetime",
              "id": integer
        },
        {
              "nama": "string",
              "alamat": "string",
              "no_npwp": "string",
              "phone": "string",
              "email": "string",
              "created_at": "datetime",
              "updated_at": "datetime",
              "id": integer
        }
    ]
}
```

## Create PersonData

Request :
- Method : POST
- Endpoint : `/api/persondata`
- Header :
    - Content-Type: application/json
    - Accept: application/json
- Body :

```json 
{
    "nama": "string",
    "alamat": "string",,
    "no_npwp": "string",,
    "phone": "string",,
    "email": "string",
}
```

Response :

```json 
{
    "status": "string",
    "message": "string",
    "data": {
        "nama": "string",
        "alamat": "string",
        "no_npwp": "string",
        "phone": "string",
        "email": "string",
        "created_at": "datetime",
        "updated_at": "datetime",
        "id": integer
    }
}
```

PUT PERSONDATA:
```
http://127.0.0.1:8000/api/persondata/{id}
```

## Update PersonData

Request :
- Method : PUT
- Endpoint : `/api/persondata/{id}`
- Header :
    - Content-Type: application/json
    - Accept: application/json
- Body :

```json 
{
    "nama": "string",
    "alamat": "string",
    "no_npwp": "string",
    "phone": "string",
    "email": "string",
}
```

Response :

```json 
{
    "status": "string",
    "message": "string",
    "data": {
        "nama": "string",
        "alamat": "string",
        "no_npwp": "string",
        "phone": "string",
        "email": "string",
        "created_at": "datetime",
        "updated_at": "datetime",
        "id": integer
    }
}
```

## Delete Product

Request :
- Method : DELETE
- Endpoint : `/api/persondata/{id}`
- Header :
    - Accept: application/json

Response :

```json 
{
    "status" : "string",
    "message" : "string"
}
```
