
# 🎓 Tugas Coding Kelas 8 - HTML, C, dan PHP

Halo semuanya! 👋 Selamat datang di repository tugas coding. Di sini kalian akan belajar membuat program sederhana menggunakan **HTML**, **Bahasa C**, dan **PHP**.

> 🔔 **Catatan Penting:** Setiap siswa punya tugas yang **berbeda-beda**, jadi kerjakan sesuai nomor absen masing-masing. Pilih salahsatu implementasi Html/C/PHP !

---

## 📋 Cara Mengerjakan Tugas

Ikuti langkah-langkah ini dengan teliti:

### Langkah 1: Clone Repository
Buka terminal atau command prompt di komputermu, lalu ketik:
```bash
git clone [URL_REPOSITORY_INI]
```

### Langkah 2: Masuk ke Folder Repository
```bash
cd [nama-folder-repository]
```

### Langkah 3: Buat Folder dengan Nama Kalian
Buat folder baru dengan format: `NomorAbsen_NamaKalian`
```bash
mkdir 01_Budi
```
Lalu masuk ke folder tersebut:
```bash
cd 01_Budi
```

### Langkah 4: Kerjakan Tugas Sesuai Nomor Absen
Lihat daftar tugas di bawah ini sesuai nomor absenmu. Setiap tugas ada 3 file (Pilih salahsatu):
- File **HTML** (`.html`)
- File **Bahasa C** (`.c`)
- File **PHP** (`.php`)

### Langkah 5: Commit dan Push
Setelah selesai mengerjakan, simpan perubahan dengan perintah:
```bash
git add .
git commit -m "Tugas nomor absen [nomor] - [nama]"
git push origin main
```

---

## 📚 Petunjuk Umum Pengerjaan

### 🌐 HTML (HyperText Markup Language)
- HTML digunakan untuk membuat **tampilan halaman web**
- Gunakan tag-tag dasar seperti `<html>`, `<head>`, `<body>`, `<h1>`, `<p>`, `<div>`, `<table>`, `<form>`, dll
- File disimpan dengan ekstensi `.html`
- Bisa dibuka langsung di browser (Chrome, Firefox, Edge)

**Contoh struktur dasar HTML:**
```html
<!DOCTYPE html>
<html>
<head>
    <title>Judul Halaman</title>
</head>
<body>
    <h1>Halo Dunia!</h1>
    <p>Ini adalah paragraf pertama saya.</p>
</body>
</html>
```

### ⚙️ Bahasa C
- Bahasa C digunakan untuk membuat **program yang berjalan di komputer**
- Harus di-*compile* (diterjemahkan) terlebih dahulu sebelum dijalankan
- Gunakan software seperti **Code::Blocks**, **Dev-C++**, atau compiler online
- File disimpan dengan ekstensi `.c`

**Contoh struktur dasar Bahasa C:**
```c
#include <stdio.h>

int main() {
    printf("Halo Dunia!\n");
    return 0;
}
```

**Cara compile dan run:**
```bash
# Compile
gcc namafile.c -o namafile

# Jalankan (Windows)
namafile.exe

# Jalankan (Linux/Mac)
./namafile
```

### 🐘 PHP (PHP: Hypertext Preprocessor)
- PHP digunakan untuk membuat **website yang bisa berinteraksi** (dinamis)
- Bisa menerima input dari user dan menampilkan hasil
- Butuh server lokal seperti **XAMPP** untuk menjalankannya
- File disimpan dengan ekstensi `.php` di folder `htdocs` (XAMPP)
- Diakses melalui browser dengan alamat `localhost`

**Contoh struktur dasar PHP:**
```php
<!DOCTYPE html>
<html>
<body>
    <h1>Halo Dunia!</h1>
    <?php
        echo "Ini dibuat dengan PHP!";
    ?>
</body>
</html>
```

---

## 📝 Daftar Tugas per Nomor Absen

### 👤 Absen 1
**Nama:** [Isi nama siswa]

**Tugas:** Kalkulator Sederhana (Penjumlahan & Pengurangan)

**Deskripsi:** Buat program yang bisa menjumlahkan dan mengurangkan dua angka yang diinput user.

**HTML:**
- Buat form dengan 2 input angka dan tombol "Hitung"
- Tampilkan hasil penjumlahan dan pengurangan
- Gunakan warna background yang berbeda untuk hasil

**Bahasa C:**
- Program meminta input 2 angka
- Menampilkan hasil penjumlahan dan pengurangan
- Gunakan tipe data `int` atau `float`

**PHP:**
- Buat form HTML yang mengirim data ke PHP
- PHP menerima 2 angka dan menampilkan hasil penjumlahan & pengurangan
- Tampilkan hasil dengan format yang rapi

---

### 👤 Absen 2
**Nama:** [Isi nama siswa]

**Tugas:** Konversi Suhu (Celsius ↔ Fahrenheit)

**Deskripsi:** Buat program untuk mengubah suhu dari Celsius ke Fahrenheit dan sebaliknya.

**HTML:**
- Buat form input suhu dengan pilihan konversi (C→F atau F→C)
- Tampilkan hasil konversi dengan warna berbeda
- Tambahkan penjelasan rumus yang digunakan

**Bahasa C:**
- Input suhu dan pilihan konversi (1 untuk C→F, 2 untuk F→C)
- Hitung dan tampilkan hasilnya
- Rumus: °F = (°C × 9/5) + 32 | °C = (°F - 32) × 5/9

**PHP:**
- Form dengan dropdown pilihan konversi
- Proses konversi di PHP dan tampilkan hasil
- Tampilkan juga rumus perhitungannya

---

### 👤 Absen 3
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas & Keliling Persegi Panjang

**Deskripsi:** Buat program untuk menghitung luas dan keliling persegi panjang.

**HTML:**
- Form input panjang dan lebar
- Tampilkan luas (panjang × lebar) dan keliling (2 × (panjang + lebar))
- Gunakan tabel untuk menampilkan hasil

**Bahasa C:**
- Input panjang dan lebar
- Hitung luas dan keliling
- Tampilkan hasil dengan format: "Luas: [hasil] cm²"

**PHP:**
- Form HTML kirim ke PHP
- Hitung dan tampilkan luas & keliling
- Tambahkan validasi: jika input kurang dari 0, tampilkan pesan error

---

### 👤 Absen 4
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas & Keliling Lingkaran

**Deskripsi:** Buat program untuk menghitung luas dan keliling lingkaran dengan input jari-jari.

**HTML:**
- Form input jari-jari
- Tampilkan luas (π × r²) dan keliling (2 × π × r)
- Gunakan nilai π = 3.14
- Tambahkan gambar lingkaran (bisa dari internet)

**Bahasa C:**
- Input jari-jari (bisa desimal)
- Gunakan tipe data `float` dan konstanta untuk π
- Tampilkan hasil dengan 2 angka di belakang koma

**PHP:**
- Form input jari-jari
- Hitung dan tampilkan hasil
- Tambahkan fitur: jika jari-jari negatif, tampilkan "Jari-jari tidak boleh negatif!"

---

### 👤 Absen 5
**Nama:** [Isi nama siswa]

**Tugas:** Cek Bilangan Ganjil atau Genap

