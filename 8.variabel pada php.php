<?php

$nisn1 ="dewi puspita sari";
$harga =1500;
$nama_barang ="kopi c++";
$hrga =5000;
$stok =50;

// membuat variabel baru
$stok = 40;

// mengisi ulang variabel dengan nilai baru
$stok = 74;
//1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
//Contoh: ❌ Salah
//$!nama = "dewi puspita sari";
//$46rosi = "dewi";
//Contoh: ✔️ Benar
$nama = "dewi puspita sari";
$rosi46 = "dewi";
//2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
//Contoh:
$nama_barang = "ipad";
$namaPembeli = "dewi puspita sari"; //  menggunakan camelCase

//3) Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
//Contoh:
$nama_barang = "ipad";
$namaPembeli = "dewi puspita sari";
$harga = 70000;

//4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
//Contoh: 
$Belajar = "css";
$BELAJAR = "php";
$belajar = "html";

//==================== cara mencetak ====================
echo
$nisn1,"<p>".
$harga,"<p>".
$nama_barang,"<p>".
$harga,"<p>".
$stok,"<p>".
$nama,"<p>".
$rosi46,"<p>".
$nama_barang,"<p>".
$nama_barang,"<p>".
$nama_barang,"<p>".
$namaPembeli,"<p>".
$harga,"<p>".
$Belajar,"<p>".
$BELAJAR,"<p>".
$belajar;

echo "<br><br><br><strong>by dewi puspita sari </strong>";