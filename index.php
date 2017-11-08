<?php
include 'Jadwal.php';

$jadwal1 = new Jadwal();
$siswa1 = new Jadwal();
$siswa2 = new Jadwal();

$siswa1->namaSiswa("Fujianti");
$siswa2->namaSiswa("Riyani");

$jadwal1->namaGuru("Yuni");
$jadwal1->namaMapel("Bahasa Indonesia");
$jadwal1->namaKelas("X TKJ");
$jadwal1->namaHari("Senin jam ke 2");

echo "Waktu : ".$jadwal1->tampilHari()."<br>";
echo "Mata Pelajaran : ".$jadwal1->tampilMapel()."<br>";
echo "Nama Guru : ".$jadwal1->tampilNamaguru()."<br>";
echo "Kelas : ".$jadwal1->tampilKelas()."<br>";
echo "Nama Siswa : ".$siswa1->tampilNamasiswa()."<br>";
echo "Nama Siswa : ".$siswa2->tampilNamasiswa()."<br>";
