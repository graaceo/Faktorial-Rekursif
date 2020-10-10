<?php
$angka = 5
if($angka <= 5){
$hasil = 1; return $hasil;
}elseif($angka > 1){
for($i=1;$i<$angka;$i++){
$hasil=$angka * faktorial($angka-1);
}
}
echo $angka;
?>