**Deskripsi:** Buat program yang bisa mengecek apakah suatu bilangan ganjil atau genap.

**HTML:**
- Form input satu angka
- Tampilkan hasil dengan warna hijau jika genap, merah jika ganjil
- Tambahkan penjelasan: "Bilangan genap habis dibagi 2"

**Bahasa C:**
- Input satu angka
- Gunakan operator modulo (`%`) untuk cek sisa bagi
- Tampilkan "Genap" atau "Ganjil"

**PHP:**
- Form input angka
- Proses di PHP dan tampilkan hasil
- Tambahkan fitur: tampilkan juga angka berikutnya yang genap/ganjil

---

### 👤 Absen 6
**Nama:** [Isi nama siswa]

**Tugas:** Cek Tahun Kabisat

**Deskripsi:** Buat program untuk mengecek apakah suatu tahun adalah tahun kabisat.

**HTML:**
- Form input tahun (misal: 2024)
- Tampilkan hasil dengan icon ✓ atau ✗
- Tambahkan penjelasan: "Tahun kabisat habis dibagi 4"

**Bahasa C:**
- Input tahun
- Cek dengan kondisi: habis dibagi 4 TAPI tidak habis dibagi 100, KECUALI habis dibagi 400
- Tampilkan "Tahun Kabisat" atau "Bukan Tahun Kabisat"

**PHP:**
- Form input tahun
- Proses pengecekan di PHP
- Tampilkan hasil dan berapa hari dalam tahun tersebut (366 atau 365)

---

### 👤 Absen 7
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Nilai Rata-rata 3 Mata Pelajaran

**Deskripsi:** Buat program untuk menghitung nilai rata-rata dan menentukan kelulusan.

**HTML:**
- Form input 3 nilai (Matematika, B.Indonesia, IPA)
- Tampilkan rata-rata dan status (Lulus/Tidak Lulus)
- Batas kelulusan: rata-rata ≥ 70

**Bahasa C:**
- Input 3 nilai
- Hitung rata-rata
- Tampilkan rata-rata dan status kelulusan

**PHP:**
- Form input 3 nilai
- Hitung rata-rata di PHP
- Tampilkan rata-rata, status, dan predikat (A: ≥85, B: 70-84, C: <70)

---

### 👤 Absen 8
**Nama:** [Isi nama siswa]

**Tugas:** Konversi Nilai Angka ke Huruf

**Deskripsi:** Buat program untuk mengubah nilai angka menjadi nilai huruf (A, B, C, D, E).

**HTML:**
- Form input nilai (0-100)
- Tampilkan nilai huruf dengan warna:
  - A: Hijau, B: Biru, C: Kuning, D: Oranye, E: Merah

**Bahasa C:**
- Input nilai angka
- Gunakan if-else atau switch case:
  - A: 85-100, B: 70-84, C: 60-69, D: 50-59, E: <50
- Tampilkan nilai huruf

**PHP:**
- Form input nilai
- Proses konversi di PHP
- Tampilkan nilai angka, nilai huruf, dan keterangan (Sangat Baik, Baik, Cukup, Kurang, Gagal)

---

### 👤 Absen 9
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Diskon Belanja

**Deskripsi:** Buat program untuk menghitung harga setelah diskon.

**HTML:**
- Form input harga awal dan persentase diskon
- Tampilkan harga diskon, jumlah diskon, dan harga akhir
- Gunakan tabel untuk menampilkan rincian

**Bahasa C:**
- Input harga dan diskon (%)
- Hitung: jumlah diskon = harga × diskon/100
- Tampilkan harga awal, diskon, dan harga akhir

**PHP:**
- Form input harga dan diskon
- Hitung di PHP
- Tambahkan fitur: jika harga > 100.000, diskon tambahan 5%

---

### 👤 Absen 10
**Nama:** [Isi nama siswa]

**Tugas:** Cek Usia untuk Membuat KTP/SIM

**Deskripsi:** Buat program untuk mengecek apakah seseorang sudah bisa membuat KTP atau SIM.

**HTML:**
- Form input nama dan tahun lahir
- Tampilkan usia dan kelayakan:
  - KTP: usia ≥ 17 tahun
  - SIM: usia ≥ 17 tahun

**Bahasa C:**
- Input tahun lahir
- Hitung usia (tahun sekarang - tahun lahir)
- Tampilkan usia dan status "Bisa buat KTP/SIM" atau "Belum bisa"

**PHP:**
- Form input nama dan tanggal lahir
- Hitung usia secara otomatis dengan fungsi PHP date()
- Tampilkan usia dan kelayakan dengan pesan yang ramah

---

### 👤 Absen 11
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Volume Balok

**Deskripsi:** Buat program untuk menghitung volume balok.

**HTML:**
- Form input panjang, lebar, tinggi
- Tampilkan volume (p × l × t) dengan satuan cm³
- Tambahkan gambar balok

**Bahasa C:**
- Input 3 nilai (panjang, lebar, tinggi)
- Hitung volume
- Tampilkan hasil dengan format rapi

**PHP:**
- Form input 3 nilai
- Hitung volume
- Tambahkan fitur: hitung juga luas permukaan balok (2×(pl+pt+lt))

---

### 👤 Absen 12
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Volume Bola

**Deskripsi:** Buat program untuk menghitung volume bola.

**HTML:**
- Form input jari-jari
- Tampilkan volume (4/3 × π × r³)
- Gunakan π = 3.14
- Tampilkan hasil dengan 2 angka desimal

**Bahasa C:**
- Input jari-jari
- Gunakan rumus: (4.0/3.0) × 3.14 × r × r × r
- Tampilkan hasil dengan format desimal

**PHP:**
- Form input jari-jari
- Hitung volume menggunakan pow() atau operator *
- Tampilkan hasil dan tambahkan penjelasan rumus

---

### 👤 Absen 13
**Nama:** [Isi nama siswa]

**Tugas:** Cek Bilangan Positif, Negatif, atau Nol

**Deskripsi:** Buat program untuk mengecek jenis bilangan.

**HTML:**
- Form input satu angka
- Tampilkan hasil dengan warna:
  - Positif: Hijau, Negatif: Merah, Nol: Abu-abu

**Bahasa C:**
- Input satu angka
- Gunakan if-else untuk cek:
  - > 0: Positif
  - < 0: Negatif
  - = 0: Nol

**PHP:**
- Form input angka
- Proses di PHP
- Tambahkan fitur: tampilkan juga apakah bilangan tersebut bulat atau desimal

---

### 👤 Absen 14
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Gaji Karyawan (Lembur)

**Deskripsi:** Buat program untuk menghitung gaji dengan sistem lembur.

**HTML:**
- Form input nama, gaji pokok, dan jam lembur
- Tampilkan rincian: gaji pokok, bonus lembur, total gaji
- Upah lembur: Rp 50.000/jam

**Bahasa C:**
- Input gaji pokok dan jam lembur
- Hitung: total = gaji pokok + (jam lembur × 50000)
- Tampilkan rincian gaji

**PHP:**
- Form input data
- Hitung total gaji
- Tambahkan fitur: jika jam lembur > 10 jam, bonus tambahan Rp 100.000

---

