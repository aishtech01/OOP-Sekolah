<?php
include 'Jadwal.php';

$jadwal1 = new Jadwal();
$siswa1 = new Siswa();
$siswa2 = new Siswa();
$guru1 = new Guru();
$mapel1 = new Mapel();
$kelas1 = new Kelas();

$siswa1->namaSiswa("Fujianti");
$siswa2->namaSiswa("Riyani");

$guru1->namaGuru("Yuni");

$mapel1->namaMapel("Bahasa Indonesia");

$kelas1->namaKelas("X TKJ");

$jadwal1->namaHari("Senin jam ke 2");



echo "Waktu : ".$jadwal1->tampilHari()."<br>";
echo "Mata Pelajaran : ".$mapel1->tampilMapel()."<br>";
echo "Nama Guru : ".$guru1->tampilNamaguru()."<br>";
echo "Kelas : ".$kelas1->tampilKelas()."<br>";
echo "Nama Siswa : ".$siswa1->tampilNamasiswa()."<br>";
echo "Nama Siswa : ".$siswa2->tampilNamasiswa()."<br>";
