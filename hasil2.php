<?php  

require_once 'latihan2.php';

$data = new hargapakaian('12','14','15','19','100000','150000','250000','240000');

echo 'jumlah celana ..'.$data->a()."<br>";
echo 'jumlah baju..'.$data->b()."<br>";
echo 'jumlah rok .. '.$data->c()."<br>";
echo 'jumlah levis..'.$data->d()."<br>";
echo 'harga celana..'.$data->e()."<br>";
echo 'harga baju..'.$data->f()."<br>";
echo 'harga rok..'.$data->g()."<br>";
echo 'harga levis..'.$data->h()."<br>";
?>