### 👤 Absen 15
**Nama:** [Isi nama siswa]

**Tugas:** Konversi Mata Uang (Rupiah ke Dollar & Euro)

**Deskripsi:** Buat program untuk mengkonversi Rupiah ke Dollar dan Euro.

**HTML:**
- Form input jumlah Rupiah
- Tampilkan hasil konversi ke Dollar dan Euro
- Gunakan kurs: 1 USD = Rp 15.000, 1 EUR = Rp 16.500

**Bahasa C:**
- Input jumlah Rupiah
- Hitung: USD = Rupiah / 15000, EUR = Rupiah / 16500
- Tampilkan hasil dengan 2 angka desimal

**PHP:**
- Form input Rupiah
- Hitung konversi
- Tambahkan fitur: tampilkan juga dalam format mata uang (misal: $ 10.50)

---

### 👤 Absen 16
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung IPK Sederhana (Indeks Prestasi Kumulatif)

**Deskripsi:** Buat program untuk menghitung IPK dari 4 mata kuliah.

**HTML:**
- Form input 4 nilai (skala 0-4, bisa desimal)
- Tampilkan IPK (rata-rata 4 nilai)
- Tampilkan predikat: ≥3.5 (Cumlaude), 3.0-3.49 (Sangat Baik), 2.5-2.99 (Baik), <2.5 (Cukup)

**Bahasa C:**
- Input 4 nilai
- Hitung rata-rata
- Tampilkan IPK dan predikat

**PHP:**
- Form input 4 nilai
- Hitung IPK
- Tampilkan IPK, predikat, dan saran (misal: "Tingkatkan lagi!" jika < 3.0)

---

### 👤 Absen 17
**Nama:** [Isi nama siswa]

**Tugas:** Cek Berat Badan Ideal (BMI)

**Deskripsi:** Buat program untuk menghitung Body Mass Index (BMI).

**HTML:**
- Form input berat badan (kg) dan tinggi badan (cm)
- Tampilkan BMI dan kategori:
  - < 18.5: Kurus
  - 18.5 - 24.9: Normal
  - 25 - 29.9: Gemuk
  - ≥ 30: Obesitas

**Bahasa C:**
- Input berat (kg) dan tinggi (m - diubah dari cm)
- Rumus: BMI = berat / (tinggi × tinggi)
- Tampilkan BMI dan kategori

**PHP:**
- Form input berat dan tinggi
- Hitung BMI
- Tampilkan hasil, kategori, dan saran kesehatan sesuai kategori

---

### 👤 Absen 18
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Harga Tiket Bioskop

**Deskripsi:** Buat program untuk menghitung harga tiket bioskop dengan diskon.

**HTML:**
- Form input jumlah tiket dan hari (Senin-Minggu)
- Harga dasar: Rp 50.000/tiket
- Diskon: Hari kerja (Senin-Jumat) diskon 10%, Weekend tidak ada diskon
- Tampilkan rincian harga

**Bahasa C:**
- Input jumlah tiket dan kode hari (1=Senin, 7=Minggu)
- Hitung total harga dengan diskon
- Tampilkan rincian

**PHP:**
- Form dengan dropdown hari
- Hitung total
- Tambahkan fitur: jika beli > 5 tiket, diskon tambahan 5%

---

### 👤 Absen 19
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Tabungan (Bunga Sederhana)

**Deskripsi:** Buat program untuk menghitung tabungan dengan bunga sederhana.

**HTML:**
- Form input modal awal, suku bunga (% per tahun), dan lama menabung (tahun)
- Tampilkan bunga per tahun dan total tabungan
- Rumus: Bunga = Modal × Suku Bunga × Waktu / 100

**Bahasa C:**
- Input modal, bunga (%), dan waktu (tahun)
- Hitung bunga dan total (modal + bunga)
- Tampilkan rincian per tahun

**PHP:**
- Form input data
- Hitung dan tampilkan tabel rincian per tahun
- Contoh: Tahun 1: Modal X, Bunga Y, Total Z

---

### 👤 Absen 20
**Nama:** [Isi nama siswa]

**Tugas:** Cek Bilangan Prima (1-100)

**Deskripsi:** Buat program untuk mengecek apakah suatu bilangan adalah bilangan prima.

**HTML:**
- Form input satu angka (1-100)
- Tampilkan hasil: "Prima" atau "Bukan Prima"
- Tambahkan daftar bilangan prima dari 1-100

**Bahasa C:**
- Input angka
- Cek apakah angka hanya bisa dibagi 1 dan dirinya sendiri
- Tampilkan hasil dan faktor-faktornya jika bukan prima

**PHP:**
- Form input angka
- Cek bilangan prima dengan looping
- Tampilkan hasil dan daftar bilangan prima dari 1 sampai angka yang diinput

---

### 👤 Absen 21
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Faktorial

**Deskripsi:** Buat program untuk menghitung faktorial dari suatu bilangan.

**HTML:**
- Form input angka (1-10)
- Tampilkan hasil faktorial
- Contoh: 5! = 5 × 4 × 3 × 2 × 1 = 120
- Tampilkan proses perhitungannya

**Bahasa C:**
- Input angka
- Gunakan loop for atau while untuk menghitung faktorial
- Tampilkan hasil

**PHP:**
- Form input angka
- Hitung faktorial dengan function
- Tampilkan hasil dan proses perhitungan

---

### 👤 Absen 22
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Deret Bilangan Ganjil/Genap

**Deskripsi:** Buat program untuk menampilkan deret bilangan ganjil atau genap.

**HTML:**
- Form input batas akhir angka dan pilihan (ganjil/genap)
- Tampilkan deret bilangan
- Hitung juga jumlah dan rata-rata deret tersebut

**Bahasa C:**
- Input batas akhir dan pilihan (1=ganjil, 2=genap)
- Gunakan loop untuk menampilkan deret
- Hitung jumlah dan rata-rata

**PHP:**
- Form dengan radio button pilihan
- Tampilkan deret dalam tabel
- Hitung statistik (jumlah, rata-rata, banyaknya angka)

---

### 👤 Absen 23
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas Segitiga

**Deskripsi:** Buat program untuk menghitung luas segitiga.

**HTML:**
- Form input alas dan tinggi
- Tampilkan luas (1/2 × alas × tinggi)
- Tambahkan gambar segitiga dengan keterangan alas dan tinggi

**Bahasa C:**
- Input alas dan tinggi
- Hitung luas
- Tampilkan hasil dengan format: "Luas segitiga = [hasil] cm²"

**PHP:**
- Form input alas dan tinggi
- Hitung luas
- Tambahkan fitur: hitung juga keliling segitiga sama sisi (3 × alas)

---

### 👤 Absen 24
**Nama:** [Isi nama siswa]

**Tugas:** Cek Kelulusan Ujian dengan Nilai Akhir

**Deskripsi:** Buat program untuk menentukan kelulusan berdasarkan nilai akhir.

**HTML:**
- Form input nilai UH, UTS, dan UAS
- Nilai Akhir = (UH × 20%) + (UTS × 30%) + (UAS × 50%)
- Tampilkan nilai akhir dan status (Lulus/Remedial/Tidak Lulus)
- Batas: Lulus ≥ 70, Remedial 60-69, Tidak Lulus < 60

