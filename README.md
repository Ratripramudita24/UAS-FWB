<div align="center">
    <h1> SISTEM PENYEWAAN ASRAMA MAHASISWA </h1>


  <img src="unsulbar.png" alt="Logo Unsulbar" width="200"/>


  <p><strong>Ratri Pramudita</strong><br/>D0223321</p> <br>

  <h1> FRAMEWORK WEB BASED </h1>
  <h1> 2025 </h1>

</div>


---

## 1. Role dan Fitur-fiturnya

### 1. Admin
- Menambah, mengedit, atau menghapus data ruangan (nomor kamar, kapasitas, gedung, harga sewa)
- Lihat Seluruh Data Penyewaan dan Pembayaran (Semua Asrama)

### 2. Petugas Asrama
- Login  
- Lihat Daftar Permintaan Penyewaan di Asrama yang Dikelola  
- Verifikasi Permintaan Penyewaan  
- Mengubah status pembayaran (misalnya dari pending menjadi selesai)  
- Lihat Riwayat Sewa di Asrama yang Dikelola

### 3. Mahasiswa
- Login  
- Menelusuri daftar ruangan yang tersedia untuk disewa  
- Mengajukan permohonan penyewaan ruangan  

---

## 2. Tabel pada Database, beserta Field dan Tipe Datanya

### Tabel `user`

| Nama Field   | Tipe Data | Keterangan                          |
|--------------|-----------|-------------------------------------|
| id           | BigInteger| Primary key , auto increment        |
| nama         | varchar   | Nama pengguna                       |
| email        | varchar   | Email pengguna, tidak boleh ada yang sama|
| password     | varchar   | password tidak boleh sama           |
| role         | enum      | (admin, staf, mahasiswa)            |
| nim          | varchar   | Hanya diisi jika rolenya mahasiswa  |
| created_at   | timestamp | Waktu pembuatan pertama             |
| updated_at   | timestamp | Waktu update terakhir               |

### Tabel `user_profile`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|---------------------------------------|
| id             | BigInteger| Primary key                           |
| user_id        | BigInteger| Terhubung dengan tabel user           |
| alamat         | varchar   | Alamat pengguna                       |
| no_telepon     |varchar    | Nomor telepon pengguna                |
| created_at     | timestamp | Waktu pembuatan pertama               |
| updated_at     | timestamp | Waktu update terakhir                 |

### Tabel `ruangan`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|---------------------------------------|
| id             | BigInteger| Primary key, auto increment           |
| nomor_kamar    | integer   | Nomor kamar                           |
| gedung         | varchar   | Gedung yang digunakan                 |
| kapasitas      | integer   | Jumlah anggota per kamar              |
| harga_sewa     | decimal   | Harga sewa kamar per enam bulan       |
| status         | enum      | Tersedia atau Tidak_tersedia          |
| created_at     | timestamp | Waktu pembuatan pertama               |
| updated_at     | timestamp | Waktu update terakhir                 |

### Tabel `fasilitas`

| Nama Field     | Tipe Data | Keterangan                             |
|----------------|-----------|----------------------------------------|
| id             | BigInteger| Primary key                            |
| nama_fasilitas | varchar   | fasilitas yang tersedia                |
| created_at     | timestamp | Waktu pembuatan pertama                |
| updated_at     | timestamp | Waktu update terakhir                  |

### Tabel `fasilitas_ruangan`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|---------------------------------------|
| ruangan_id     | BigInteger| Terhubung dengan tabel penyewaan      |
| fasilitas_id   | BigInteger| Total biaya penyewaan                 |

### Tabel `sewa`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|---------------------------------------|
| id             | BigInteger| Primary key                           |
| user_id        | BigInteger| Terhubung dengan tabel user           |
| ruangan_id     | BigInteger| Terhubung dengan tabel ruangan        |
| tanggal_sewa   | date      | Tanggal penempatan pertama            |
| status         | enum      | (pending/disetujui/ditolak)           |
| jumlah_bayar   |decimal(10,2)| total yang harus dibayar            |
| bukti_pembayaran| varchar  | berupa nomor referensi transaksi      |
| tanggal_bayar  | date      | Tanggal wakru bayar                   |
| created_at     | timestamp | Waktu pembuatan pertama               |
| updated_at     | timestamp | Waktu update terakhir                 |



---

## 3. Jenis Relasi dan Tabel yang Berelasi

1. **Tabel 'user' dengan tabel 'user_profile'**  
   Relasi: *One to One*, Setiap pengguna memiliki satu profil yang menyimpan informasi tambahan seperti fakultas, program studi, alamat, dan nomor telepon..  
   <!-- - Primary Key: `user.id`  
   - Foreign Key: `penyewaan.user_id` -->

2. **Tabel 'user' dengan tabel 'sewa'**  
   Relasi: *One to Many*, Satu pengguna dapat melakukan beberapa penyewaan kamar pada waktu yang berbeda..  
   <!-- - Primary Key: `ruangan.id`  
   - Foreign Key: `penyewaan.ruangan_id` -->

3. **Tabel 'ruangan' dengan tabel 'sewa'**  
   Relasi: *One to One*, di mana satu penyewaan hanya memiliki satu pembayaran.  
   <!-- - Primary Key: `penyewaan.id`  
   - Foreign Key: `pembayaran.penyewaan_id` -->
4. **Tabel 'ruangan' dengan tabel 'fasilitas' melalui tabel 'fasilitas_ruangan'**  
   Relasi: *Many to Many*, Satu ruangan dapat memiliki banyak fasilitas, dan satu fasilitas dapat tersedia di banyak ruangan.  
