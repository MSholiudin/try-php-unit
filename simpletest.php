<?php 
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// mengimpor "sebanyak sau kali" class yang akan diuji
require_once "Wordcount.php";

// Class untuk run Testing
class SimpleTest extends TestCase {
	public function testCountWords() {
		// membuat instance dr class WordCount
		$Wc = new WordCount();

		// mendefinisikan sebuah kalimat yang akan digunakan sebagai argumen
		$TestSentence = "My name is choll";

		// memanggil metode countWords() dari instance WordCount dan menyimpan hasilnya dalam variabel $WordCount. Hasilnya yaitu jumlah kata dalam TestSentence
		$WordCount = $Wc->countWords($TestSentence);

		// memeriksa apakah jumlah kata = 4, jika tidak test ini akan gagal
		$this->assertEquals(4, $WordCount);
	}
}
?>