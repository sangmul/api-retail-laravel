# API-Retail-Laravel

REST API ini dibuat dalam rangga Contoh Back End yang digunakan pada Workshop Pengembangan Mobile Apps dengan React Native Dasar di Universitas Merdeka Madiun 21 November 2020 

##Cara Menjalankan : 

* Install dan Jalankan XAMPP/MAMP
* Install composer
```composer
https://getcomposer.org/download/
```
* Jalankan database MySQL dan buat sebuah database dengan nama `dbretail`
* Silahkan rubah konfigurasi database pada file .env

##Spesifikasi Koneksi Database:
*tambahkan file .env pada folder project dan isi code berikut didalamnya:
```.env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:OglYUsm0cb34AHry54k79/CGc3FWNlpGU3HvEFugJE4=
APP_DEBUG=true
APP_URL=http://RetailBE.test

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1(disetting sesuai settingan komputer/server masing-masing)
DB_PORT=8889(disetting sesuai settingan komputer/server masing-masing)
DB_DATABASE=dbretail
DB_USERNAME=root(disetting sesuai settingan komputer/server masing-masing)
DB_PASSWORD=root(disetting sesuai settingan komputer/server masing-masing)

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

L5_SWAGGER_GENERATE_ALWAYS=true
SWAGGER_VERSION=3.1

L5_SWAGGER_CONST_HOST=http://127.0.0.1:8000
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
              "id": "integer"
        },
        {
              "nama": "string",
              "alamat": "string",
              "no_npwp": "string",
              "phone": "string",
              "email": "string",
              "created_at": "datetime",
              "updated_at": "datetime",
              "id": "integer"
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
        "id": "integer"
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
        "id": "integer"
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
