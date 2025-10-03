# Praktikum 2: Aplikasi PHP Dasar - Form Pendaftaran Event

Aplikasi ini dibuat untuk memenuhi tugas praktikum dasar PHP. Aplikasi ini merupakan form pendaftaran sederhana untuk sebuah event fiktif.

## Deskripsi & Fitur
Aplikasi ini mencakup implementasi dari beberapa konsep dasar PHP, yaitu:
- **Variabel, Global Variabel, dan Konstanta**: Untuk menyimpan data dan konfigurasi.
- **Fungsi**: Digunakan untuk modularisasi kode, khususnya untuk validasi.
- **Penanganan Form (POST)**: Menerima dan memproses data yang dikirim dari form HTML.
- **Validasi dengan Regex**: Memastikan format input email dan tanggal lahir (DD-MM-YYYY) sudah benar.
- **Operasi File**: Menyimpan setiap pendaftar yang valid ke dalam file `pendaftar.txt`.
- **Menampilkan Data**: Membaca data dari `pendaftar.txt` dan menampilkannya dalam bentuk tabel.

## Tampilan Aplikasi

**Tampilan Awal Form**
<img width="1918" height="842" alt="image" src="https://github.com/user-attachments/assets/2dcd23fb-bcf7-421a-b340-018d4c7733b8" />


**Tampilan Setelah Pendaftaran Berhasil**
<img width="1919" height="840" alt="image" src="https://github.com/user-attachments/assets/f9440976-aaf3-4a0c-aa31-c27baad67d9f" />
<img width="1918" height="837" alt="image" src="https://github.com/user-attachments/assets/ad753145-bb7b-4b9f-8b87-c586e16df930" />


**Contoh Pesan Error Validasi**

**1. Tidak Semua Field Diisi**
<img width="1919" height="747" alt="image" src="https://github.com/user-attachments/assets/8b3df3bb-e64c-49d6-97e6-0864495563ea" />
<img width="1918" height="740" alt="image" src="https://github.com/user-attachments/assets/aede9537-9f1f-4507-952a-a0c86a95bc89" />

**2. Format Email Tidak Valid**
<img width="1917" height="758" alt="image" src="https://github.com/user-attachments/assets/40dc760a-19bf-4d44-a757-cc798faa1a35" />
<img width="1919" height="850" alt="image" src="https://github.com/user-attachments/assets/8cf41880-65f9-417d-9637-f560c5f71943" />

**3. Tanggal Lahir Tidak Sesuai Format**
<img width="1907" height="741" alt="image" src="https://github.com/user-attachments/assets/a73b8469-427a-4492-91b3-6566ac1a61f2" />
<img width="1919" height="843" alt="image" src="https://github.com/user-attachments/assets/8e971195-7ad7-40a7-8c86-20273d09c8f5" />
