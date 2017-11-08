<?php
include 'Jadwal.php';

$jadwal1 = new Jadwal();

$jadwal1->namaGuru("Yuni");
$jadwal1->namaMapel("Bahasa Indonesia");
$jadwal1->namaKelas("X TKJ");
$jadwal1->namaSiswa("Riyani");
$jadwal1->namaHari("Senin jam ke 2");

echo "Waktu : ".$jadwal1->tampilHari()."<br>";
echo "Mata Pelajaran : ".$jadwal1->tampilMapel()."<br>";
echo "Nama Guru : ".$jadwal1->tampilNamaguru()."<br>";
echo "Kelas : ".$jadwal1->tampilKelas()."<br>";
echo "Nama Siswa : ".$jadwal1->tampilNamasiswa()."<br>";
