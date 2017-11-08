<?php
include 'Jadwal.php';

$jadwal1 = new Jadwal();
$jadwal1->namaGuru("Yuni");
$jadwal1->namaMapel("Bahasa Indonesia");
$jadwal1->namaKelas("X TKJ");
$jadwal1->namaSiswa("Riyani");

echo "Mata Pelajaran : ".$jadwal1->tampilMapel()."<br>";
echo "Nama Guru : ".$jadwal1->tampilNamaguru()."<br>";
echo "Kelas : ".$jadwal1->tampilKelas()."<br>";
echo "Nama Siswa : ".$jadwal1->tampilNamasiswa()."<br>";

