# SISTEM PENYEWAAN ASRAMA MAHASISWA


(unsulbarlogo.jpg)


**Ratri Pramudita**  
D0223321




## FRAMEWORK WEB BASED  
**2025**

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

| Nama Field   | Tipe Data | Keterangan                         |
|--------------|-----------|-------------------------------------|
| id           | int       | Primary key                        |
| nama         | string    | Nama pengguna                      |
| email        | string    | Email pengguna, harus unik         |
| password     | string    |                                   |
| role         | enum      | (admin, staf, mahasiswa)           |
| created_at   | auto      | Waktu pembuatan pertama            |
| updated_at   | auto      | Waktu update terakhir              |

### Tabel `ruangan`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|----------------------------------------|
| id             | int       | Primary key                           |
| nomor_kamar    | int       | Nomor kamar                           |
| gedung         | string    | Gedung yang digunakan                 |
| kapasitas      | int       | Jumlah anggota per kamar              |
| harga_sewa     | decimal   | Harga sewa kamar per enam bulan       |
| created_at     | timestamp | Waktu pembuatan pertama               |
| updated_at     | timestamp | Waktu update terakhir                 |

### Tabel `penyewaan`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|----------------------------------------|
| id             | int       | Primary key                           |
| user_id        | int       | Terhubung dengan tabel user           |
| ruangan_id     | int       | Terhubung dengan tabel ruangan        |
| tanggal_sewa   | date      | Tanggal penempatan pertama            |
| akhir_sewa     | date      | Tanggal penempatan terakhir           |
| created_at     | timestamp | Waktu pembuatan pertama               |
| updated_at     | timestamp | Waktu update terakhir                 |

### Tabel `pembayaran`

| Nama Field     | Tipe Data | Keterangan                            |
|----------------|-----------|----------------------------------------|
| id             | int       | Primary key                           |
| penyewaan_id   | int       | Terhubung dengan tabel penyewaan      |
| total_biaya    | decimal   | Total biaya penyewaan                 |
| status         | enum      | (selesai, pending)                    |
| created_at     | timestamp | Waktu pembuatan pertama               |
| updated_at     | timestamp | Waktu update terakhir                 |

---

## 3. Jenis Relasi dan Tabel yang Berelasi

1. **Tabel `user` dengan tabel `penyewaan`**  
   Relasi: *One to Many*, di mana satu user bisa menyewa lebih dari satu kali.  
   - Primary Key: `user.id`  
   - Foreign Key: `penyewaan.user_id`

2. **Tabel `ruangan` dengan tabel `penyewaan`**  
   Relasi: *One to Many*, di mana satu ruangan bisa disewa berkali-kali.  
   - Primary Key: `ruangan.id`  
   - Foreign Key: `penyewaan.ruangan_id`

3. **Tabel `penyewaan` dengan tabel `pembayaran`**  
   Relasi: *One to One*, di mana satu penyewaan hanya memiliki satu pembayaran.  
   - Primary Key: `penyewaan.id`  
   - Foreign Key: `pembayaran.penyewaan_id`
