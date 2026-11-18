
<?php

$a = 20;
$b = 6;

echo "<h3>Bai 1: Cac phep toan so hoc</h3>";

echo "Tong: " . ($a + $b) . "<br>";
echo "Hieu: " . ($a - $b) . "<br>";
echo "Tich: " . ($a * $b) . "<br>";
echo "Thuong: " . ($a / $b) . "<br>";
echo "Chia lay du: " . ($a % $b) . "<br>";



echo "<h3>Bai 2: Cac toan tu so sanh</h3>";

$x = 10;     
$y = "10";    

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x <> $y);
echo "<br>";

var_dump($x !== $y);
echo "<br>";



echo "<h3>Bai 3: Toan tu tang</h3>";

$x = 5;

echo "Gia tri ban dau: " . $x . "<br>";

echo "Tang truoc (++x): " . (++$x) . "<br>";
echo "Gia tri sau tang truoc: " . $x . "<br>";

$x = 5;

echo "Gia tri ban dau: " . $x . "<br>";

echo "Tang sau (x++): " . ($x++) . "<br>";
echo "Gia tri sau tang sau: " . $x . "<br>";


echo "<h3>Bai 4: Noi chuoi</h3>";

$chuoi1 = "Tran Nhat";
$chuoi2 = " Tuong";


$ketqua = $chuoi1 . $chuoi2;

echo "Noi bang toan tu .: " . $ketqua . "<br>";


$chuoi1 .= $chuoi2;

echo "Noi bang toan tu .=: " . $chuoi1 . "<br>";



echo "<h3>Bai 5: Dem so luong ky tu</h3>";

$chuoiKhongDau = "Lap trinh PHP";
$chuoiCoDau = "Lap trinh Web";

echo "Chuoi khong dau: " . $chuoiKhongDau . "<br>";
echo "So ky tu strlen: " . strlen($chuoiKhongDau) . "<br>";

echo "Chuoi co dau: " . $chuoiCoDau . "<br>";
echo "So ky tu mb_strlen: " . mb_strlen($chuoiCoDau, "UTF-8") . "<br>";


echo "<h3>Bai 6: Chuyen doi chu hoa va chu thuong</h3>";

$vanban = "Lap trinh PHP va MySQL";

echo "Chuoi ban dau: " . $vanban . "<br>";

echo "Chu hoa: " . strtoupper($vanban) . "<br>";

echo "Chu thuong: " . strtolower($vanban) . "<br>";


echo "<h3>Bai 7: Ep kieu du lieu</h3>";

$chuoiA = "123 abc";
$chuoiB = "abc 123";

$soA = (int)$chuoiA;
$soB = (int)$chuoiB;

echo "Gia tri chuoi A sau khi ep kieu: ";
var_dump($soA);

echo "<br>";

echo "Gia tri chuoi B sau khi ep kieu: ";
var_dump($soB);

echo "<br>";



echo "<h3>Bai 8: Cac kieu du lieu</h3>";

$soNguyen = 100;
$soThuc = 10.5;
$chuoi = "Tran Nhat Tuong";
$logic = true;

echo "Kieu int: ";
var_dump($soNguyen);

echo "<br>";

echo "Kieu float: ";
var_dump($soThuc);

echo "<br>";

echo "Kieu string: ";
var_dump($chuoi);

echo "<br>";

echo "Kieu bool: ";
var_dump($logic);

echo "<br>";

?>
