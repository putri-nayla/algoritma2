<?php
$nama = "putri";
$harga = 2000;
$nama_barang ="baju sekolah";
$harga = 350;
$stok = 20;
// membuat variabel baru
$stok = 40;
//1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
//Contoh: ✔️ Benar
$namakepanjangan = "putri nayla";
$namapendek = "putri";
//2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
//Contoh:
$nama_barang = "baju sekolah";
$namaPembeli = "jihan"; //  menggunakan camelCase

//3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
//Contoh:
$nama_barang = " baju sekolah";
$namaPembeli = "alika";
$harga = 350;

//4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
//Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "pjok";
$BELAJAR = "seni budaya";
$belajar = "sejarah";
// =================== cara mencetak =======================
echo 
"<p>nama putri :$nama,".
"<p> harga:$harga,".
$nama,"<p>".
$Nama_barang,"<p>".
$harga,"<p>".
$stok,"<p>".
$nama,"<p>".
$namakepanjangan,"<p>".
$nama_barang,"<p>".
$namaPembeli,"<p>". 
$nama_barang,"<p>".
$namaPembeli,"<p>".
$harga,"<p>".
$Belajar,"<p>".
$BELAJAR,"<p>".
$belajar;