**Bahasa C:**
- Input 3 nilai
- Hitung nilai akhir dengan bobot
- Tampilkan rincian dan status

**PHP:**
- Form input 3 nilai
- Hitung nilai akhir
- Tampilkan rincian bobot, nilai akhir, status, dan saran

---

### 👤 Absen 25
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Harga Pulsa/Listrik (Token)

**Deskripsi:** Buat program untuk menghitung tagihan pulsa atau listrik.

**HTML:**
- Form input jumlah kWh (listrik) atau menit (pulsa)
- Tarif listrik: Rp 1.500/kWh
- Tarif pulsa: Rp 200/menit
- Tampilkan rincian pemakaian dan total bayar

**Bahasa C:**
- Input jumlah pemakaian dan pilihan (1=Listrik, 2=Pulsa)
- Hitung total berdasarkan tarif
- Tampilkan rincian

**PHP:**
- Form dengan radio button pilihan layanan
- Hitung total
- Tambahkan fitur: jika pemakaian > 100 kWh atau > 500 menit, diskon 5%

---

### 👤 Absen 26
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Kecepatan (Jarak, Waktu, Kecepatan)

**Deskripsi:** Buat program untuk menghitung kecepatan, jarak, atau waktu.

**HTML:**
- Form pilih yang dihitung (kecepatan/jarak/waktu)
- Input nilai yang diketahui
- Rumus: kecepatan = jarak/waktu, jarak = kecepatan×waktu, waktu = jarak/kecepatan
- Tampilkan hasil dengan satuan yang jelas

**Bahasa C:**
- Menu pilihan (1=Kecepatan, 2=Jarak, 3=Waktu)
- Input nilai sesuai pilihan
- Hitung dan tampilkan hasil

**PHP:**
- Form dengan dropdown pilihan
- Hitung sesuai rumus fisika
- Tampilkan hasil dan penjelasan rumus yang digunakan

---

### 👤 Absen 27
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas Permukaan Kubus

**Deskripsi:** Buat program untuk menghitung luas permukaan kubus.

**HTML:**
- Form input panjang rusuk
- Tampilkan luas permukaan (6 × rusuk²)
- Tambahkan gambar kubus

**Bahasa C:**
- Input panjang rusuk
- Hitung luas permukaan
- Tampilkan hasil

**PHP:**
- Form input rusuk
- Hitung luas permukaan dan volume (rusuk³)
- Tampilkan kedua hasil dengan rapi

---

### 👤 Absen 28
**Nama:** [Isi nama siswa]

**Tugas:** Cek Angka Terbesar dan Terkecil (3 Angka)

**Deskripsi:** Buat program untuk mencari angka terbesar dan terkecil dari 3 angka.

**HTML:**
- Form input 3 angka
- Tampilkan angka terbesar dan terkecil
- Urutkan ketiga angka dari kecil ke besar

**Bahasa C:**
- Input 3 angka
- Gunakan if-else untuk mencari terbesar dan terkecil
- Tampilkan hasil dan urutan

**PHP:**
- Form input 3 angka
- Gunakan fungsi max() dan min() atau sorting
- Tampilkan terbesar, terkecil, dan urutan

---

### 👤 Absen 29
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Sisa Uang Belanja

**Deskripsi:** Buat program untuk menghitung sisa uang setelah belanja.

**HTML:**
- Form input jumlah uang dan harga 3 barang
- Tampilkan total belanja dan sisa uang
- Jika uang kurang, tampilkan pesan "Uang tidak cukup!"

**Bahasa C:**
- Input uang dan 3 harga barang
- Hitung total dan sisa
- Tampilkan rincian belanja

**PHP:**
- Form input uang dan harga barang
- Hitung total dan sisa
- Tambahkan fitur: jika sisa > 0, tampilkan "Sisa uang: Rp X". Jika kurang, tampilkan "Kekurangan: Rp X"

---

### 👤 Absen 30
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Rata-rata Nilai Ulangan Harian

**Deskripsi:** Buat program untuk menghitung rata-rata nilai ulangan harian.

**HTML:**
- Form input 5 nilai ulangan
- Tampilkan rata-rata dan status:
  - ≥ 80: Sangat Baik
  - 70-79: Baik
  - 60-69: Cukup
  - < 60: Perlu Belajar Lagi

**Bahasa C:**
- Input 5 nilai menggunakan loop
- Hitung rata-rata
- Tampilkan rata-rata dan status

**PHP:**
- Form input 5 nilai
- Hitung rata-rata
- Tampilkan rata-rata, status, dan nilai tertinggi/terendah

---

## ✅ Checklist Penilaian

Setiap tugas akan dinilai berdasarkan:

| No | Kriteria | Poin |
|---|---|---|
| 1 | File HTML berjalan dengan baik | 25 |
| 2 | File Bahasa C berjalan dengan baik | 25 |
| 3 | File PHP berjalan dengan baik | 25 |
| 4 | Tampilan rapi dan mudah dipahami | 15 |
| 5 | Commit ke repository tepat waktu | 10 |
| **TOTAL** | | **100** |

---

## 🆘 Tips dan Bantuan

