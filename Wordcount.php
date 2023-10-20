<?php 
//File : Wordcount.php
//deklarasi awal kelas yg digunakan untuk menghitung jumlah kata dalam sebuah kalimat
class Wordcount {
	public function countWords($sentence) {
		//explode digunakan untuk memecah kalimat menjadi elemen array berdasarkan spasi. Count digunakan untuk menghitung jumlah elemen array yang dihasilkan explode
		return count (explode(" ", $sentence));
	}
}
?>