<?php
//cara membuat indexed array
$minuman =array("p>kopi","<p>teh","<p>jus jeruk");
array("kopi");
array("teh");
array("jus jeruk");

//mengakses elemen array
echo $minuman = "<p>kopi"; //output:kopi
echo $minuman = "<p>tei"; //output:teh
echo $minuman = "<p>tjus jeruk"; //output:jus jeruk
//menampilkan seluruh isi array
print_r($minuman);

$makanan  = ["nasi goreng", "soto", "bubur"];
array("nasi goreng");
array("soto");
array("bubur");

echo $makanan = "<p>nasi goreng"; //output:nasi goreng
echo $makanan = "<p>soto"; //output:soto
echo $makanan = "<p>bubur"; //output:bubur

print_r($makanan);

echo "<P><br><strong>by dewi puspita sari </strong>";
?>