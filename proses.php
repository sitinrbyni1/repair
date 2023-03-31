<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // ambil nilai dari input form
  $angka01 = $_POST['angka1'];
  $angka02 = $_POST['angka2'];
  $dropdown = $_POST['dropdown'];

  // proses operasi aritmatika
  if ($dropdown == '+') {
    $hasil = $angka01 + $angka02;
  } else if ($dropdown == '-') {
    $hasil = $angka01 - $angka02;
  } else if ($dropdown == '*') {
    $hasil = $angka01 * $angka02;
  } else if ($dropdown == '/') {
    $hasil = $angka01 / $angka02;
  }

  // tampilkan hasil
  echo "Hasil operasi " . $angka01 . " " . $dropdown. " " . $angka02 . " adalah " . $hasil;
}
?>