# Praktikum PBW 1
## Arga Bona Simarmata
## 4523210020
## Langkah-Langkah
### 1. Instal Git
Langkah pertama adalah mengunduh dan menginstal Git di komputer. Git adalah sebuah sistem kontrol versi (Version Control System) yang digunakan untuk mengelola perubahan pada file proyek. Setelah proses instalasi selesai, Git akan terpasang di komputer sehingga bisa digunakan melalui terminal atau command prompt.
#### <img width="1919" height="962" alt="image" src="https://github.com/user-attachments/assets/a97282fa-c12a-414b-b81f-13a758dc8ebd" />
### 2. Cek Versi
Setelah Git terinstal, lakukan pengecekan versi Git untuk memastikan instalasi berhasil. Caranya dengan mengetik perintah git --version pada terminal atau command prompt. Jika berhasil, akan muncul informasi versi Git yang sedang terpasang.
#### <img width="963" height="155" alt="image" src="https://github.com/user-attachments/assets/459340d2-66f3-44cb-b056-bcbcda3582cd" />
### 3. Membuat Folder Praktikum
#### <img width="358" height="687" alt="image" src="https://github.com/user-attachments/assets/8d1f6f91-8b61-4d23-bc13-d652ab646bf2" />
## <img width="602" height="172" alt="image" src="https://github.com/user-attachments/assets/da0f59a5-6fe4-4ae1-9dc1-3d8075458caf" />
### 4. Menginisialisasi Git ("git init")
Setelah berada di dalam folder proyek, jalankan perintah git init. Perintah ini digunakan untuk menginisialisasi repository Git lokal. Git akan membuat folder tersembunyi bernama .git yang berisi semua data versi proyek.
### 5. Remote add origin Link Repository GitHub ("remote add origin https://github.com/arga4523210020/Prak-PBW.git")
Setelah repository lokal dibuat, hubungkan folder tersebut dengan repository GitHub yang telah dibuat sebelumnya. Gunakan perintah git remote add origin https://github.com/arga4523210020/Prak-PBW.git. Dengan ini, repository lokal kamu terhubung ke repository jarak jauh (remote) di GitHub.
### 6. Melakukan Commit dengan Pesan ("git commit -m "Menambahkan index.html"")
Langkah ini dilakukan untuk menambahkan seluruh file yang ada di folder proyek ke dalam staging area Git. Gunakan perintah git add . agar semua file siap untuk dicatat pada commit berikutnya.
### 7. Menambahkan Semua Perubahan ("git add .")
Setelah file berada di staging area, buat commit untuk menyimpan perubahan ke repository lokal. Commit merupakan catatan perubahan yang berisi pesan deskriptif. Contohnya git commit -m "Menambahkan index.html" untuk menjelaskan bahwa file index.html telah ditambahkan.
### 8. Mengirim perubahan dari Cabang Main ("git push origin main")
Langkah terakhir adalah mengunggah (push) commit yang telah dibuat ke repository GitHub. Gunakan perintah git push origin main agar semua perubahan yang sudah dicatat di repository lokal terkirim ke branch main di repository GitHub.
### 9. Selesai.
