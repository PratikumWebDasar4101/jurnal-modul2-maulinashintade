<?php 
function baris_bintang ($value){

	kolom($value);
	echo "<br>";
	$value--;
	if ($value >= 1)
		baris_bintang($value);
}
function kolom($batas, $awal=1){
	echo "*";
	$awal++;
	if ($awal <= $batas) 
		kolom($batas, $awal);
}
function ganjil_genap($value){
	$genap = array();
	$ganjil = array();
	for ($i=1; $i < $nilai; $i++) { 
		if ($i % 2==0) {
			array_push($ganjil, $i);
		}else{
			array_push($genap, $i);
		}
		echo "ganjil : ";
	}
}
	if (isset($_GET ['submit'])) {
	$angka = isset($_GET['angka']) ? $_GET['angka'] : 0;
	baris_bintang($value);
}

?>
