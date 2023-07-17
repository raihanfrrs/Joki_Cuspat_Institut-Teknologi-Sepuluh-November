project developer website cuspat e-commerce PKM kampus Institut Teknologi Sepuluh November Surabaya

A. tim project 38 developer :

1. UI UX : kennola masda septiara
2. Frontend : Ferry Irawan
3. Backend : Mohammad Raihan Farras

B. progres development menggunakan framework & tools :

1. UI UX : Figma
2. Frontend : Tailwindcss, Flowbite, Jquery, Reactjs
3. Backend : Laravel LTS

C. project setup frontend & backend :

1. clone repository dari github.

2. jalankan perintah :

    ```
    composer install
    ```

3. Duplikat file `.env.example` kemudian ubah namanya menjadi `.env`.

4. jalankan perintah :

    ```
    php artisan key:generate
    ```

5. buat database dengan nama : `cuspat`.

6. Ubah konfigurasi database pada file `.env`
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cuspat
    DB_USERNAME=root
    DB_PASSWORD=
    ```
7. jalankan perintah :
    ```
    php artisan migrate:fresh --seed
    ```
8. jalankan perintah :
    ```
    npm install
    ```
9. jalankan perintah :
    ```
    npm run dev
    ```
10. jalankan perintah :

    ```
    php artisan serve
    ```

    / pakai valet bila ada

11. buka browser `http://127.0.0.1:8000`
# cuspat