1. **Jika bingung dengan HTML:** Lihat contoh di W3Schools (https://www.w3schools.com/html/)
2. **Jika bingung dengan C:** Lihat contoh di Programiz (https://www.programiz.com/c-programming)
3. **Jika bingung dengan PHP:** Lihat contoh di W3Schools (https://www.w3schools.com/php/)
4. **Jika error:** Periksa tanda titik koma (`;`), kurung kurawal (`{}`), dan tag penutup
5. **Jika stuck:** Tanyakan ke teman atau guru, jangan menyerah!

---

## 📞 Kontak

Jika ada pertanyaan, hubungi:
- **Guru:** [Azam]
- **Email:** [azzamalfaruq105@gmail.com]
- **Kelas:** 8 [Nama Kelas]

---

> 🌟 **Semangat mengerjakan! Coding itu menyenangkan!** 🌟
> 
> *"Program yang baik adalah program yang berjalan, bukan program yang sempurna."*

**Deadline Pengumpulan:** [Tanggal Deadline]

---

## Cara Menggunakan README Ini

1. **Copy semua teks di atas** ke file bernama `README.md` di repository GitHub kamu
2. **Ganti bagian yang ada tanda kurung siku** `[...]` dengan data sebenarnya:
   - `[URL_REPOSITORY_INI]` → link repository GitHub
   - `[Isi nama siswa]` → nama siswa sesuai absen
   - `[Nama Guru]`, `[email@sekolah.sch.id]`, dll
3. **Buat repository kosong** di GitHub
4. **Upload file README.md** tersebut
5. **Bagikan link repository** ke siswa-siswa

Setiap siswa akan:
1. Clone repository
2. Buat folder `NomorAbsen_Nama` (contoh: `01_Budi`)
3. Buat 3 file di dalam folder tersebut:
   - `tugas.html`
   - `tugas.c`
   - `tugas.php`
4. Commit dan push hasil kerja mereka

Semoga membantu! Kalau butuh penjelasan lebih lanjut atau modifikasi, silakan tanya.
=======
# 🎓 Tugas Coding Kelas 8 - HTML, C, dan PHP

Halo semuanya! 👋 Selamat datang di repository tugas coding. Di sini kalian akan belajar membuat program sederhana menggunakan **HTML**, **Bahasa C**, dan **PHP**.

> 🔔 **Catatan Penting:** Setiap siswa punya tugas yang **berbeda-beda**, jadi kerjakan sesuai nomor absen masing-masing. Pilih salahsatu implementasi Html/C/PHP !

---

## 📋 Cara Mengerjakan Tugas

Ikuti langkah-langkah ini dengan teliti:

### Langkah 1: Clone Repository
Buka terminal atau command prompt di komputermu, lalu ketik:
```bash
git clone [URL_REPOSITORY_INI]
```

### Langkah 2: Masuk ke Folder Repository
```bash
cd [nama-folder-repository]
```

### Langkah 3: Buat Folder dengan Nama Kalian
Buat folder baru dengan format: `NomorAbsen_NamaKalian`
```bash
mkdir 01_Budi
```
Lalu masuk ke folder tersebut:
```bash
cd 01_Budi
```

### Langkah 4: Kerjakan Tugas Sesuai Nomor Absen
Lihat daftar tugas di bawah ini sesuai nomor absenmu. Setiap tugas ada 3 file (Pilih salahsatu):
- File **HTML** (`.html`)
- File **Bahasa C** (`.c`)
- File **PHP** (`.php`)

### Langkah 5: Commit dan Push
Setelah selesai mengerjakan, simpan perubahan dengan perintah:
```bash
git add .
git commit -m "Tugas nomor absen [nomor] - [nama]"
git push origin main
```

---

## 📚 Petunjuk Umum Pengerjaan

### 🌐 HTML (HyperText Markup Language)
- HTML digunakan untuk membuat **tampilan halaman web**
- Gunakan tag-tag dasar seperti `<html>`, `<head>`, `<body>`, `<h1>`, `<p>`, `<div>`, `<table>`, `<form>`, dll
- File disimpan dengan ekstensi `.html`
- Bisa dibuka langsung di browser (Chrome, Firefox, Edge)

**Contoh struktur dasar HTML:**
```html
<!DOCTYPE html>
<html>
<head>
    <title>Judul Halaman</title>
</head>
<body>
    <h1>Halo Dunia!</h1>
    <p>Ini adalah paragraf pertama saya.</p>
</body>
</html>
```

### ⚙️ Bahasa C
- Bahasa C digunakan untuk membuat **program yang berjalan di komputer**
- Harus di-*compile* (diterjemahkan) terlebih dahulu sebelum dijalankan
- Gunakan software seperti **Code::Blocks**, **Dev-C++**, atau compiler online
- File disimpan dengan ekstensi `.c`

**Contoh struktur dasar Bahasa C:**
```c
#include <stdio.h>

int main() {
    printf("Halo Dunia!\n");
    return 0;
}
```

**Cara compile dan run:**
```bash
# Compile
gcc namafile.c -o namafile

# Jalankan (Windows)
namafile.exe

# Jalankan (Linux/Mac)
./namafile
```

### 🐘 PHP (PHP: Hypertext Preprocessor)
- PHP digunakan untuk membuat **website yang bisa berinteraksi** (dinamis)
- Bisa menerima input dari user dan menampilkan hasil
- Butuh server lokal seperti **XAMPP** untuk menjalankannya
- File disimpan dengan ekstensi `.php` di folder `htdocs` (XAMPP)
- Diakses melalui browser dengan alamat `localhost`

**Contoh struktur dasar PHP:**
```php
<!DOCTYPE html>
<html>
<body>
    <h1>Halo Dunia!</h1>
    <?php
        echo "Ini dibuat dengan PHP!";
    ?>
</body>
</html>
```

---

## 📝 Daftar Tugas per Nomor Absen

### 👤 Absen 1
**Nama:** [Isi nama siswa]

**Tugas:** Kalkulator Sederhana (Penjumlahan & Pengurangan)

**Deskripsi:** Buat program yang bisa menjumlahkan dan mengurangkan dua angka yang diinput user.

**HTML:**
- Buat form dengan 2 input angka dan tombol "Hitung"
- Tampilkan hasil penjumlahan dan pengurangan
- Gunakan warna background yang berbeda untuk hasil

**Bahasa C:**
- Program meminta input 2 angka
- Menampilkan hasil penjumlahan dan pengurangan
- Gunakan tipe data `int` atau `float`

**PHP:**
- Buat form HTML yang mengirim data ke PHP
- PHP menerima 2 angka dan menampilkan hasil penjumlahan & pengurangan
- Tampilkan hasil dengan format yang rapi

---

### 👤 Absen 2
**Nama:** [Isi nama siswa]

**Tugas:** Konversi Suhu (Celsius ↔ Fahrenheit)

**Deskripsi:** Buat program untuk mengubah suhu dari Celsius ke Fahrenheit dan sebaliknya.

**HTML:**
- Buat form input suhu dengan pilihan konversi (C→F atau F→C)
- Tampilkan hasil konversi dengan warna berbeda
- Tambahkan penjelasan rumus yang digunakan

**Bahasa C:**
- Input suhu dan pilihan konversi (1 untuk C→F, 2 untuk F→C)
- Hitung dan tampilkan hasilnya
- Rumus: °F = (°C × 9/5) + 32 | °C = (°F - 32) × 5/9

**PHP:**
- Form dengan dropdown pilihan konversi
- Proses konversi di PHP dan tampilkan hasil
- Tampilkan juga rumus perhitungannya

---

### 👤 Absen 3
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas & Keliling Persegi Panjang

**Deskripsi:** Buat program untuk menghitung luas dan keliling persegi panjang.

**HTML:**
- Form input panjang dan lebar
- Tampilkan luas (panjang × lebar) dan keliling (2 × (panjang + lebar))
- Gunakan tabel untuk menampilkan hasil

**Bahasa C:**
- Input panjang dan lebar
- Hitung luas dan keliling
- Tampilkan hasil dengan format: "Luas: [hasil] cm²"

**PHP:**
- Form HTML kirim ke PHP
- Hitung dan tampilkan luas & keliling
- Tambahkan validasi: jika input kurang dari 0, tampilkan pesan error

---

### 👤 Absen 4
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas & Keliling Lingkaran

**Deskripsi:** Buat program untuk menghitung luas dan keliling lingkaran dengan input jari-jari.

**HTML:**
- Form input jari-jari
- Tampilkan luas (π × r²) dan keliling (2 × π × r)
- Gunakan nilai π = 3.14
- Tambahkan gambar lingkaran (bisa dari internet)

**Bahasa C:**
- Input jari-jari (bisa desimal)
- Gunakan tipe data `float` dan konstanta untuk π
- Tampilkan hasil dengan 2 angka di belakang koma

**PHP:**
- Form input jari-jari
- Hitung dan tampilkan hasil
- Tambahkan fitur: jika jari-jari negatif, tampilkan "Jari-jari tidak boleh negatif!"

---

### 👤 Absen 5
**Nama:** [Isi nama siswa]

**Tugas:** Cek Bilangan Ganjil atau Genap

**Deskripsi:** Buat program yang bisa mengecek apakah suatu bilangan ganjil atau genap.

**HTML:**
- Form input satu angka
- Tampilkan hasil dengan warna hijau jika genap, merah jika ganjil
- Tambahkan penjelasan: "Bilangan genap habis dibagi 2"

**Bahasa C:**
- Input satu angka
- Gunakan operator modulo (`%`) untuk cek sisa bagi
- Tampilkan "Genap" atau "Ganjil"

**PHP:**
- Form input angka
- Proses di PHP dan tampilkan hasil
- Tambahkan fitur: tampilkan juga angka berikutnya yang genap/ganjil

---

### 👤 Absen 6
**Nama:** [Isi nama siswa]

**Tugas:** Cek Tahun Kabisat

**Deskripsi:** Buat program untuk mengecek apakah suatu tahun adalah tahun kabisat.

**HTML:**
- Form input tahun (misal: 2024)
- Tampilkan hasil dengan icon ✓ atau ✗
- Tambahkan penjelasan: "Tahun kabisat habis dibagi 4"

**Bahasa C:**
- Input tahun
- Cek dengan kondisi: habis dibagi 4 TAPI tidak habis dibagi 100, KECUALI habis dibagi 400
- Tampilkan "Tahun Kabisat" atau "Bukan Tahun Kabisat"

**PHP:**
- Form input tahun
- Proses pengecekan di PHP
- Tampilkan hasil dan berapa hari dalam tahun tersebut (366 atau 365)

---

### 👤 Absen 7
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Nilai Rata-rata 3 Mata Pelajaran

**Deskripsi:** Buat program untuk menghitung nilai rata-rata dan menentukan kelulusan.

**HTML:**
- Form input 3 nilai (Matematika, B.Indonesia, IPA)
- Tampilkan rata-rata dan status (Lulus/Tidak Lulus)
- Batas kelulusan: rata-rata ≥ 70

**Bahasa C:**
- Input 3 nilai
- Hitung rata-rata
- Tampilkan rata-rata dan status kelulusan

**PHP:**
- Form input 3 nilai
- Hitung rata-rata di PHP
- Tampilkan rata-rata, status, dan predikat (A: ≥85, B: 70-84, C: <70)

---

### 👤 Absen 8
**Nama:** [Isi nama siswa]

**Tugas:** Konversi Nilai Angka ke Huruf

**Deskripsi:** Buat program untuk mengubah nilai angka menjadi nilai huruf (A, B, C, D, E).

**HTML:**
- Form input nilai (0-100)
- Tampilkan nilai huruf dengan warna:
  - A: Hijau, B: Biru, C: Kuning, D: Oranye, E: Merah

**Bahasa C:**
- Input nilai angka
- Gunakan if-else atau switch case:
  - A: 85-100, B: 70-84, C: 60-69, D: 50-59, E: <50
- Tampilkan nilai huruf

**PHP:**
- Form input nilai
- Proses konversi di PHP
- Tampilkan nilai angka, nilai huruf, dan keterangan (Sangat Baik, Baik, Cukup, Kurang, Gagal)

---

### 👤 Absen 9
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Diskon Belanja

**Deskripsi:** Buat program untuk menghitung harga setelah diskon.

**HTML:**
- Form input harga awal dan persentase diskon
- Tampilkan harga diskon, jumlah diskon, dan harga akhir
- Gunakan tabel untuk menampilkan rincian

**Bahasa C:**
- Input harga dan diskon (%)
- Hitung: jumlah diskon = harga × diskon/100
- Tampilkan harga awal, diskon, dan harga akhir

**PHP:**
- Form input harga dan diskon
- Hitung di PHP
- Tambahkan fitur: jika harga > 100.000, diskon tambahan 5%

---

### 👤 Absen 10
**Nama:** [Isi nama siswa]

**Tugas:** Cek Usia untuk Membuat KTP/SIM

**Deskripsi:** Buat program untuk mengecek apakah seseorang sudah bisa membuat KTP atau SIM.

**HTML:**
- Form input nama dan tahun lahir
- Tampilkan usia dan kelayakan:
  - KTP: usia ≥ 17 tahun
  - SIM: usia ≥ 17 tahun

**Bahasa C:**
- Input tahun lahir
- Hitung usia (tahun sekarang - tahun lahir)
- Tampilkan usia dan status "Bisa buat KTP/SIM" atau "Belum bisa"

**PHP:**
- Form input nama dan tanggal lahir
- Hitung usia secara otomatis dengan fungsi PHP date()
- Tampilkan usia dan kelayakan dengan pesan yang ramah

---

### 👤 Absen 11
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Volume Balok

**Deskripsi:** Buat program untuk menghitung volume balok.

**HTML:**
- Form input panjang, lebar, tinggi
- Tampilkan volume (p × l × t) dengan satuan cm³
- Tambahkan gambar balok

**Bahasa C:**
- Input 3 nilai (panjang, lebar, tinggi)
- Hitung volume
- Tampilkan hasil dengan format rapi

**PHP:**
- Form input 3 nilai
- Hitung volume
- Tambahkan fitur: hitung juga luas permukaan balok (2×(pl+pt+lt))

---

### 👤 Absen 12
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Volume Bola

**Deskripsi:** Buat program untuk menghitung volume bola.

**HTML:**
- Form input jari-jari
- Tampilkan volume (4/3 × π × r³)
- Gunakan π = 3.14
- Tampilkan hasil dengan 2 angka desimal

**Bahasa C:**
- Input jari-jari
- Gunakan rumus: (4.0/3.0) × 3.14 × r × r × r
- Tampilkan hasil dengan format desimal

**PHP:**
- Form input jari-jari
- Hitung volume menggunakan pow() atau operator *
- Tampilkan hasil dan tambahkan penjelasan rumus

---

### 👤 Absen 13
**Nama:** [Isi nama siswa]

**Tugas:** Cek Bilangan Positif, Negatif, atau Nol

**Deskripsi:** Buat program untuk mengecek jenis bilangan.

**HTML:**
- Form input satu angka
- Tampilkan hasil dengan warna:
  - Positif: Hijau, Negatif: Merah, Nol: Abu-abu

**Bahasa C:**
- Input satu angka
- Gunakan if-else untuk cek:
  - > 0: Positif
  - < 0: Negatif
  - = 0: Nol

**PHP:**
- Form input angka
- Proses di PHP
- Tambahkan fitur: tampilkan juga apakah bilangan tersebut bulat atau desimal

---

### 👤 Absen 14
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Gaji Karyawan (Lembur)

**Deskripsi:** Buat program untuk menghitung gaji dengan sistem lembur.

**HTML:**
- Form input nama, gaji pokok, dan jam lembur
- Tampilkan rincian: gaji pokok, bonus lembur, total gaji
- Upah lembur: Rp 50.000/jam

**Bahasa C:**
- Input gaji pokok dan jam lembur
- Hitung: total = gaji pokok + (jam lembur × 50000)
- Tampilkan rincian gaji

**PHP:**
- Form input data
- Hitung total gaji
- Tambahkan fitur: jika jam lembur > 10 jam, bonus tambahan Rp 100.000

---

### 👤 Absen 15
**Nama:** [Isi nama siswa]

**Tugas:** Konversi Mata Uang (Rupiah ke Dollar & Euro)

**Deskripsi:** Buat program untuk mengkonversi Rupiah ke Dollar dan Euro.

**HTML:**
- Form input jumlah Rupiah
- Tampilkan hasil konversi ke Dollar dan Euro
- Gunakan kurs: 1 USD = Rp 15.000, 1 EUR = Rp 16.500

**Bahasa C:**
- Input jumlah Rupiah
- Hitung: USD = Rupiah / 15000, EUR = Rupiah / 16500
- Tampilkan hasil dengan 2 angka desimal

**PHP:**
- Form input Rupiah
- Hitung konversi
- Tambahkan fitur: tampilkan juga dalam format mata uang (misal: $ 10.50)

---

### 👤 Absen 16
**Nama:** [marioalbyrahman]

**Tugas:** Penghitung IPK Sederhana (Indeks Prestasi Kumulatif)

**Deskripsi:** Buat program untuk menghitung IPK dari 4 mata kuliah.

**HTML:**
- Form input 4 nilai (skala 0-4, bisa desimal)
- Tampilkan IPK (rata-rata 4 nilai)
- Tampilkan predikat: ≥3.5 (Cumlaude), 3.0-3.49 (Sangat Baik), 2.5-2.99 (Baik), <2.5 (Cukup)

**Bahasa C:**
- Input 4 nilai
- Hitung rata-rata
- Tampilkan IPK dan predikat

**PHP:**
- Form input 4 nilai
- Hitung IPK
- Tampilkan IPK, predikat, dan saran (misal: "Tingkatkan lagi!" jika < 3.0)

---

### 👤 Absen 17
**Nama:** [Isi nama siswa]

**Tugas:** Cek Berat Badan Ideal (BMI)

**Deskripsi:** Buat program untuk menghitung Body Mass Index (BMI).

**HTML:**
- Form input berat badan (kg) dan tinggi badan (cm)
- Tampilkan BMI dan kategori:
  - < 18.5: Kurus
  - 18.5 - 24.9: Normal
  - 25 - 29.9: Gemuk
  - ≥ 30: Obesitas

**Bahasa C:**
- Input berat (kg) dan tinggi (m - diubah dari cm)
- Rumus: BMI = berat / (tinggi × tinggi)
- Tampilkan BMI dan kategori

**PHP:**
- Form input berat dan tinggi
- Hitung BMI
- Tampilkan hasil, kategori, dan saran kesehatan sesuai kategori

---

### 👤 Absen 18
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Harga Tiket Bioskop

**Deskripsi:** Buat program untuk menghitung harga tiket bioskop dengan diskon.

**HTML:**
- Form input jumlah tiket dan hari (Senin-Minggu)
- Harga dasar: Rp 50.000/tiket
- Diskon: Hari kerja (Senin-Jumat) diskon 10%, Weekend tidak ada diskon
- Tampilkan rincian harga

**Bahasa C:**
- Input jumlah tiket dan kode hari (1=Senin, 7=Minggu)
- Hitung total harga dengan diskon
- Tampilkan rincian

**PHP:**
- Form dengan dropdown hari
- Hitung total
- Tambahkan fitur: jika beli > 5 tiket, diskon tambahan 5%

---

### 👤 Absen 19
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Tabungan (Bunga Sederhana)

**Deskripsi:** Buat program untuk menghitung tabungan dengan bunga sederhana.

**HTML:**
- Form input modal awal, suku bunga (% per tahun), dan lama menabung (tahun)
- Tampilkan bunga per tahun dan total tabungan
- Rumus: Bunga = Modal × Suku Bunga × Waktu / 100

**Bahasa C:**
- Input modal, bunga (%), dan waktu (tahun)
- Hitung bunga dan total (modal + bunga)
- Tampilkan rincian per tahun

**PHP:**
- Form input data
- Hitung dan tampilkan tabel rincian per tahun
- Contoh: Tahun 1: Modal X, Bunga Y, Total Z

---

### 👤 Absen 20
**Nama:** [Isi nama siswa]

**Tugas:** Cek Bilangan Prima (1-100)

**Deskripsi:** Buat program untuk mengecek apakah suatu bilangan adalah bilangan prima.

**HTML:**
- Form input satu angka (1-100)
- Tampilkan hasil: "Prima" atau "Bukan Prima"
- Tambahkan daftar bilangan prima dari 1-100

**Bahasa C:**
- Input angka
- Cek apakah angka hanya bisa dibagi 1 dan dirinya sendiri
- Tampilkan hasil dan faktor-faktornya jika bukan prima

**PHP:**
- Form input angka
- Cek bilangan prima dengan looping
- Tampilkan hasil dan daftar bilangan prima dari 1 sampai angka yang diinput

---

### 👤 Absen 21
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Faktorial

**Deskripsi:** Buat program untuk menghitung faktorial dari suatu bilangan.

**HTML:**
- Form input angka (1-10)
- Tampilkan hasil faktorial
- Contoh: 5! = 5 × 4 × 3 × 2 × 1 = 120
- Tampilkan proses perhitungannya

**Bahasa C:**
- Input angka
- Gunakan loop for atau while untuk menghitung faktorial
- Tampilkan hasil

**PHP:**
- Form input angka
- Hitung faktorial dengan function
- Tampilkan hasil dan proses perhitungan

---

### 👤 Absen 22
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Deret Bilangan Ganjil/Genap

**Deskripsi:** Buat program untuk menampilkan deret bilangan ganjil atau genap.

**HTML:**
- Form input batas akhir angka dan pilihan (ganjil/genap)
- Tampilkan deret bilangan
- Hitung juga jumlah dan rata-rata deret tersebut

**Bahasa C:**
- Input batas akhir dan pilihan (1=ganjil, 2=genap)
- Gunakan loop untuk menampilkan deret
- Hitung jumlah dan rata-rata

**PHP:**
- Form dengan radio button pilihan
- Tampilkan deret dalam tabel
- Hitung statistik (jumlah, rata-rata, banyaknya angka)

---

### 👤 Absen 23
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas Segitiga

**Deskripsi:** Buat program untuk menghitung luas segitiga.

**HTML:**
- Form input alas dan tinggi
- Tampilkan luas (1/2 × alas × tinggi)
- Tambahkan gambar segitiga dengan keterangan alas dan tinggi

**Bahasa C:**
- Input alas dan tinggi
- Hitung luas
- Tampilkan hasil dengan format: "Luas segitiga = [hasil] cm²"

**PHP:**
- Form input alas dan tinggi
- Hitung luas
- Tambahkan fitur: hitung juga keliling segitiga sama sisi (3 × alas)

---

### 👤 Absen 24
**Nama:** [Isi nama siswa]

**Tugas:** Cek Kelulusan Ujian dengan Nilai Akhir

**Deskripsi:** Buat program untuk menentukan kelulusan berdasarkan nilai akhir.

**HTML:**
- Form input nilai UH, UTS, dan UAS
- Nilai Akhir = (UH × 20%) + (UTS × 30%) + (UAS × 50%)
- Tampilkan nilai akhir dan status (Lulus/Remedial/Tidak Lulus)
- Batas: Lulus ≥ 70, Remedial 60-69, Tidak Lulus < 60

**Bahasa C:**
- Input 3 nilai
- Hitung nilai akhir dengan bobot
- Tampilkan rincian dan status

**PHP:**
- Form input 3 nilai
- Hitung nilai akhir
- Tampilkan rincian bobot, nilai akhir, status, dan saran

---

### 👤 Absen 25
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Harga Pulsa/Listrik (Token)

**Deskripsi:** Buat program untuk menghitung tagihan pulsa atau listrik.

**HTML:**
- Form input jumlah kWh (listrik) atau menit (pulsa)
- Tarif listrik: Rp 1.500/kWh
- Tarif pulsa: Rp 200/menit
- Tampilkan rincian pemakaian dan total bayar

**Bahasa C:**
- Input jumlah pemakaian dan pilihan (1=Listrik, 2=Pulsa)
- Hitung total berdasarkan tarif
- Tampilkan rincian

**PHP:**
- Form dengan radio button pilihan layanan
- Hitung total
- Tambahkan fitur: jika pemakaian > 100 kWh atau > 500 menit, diskon 5%

---

### 👤 Absen 26
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Kecepatan (Jarak, Waktu, Kecepatan)

**Deskripsi:** Buat program untuk menghitung kecepatan, jarak, atau waktu.

**HTML:**
- Form pilih yang dihitung (kecepatan/jarak/waktu)
- Input nilai yang diketahui
- Rumus: kecepatan = jarak/waktu, jarak = kecepatan×waktu, waktu = jarak/kecepatan
- Tampilkan hasil dengan satuan yang jelas

**Bahasa C:**
- Menu pilihan (1=Kecepatan, 2=Jarak, 3=Waktu)
- Input nilai sesuai pilihan
- Hitung dan tampilkan hasil

**PHP:**
- Form dengan dropdown pilihan
- Hitung sesuai rumus fisika
- Tampilkan hasil dan penjelasan rumus yang digunakan

---

### 👤 Absen 27
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Luas Permukaan Kubus

**Deskripsi:** Buat program untuk menghitung luas permukaan kubus.

**HTML:**
- Form input panjang rusuk
- Tampilkan luas permukaan (6 × rusuk²)
- Tambahkan gambar kubus

**Bahasa C:**
- Input panjang rusuk
- Hitung luas permukaan
- Tampilkan hasil

**PHP:**
- Form input rusuk
- Hitung luas permukaan dan volume (rusuk³)
- Tampilkan kedua hasil dengan rapi

---

### 👤 Absen 28
**Nama:** [Isi nama siswa]

**Tugas:** Cek Angka Terbesar dan Terkecil (3 Angka)

**Deskripsi:** Buat program untuk mencari angka terbesar dan terkecil dari 3 angka.

**HTML:**
- Form input 3 angka
- Tampilkan angka terbesar dan terkecil
- Urutkan ketiga angka dari kecil ke besar

**Bahasa C:**
- Input 3 angka
- Gunakan if-else untuk mencari terbesar dan terkecil
- Tampilkan hasil dan urutan

**PHP:**
- Form input 3 angka
- Gunakan fungsi max() dan min() atau sorting
- Tampilkan terbesar, terkecil, dan urutan

---

### 👤 Absen 29
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Sisa Uang Belanja

**Deskripsi:** Buat program untuk menghitung sisa uang setelah belanja.

**HTML:**
- Form input jumlah uang dan harga 3 barang
- Tampilkan total belanja dan sisa uang
- Jika uang kurang, tampilkan pesan "Uang tidak cukup!"

**Bahasa C:**
- Input uang dan 3 harga barang
- Hitung total dan sisa
- Tampilkan rincian belanja

**PHP:**
- Form input uang dan harga barang
- Hitung total dan sisa
- Tambahkan fitur: jika sisa > 0, tampilkan "Sisa uang: Rp X". Jika kurang, tampilkan "Kekurangan: Rp X"

---

### 👤 Absen 30
**Nama:** [Isi nama siswa]

**Tugas:** Penghitung Rata-rata Nilai Ulangan Harian

**Deskripsi:** Buat program untuk menghitung rata-rata nilai ulangan harian.

**HTML:**
- Form input 5 nilai ulangan
- Tampilkan rata-rata dan status:
  - ≥ 80: Sangat Baik
  - 70-79: Baik
  - 60-69: Cukup
  - < 60: Perlu Belajar Lagi

**Bahasa C:**
- Input 5 nilai menggunakan loop
- Hitung rata-rata
- Tampilkan rata-rata dan status

**PHP:**
- Form input 5 nilai
- Hitung rata-rata
- Tampilkan rata-rata, status, dan nilai tertinggi/terendah

---

## ✅ Checklist Penilaian

Setiap tugas akan dinilai berdasarkan:

| No | Kriteria | Poin |
|---|---|---|
| 1 | File HTML berjalan dengan baik | 25 |
| 2 | File Bahasa C berjalan dengan baik | 25 |
| 3 | File PHP berjalan dengan baik | 25 |
| 4 | Tampilan rapi dan mudah dipahami | 15 |
| 5 | Commit ke repository tepat waktu | 10 |
| **TOTAL** | | **100** |

---

## 🆘 Tips dan Bantuan

1. **Jika bingung dengan HTML:** Lihat contoh di W3Schools (https://www.w3schools.com/html/)
2. **Jika bingung dengan C:** Lihat contoh di Programiz (https://www.programiz.com/c-programming)
3. **Jika bingung dengan PHP:** Lihat contoh di W3Schools (https://www.w3schools.com/php/)
4. **Jika error:** Periksa tanda titik koma (`;`), kurung kurawal (`{}`), dan tag penutup
5. **Jika stuck:** Tanyakan ke teman atau guru, jangan menyerah!

---

## 📞 Kontak

Jika ada pertanyaan, hubungi:
- **Guru:** [Nama Guru]
- **Email:** [email@sekolah.sch.id]
- **Kelas:** 8 [Nama Kelas]

---

> 🌟 **Semangat mengerjakan! Coding itu menyenangkan!** 🌟
> 
> *"Program yang baik adalah program yang berjalan, bukan program yang sempurna."*

**Deadline Pengumpulan:** [Tanggal Deadline]

---

## Cara Menggunakan README Ini

1. **Copy semua teks di atas** ke file bernama `README.md` di repository GitHub kamu
2. **Ganti bagian yang ada tanda kurung siku** `[...]` dengan data sebenarnya:
   - `[URL_REPOSITORY_INI]` → link repository GitHub
   - `[Isi nama siswa]` → nama siswa sesuai absen
   - `[Nama Guru]`, `[email@sekolah.sch.id]`, dll
3. **Buat repository kosong** di GitHub
4. **Upload file README.md** tersebut
5. **Bagikan link repository** ke siswa-siswa

Setiap siswa akan:
1. Clone repository
2. Buat folder `NomorAbsen_Nama` (contoh: `01_Budi`)
3. Buat 3 file di dalam folder tersebut:
   - `tugas.html`
   - `tugas.c`
   - `tugas.php`
4. Commit dan push hasil kerja mereka

Semoga membantu! Kalau butuh penjelasan lebih lanjut atau modifikasi, silakan tanya.

