# **LAPORAN PRAKTIKUM**

## **IMPLEMENTASI LOGIN MULTI USER LEVEL MENGGUNAKAN PHP DAN MYSQLi**

---

### **Identitas Mahasiswa**

| Keterangan      | Data                                |
| --------------- | ----------------------------------- |
| Nama            | **Ananda Faris Ghazi Ramadhan**     |
| NRP             | **5025231280**                      |
| Program Studi   | Teknik Informatika                  |
| Fakultas        | FTEIC                               |
| Institusi       | Institut Teknologi Sepuluh Nopember |
| Mata Kuliah     | Arsitektur Aplikasi Web             |
| Topik Praktikum | Login Multi User Level              |

---

## **1. Pendahuluan**

Arsitektur aplikasi web memiliki peranan penting dalam membangun sistem yang terstruktur, aman, dan mudah dikembangkan. Salah satu implementasi dasar yang sering digunakan dalam aplikasi web adalah sistem **login multi user level**, di mana setiap pengguna memiliki hak akses berbeda sesuai perannya.

Pada praktikum ini dikembangkan sebuah **aplikasi login multi user level** menggunakan **PHP dan MySQLi** dengan tiga jenis pengguna, yaitu **Admin**, **Pegawai**, dan **Pengurus**. Aplikasi ini dirancang dengan menerapkan **Arsitektur 3-Layer (Three-Tier Architecture)** agar pemisahan antara tampilan, logika aplikasi, dan data dapat dilakukan secara jelas dan terstruktur.

---

## **2. Tujuan Praktikum**

Tujuan dari praktikum ini adalah:

1. Memahami konsep **Login Multi User Level**
2. Menerapkan **Arsitektur Aplikasi Web 3-Layer**
3. Memisahkan tanggung jawab antara tampilan, logika, dan data
4. Mengimplementasikan autentikasi pengguna secara aman
5. Mengelola hak akses berdasarkan level pengguna

---

## **3. Konsep Login Multi User Level**

Login Multi User Level adalah sistem autentikasi yang membedakan hak akses pengguna berdasarkan **role atau level** tertentu. Pada aplikasi ini, terdapat tiga level pengguna:

| Level    | Hak Akses                   |
| -------- | --------------------------- |
| Admin    | Akses penuh terhadap sistem |
| Pegawai  | Akses operasional           |
| Pengurus | Akses manajerial tertentu   |

Setiap pengguna hanya dapat mengakses halaman sesuai dengan level yang dimilikinya.

---

## **4. Arsitektur Aplikasi Web 3-Layer**

Aplikasi ini menerapkan **Three-Tier Architecture**, yang terdiri dari:

### **4.1 Presentation Layer**

Lapisan ini berfungsi sebagai antarmuka pengguna.

Contoh file:

* `index.php`
* `halaman_admin.php`
* `halaman_pegawai.php`
* `halaman_pengurus.php`
* `style.css`

Fungsi:

* Menampilkan form login
* Menampilkan halaman sesuai level user
* Menyajikan informasi kepada pengguna

---

### **4.2 Application Layer**

Lapisan ini menangani logika bisnis dan alur aplikasi.

Contoh file:

* `cek_login.php`
* `logout.php`

Fungsi:

* Memvalidasi username dan password
* Menentukan hak akses pengguna
* Mengatur session login dan logout
* Mengarahkan pengguna ke halaman sesuai level

---

### **4.3 Data Layer**

Lapisan ini bertanggung jawab terhadap penyimpanan data.

Contoh komponen:

* Database MySQL
* Tabel `users`
* `koneksi.php`

Fungsi:

* Menyimpan data akun pengguna
* Menyediakan data autentikasi
* Menjaga konsistensi data

---

## **5. Struktur File Aplikasi**

```
login-multilevel/
│── index.php
│── style.css
│── cek_login.php
│── halaman_admin.php
│── halaman_pegawai.php
│── halaman_pengurus.php
│── koneksi.php
└── logout.php
```

Struktur ini mencerminkan pemisahan lapisan sesuai konsep **Separation of Concerns**.

---

## **6. Perancangan Database**

Database yang digunakan bernama **`login_multi_level`** dengan tabel **`users`**.

| Field    | Tipe Data | Keterangan                  |
| -------- | --------- | --------------------------- |
| id       | INT       | Primary Key                 |
| username | VARCHAR   | Username pengguna           |
| password | VARCHAR   | Password terenkripsi (hash) |
| level    | ENUM      | Level pengguna              |

Password disimpan dalam bentuk **hash (bcrypt)** untuk meningkatkan keamanan sistem.

---

## **7. Alur Proses Login**

1. Pengguna mengisi form login
2. Data dikirim ke `cek_login.php`
3. Sistem memvalidasi data ke database
4. Password diverifikasi menggunakan hashing
5. Session login dibuat
6. Pengguna diarahkan ke halaman sesuai level

---

## **8. Keamanan Sistem**

Beberapa aspek keamanan yang diterapkan:

* Password disimpan dalam bentuk hash
* Penggunaan session untuk autentikasi
* Pembatasan akses halaman berdasarkan level user
* Redirect otomatis jika pengguna tidak memiliki hak akses

---

## **9. Hasil dan Pembahasan**

Hasil dari praktikum ini adalah aplikasi login multi level yang:

* Berjalan dengan baik pada server lokal
* Memisahkan komponen aplikasi secara terstruktur
* Menerapkan autentikasi dan autorisasi pengguna
* Mudah dikembangkan untuk fitur lanjutan

Aplikasi ini membuktikan bahwa penerapan arsitektur yang baik meningkatkan kerapian dan maintainability kode.


