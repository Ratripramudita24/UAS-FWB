SISTEM PENYEWAAN ASRAMA MAHASISWA


 


Ratri Pramudita
D0223321



FRAMEWORK WEB BASED
2025

 
 
 
1.	Role dan fitur-fiturnya
1.	Role sebagai admin
	Menambah, mengedit, atau menghapus data ruangan (nomor kamar, kapasitas, gedung, harga sewa).
	Lihat Seluruh Data Penyewaan dan Pembayaran (Semua Asrama)
2.	Role sebagai petugas asrama
	Login
	Lihat Daftar Permintaan Penyewaan di Asrama yang Dikelola
	Verifikasi Permintaan Penyewaan
	Mengubah status pembayaran (misalnya dari pending menjadi selesai).
	Lihat Riwayat Sewa di Asrama yang Dikelola
3.	Role sebagai mahasiswa :
	login
	Menelusuri daftar ruangan yang tersedia untuk disewa.
	Mengajukan permohonan penyewaan ruangan 
2.	Tabel pada database, beserta field dan tipe datanya
1.	Tabel user
Nama field	Tipe data	Keterangan
Id	Int	Primary key
Nama	String	Nama pengguna
Email	String	Email pengguna, harus uniqe
Password	String	
Role	enum	(Admin, staf, mahasiswa)
Created_at	Auto	Waktu pembuatan pertama
Updated_at	Auto	Waktu update terakhir

2.	Tabel ruangan
Nama field	Tipe data	Keterangan
Id	Int	Primary key
Nomor_Kamar	Int	Nomor kamar
Gedung	String	Gedung yang digunakan
Kapsitas	Int	Jumlah anggota perkamar
Harga_sewa	Decimal	Harga sewa kamar per enam bulan
Created_at	Timestamp	Waktu pembuatan pertama
Updated_at	Timestamp	Waktu update terakhir

3.	Tabel penyewaan 
Nama field	Tipe data	Keterangan
Id	Int	Primary key
User_id	Int	Terhubung dengan tabel user 
Ruangan_id	Int	Terhubung dengan tabel ruangan
Tanggal_sewa	Date	Tanggal penempatan pertama
Akhir_sewa	Date	Tanggal penempatan terakhir
Created_at	Timestamp	Waktu pembuatan pertama
Updated_at	Timestamp	Waktu update terakhir

4.	Tabel pembayaran
Nama field	Tipe data	Keterangan
Id	Int	Primary key
Penyewaan_id	Int	Terhubung dengan tabel penyewaan
Total_Biaya	Decimal	Total biaya penyewaan 
Status	Enum(Selesai, pending)	Status pembayaran penyewa
Created_at	Timestamp	Waktu pembuatan pertama
Updated_at	Timestamp	Waktu update terakhir



 
 
3.	Jenis relasi dan tabel yang berelasi
1.	Tabel user dengan tabel penyewaan
Yaitu relasi one to many, Dimana satu user bisa menyewa ruangan lebih dari satu kali
Primary key di tabel user : {id}
Foreign key di tabel penyewaan : {user_id}
2.	Tabel ruangan dengan tabel penyewaan
Yaitu relasi one to many, Dimana satu ruangan bisa disewa berkali-kali oleh mahasiswa (bergantian waktu)
Primary key di tabel ruangan : {id}
Foreign key di tabel penyewaan : {ruangan_id}
3.	Tabel penyewaan dan tabel pembayaran
Yaitu relasi one to one, Dimana Setiap penyewaan hanya memiliki satu pembayaran terkait.
Primary key di tabel penyewaan : {id}
Foreign key di tabel pembayaran : {penyewaan_id}
