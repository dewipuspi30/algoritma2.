<?php
$variabel = "hallo,dunia!";

//menghapus variabel dari memori
unset($variabel);

//memeriksa apakah variabel masih da
if (!isset ($variabel))
 {
    echo "variabel telah dihapus.";
} else {
    echo "variabel masih ada.";
}

echo "<P><br><strong>by dewi puspita sari </strong>";
