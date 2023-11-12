<?php
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function tangDan($array_6){
    sort($array_6);
    return $array_6;
}
$array_6 = array(9, 5, 4, 6, 8, 12, 1);
$number= tangDan($array_6);
echo "6. Mảng tăng dần là: " .implode(",", $number);
echo "<br>";
?>
<?php
//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function tinhGiaithua ($n) {
    if ($n==0 || $n==1){
        return 1;
    } else {
        return $n*tinhGiaithua ($n-1);
    }
}
$a=4;
echo "7. Giai thừa của $a là: ".tinhGiaithua($a)."<br>";
?>

<?php
//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function timNguyento($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$start = 1;
$end = 30;
echo "8. Các số nguyên tố trong khoảng $start đến $end là: ";
for ($i = $start; $i <= $end; $i++) {
    if (timNguyento($i)) {
        echo "$i, ";
    }
}
echo "<br>";
?>

<?php
//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function tinhTong($sum){
    return array_sum($sum);  
}
$sum = array(1, 2, 3, 4, 5, 6, 7);
$a= tinhTong($sum);
echo "9. Tổng của các số trong mảng là: $a". "<br>";
?>

<?php
//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    if ($n < 0){
        return -1;
    }
   else if ($n == 0||$n==1) {
        return $n;
   } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
   }
}
$start = 0;
$end = 10;
echo "10. Các số Fibonacci trong khoảng $start đến $end là: ";
for ($i = $start; $i < $end; $i++) {
    echo fibonacci($i) . ", ";
}
echo "<br>";
?>

<?php
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function laArmstrong($number) {
    $origin = $number;
    $n = strlen($number);
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $n);
        $number = (int)($number / 10);
    }

    return $sum == $origin;
}
$test = 153; 
if (laArmstrong($test)) {
    echo "11. $test là số Armstrong.";
} else {
    echo "11. $test không là số Armstrong.";
}
echo "<br>";
?>
<?php
//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function chenPhantu($array, $element, $position) {
    array_splice ($array, $element, 0, $position);
        return $array;
}
function inMang($array) {
    foreach ($array as $x) {
        echo "$x ";
    }
    echo "<br>";
}

$origin = array(1, 2, 3, 4, 5);

$insert = 10;

$insert_Position = 2;

$newArray = chenPhantu($origin, $insert_Position, $insert);

echo "12. Mảng sau khi chèn phần tử là: ";
inMang($newArray);
?>

<?php
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function loaiBo($array_13){
    return array_unique($array_13);
}
$array_13 = array(1, 2, 3, 3, 4, 5, 3);
$unique= loaiBo($array_13);
// hoặc
//echo "13. Mảng sau khi đã loại bỏ các phần tử trùng lặp <pre>";
//print_r($unique);
echo "13. Mảng sau khi đã loại bỏ các phần tử trùng lặp: ".implode(", ",$unique);
echo "<br>";
?>

<?php
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function timVitri($array,$n){
    $location = array_search($n,$array);
    if ($location !== false ){
        return $location;
    } else {
        return -1;
    }
}
$array = array(2, 5, 8, 11, 7, 14, 9);
$search = 7;
$location = timVitri($array, $search);

if ($location !== -1) {
    echo "14. Vị trí $search của trong mảng là: $location";
} else {
    echo "14. Không có trong mảng.";
}
echo "<br>";
?>

<?php
//15.Viết chương trình PHP để đảo ngược một chuỗi.
function daoNguoc($name){
    return strrev($name);
}
$name = "hoang thanh hue";
$reverse = daoNguoc($name);
echo "15. Chuỗi đảo ngược là: " . $reverse."<br>";
?>

<?php
//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function soLuong($element){
    return count ($element);
}
$element = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = soLuong($element);
echo "16. Số lượng phần tử trong mảng là: $count" ."<br>";
?>

<?php
//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function laPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}
$test = "Madam";
if (laPalindrome($test)) {
    echo "17. $test là chuỗi Palindrome.";
} else {
    echo "17. $test không phải là chuỗi Palindrome.";
}
echo "<br>";
?>

<?php
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function xuatHien($array, $element){
    $count=0;
    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }

    return $count;
}
$array = array(0, 1, 0, 8, 3, 4, 7, 0);
$element=0;
$count_element= xuatHien($array, $element);
echo "18. Số lần xuất hiện của $element là: $count_element";
echo "<br>";
?>

<?php
//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function giamDan ($array){
    rsort($array);
    return $array;
}
$array = array(9, 1, 4, 8, 3, 2);
$number= giamDan($array);
echo "19. Mảng giảm dần là: " .implode(", ",$number);

echo "<br>";
?>

<?php
//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function phanTu ($array, $new){
    //đầu mảng
    array_unshift($array, $new);
    // cuối array_push 
    return $array;
}
$array= array (1, 2, 3, 4, 5);
$new=6;
$new_array= phanTu ($array, $new);
echo "20. Mảng sau khi đã thêm phần tử vào: " . implode(", ",$new_array);
echo "<br>";
// hoặc
//echo "20. <pre>";
//print_r($new_array);
?>

<?php
//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function lonThuhai($array) {
    if (count($array) < 2) {
        return;
    }
    rsort($array);
    return $array[1];
}
$test = array(10, 5, 25, 20, 15, 30);
$result = lonThuhai($test);

echo "21. Số lớn thứ hai trong mảng là: $result";
echo "<br>";
?>

<?php
//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function uscln($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
function bscnn($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}
$a = 20;
$b = 55;
echo ("22. USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b)). "<br>";
?>

<?php
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function hoanHao($n) {
    if ($n <= 0) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}
$n = 28;
if (hoanHao($n)) {
    echo "23. $n là số hoàn hảo."."<br>";
} else {
    echo "23. $n không là số hoàn hảo."."<br>";
}
?>

<?php
//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function timLelon($array) {
    $max = null;

    foreach ($array as $number) {
        if ($number % 2 != 0 && ($max === null || $number > $max)) {
            $max = $number;
        }
    }

    return $max;
}
$array = array(-2, 5, 8, 15, 6, 14, 21);
$maxle = timLelon($array);

if ($maxle !== null) {
    echo "24. Số lẻ lớn nhất trong mảng là: $maxle";
} else {
    echo "24. Không có số lẻ trong mảng.";
}
echo "<br>";
?>

<?php
//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function laNguyento($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$n = 19;
if (laNguyento($n)){
    echo "25. $n là số nguyên tố";
} else {
    echo "25. $n không là số nguyên tố";
}
echo "<br>";
?>

<?php
//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function soDuonglon($array) {
    $max = null;

    foreach ($array as $number) {
        if ($number > 0 && ($max === null || $number > $max)) {
            $max = $number;
        }
    }

    return $max;
}
$array = array(-2, 5, 8, -15, 6, 14, 21);
$max_duong = soDuonglon($array);

if ($max_duong !== null) {
    echo "26. Số dương lớn nhất trong mảng là: $max_duong";
} else {
    echo "26. Không có số dương trong mảng.";
}
echo "<br>";
?>

<?php
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function soAmlon($array) {
    $max = null;

    foreach ($array as $number) {
        if ($number < 0 && ($max === null || $number > $max)) {
            $max = $number;
        }
    }

    return $max;
}
$array = array(-2, 5, 8, -15, 6, 14, 21);
$max_am = soAmlon($array);

if ($max_am !== null) {
    echo "27. Số dương lớn nhất trong mảng là: $max_am";
} else {
    echo "27. Không có số dương trong mảng.";
}
echo "<br>";
?>

<?php
//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function tongLe ($n){
    $sum = 0;
    for ($i = 1; $i <= $n; $i+=2) {
        $sum += $i;
    }
    return $sum;
}
$n=30;
$sum= tongLe($n);
echo "28. Tổng các số lẻ từ 1 đến $n là: $sum"."<br>";
?>

<?php
//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function chinhPhuong($a) {
    $n=sqrt($a);
    $int = (int)$n;
    $is_int = ($n == $int);
    return $is_int;
}

function timChinhphuong($start, $end) {
    echo "29. Số chính phương trong khoảng $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
         if (chinhPhuong($i)) {
             echo $i. " ";
        }
    }
}
$start = 1;
$end = 30;
timChinhphuong($start, $end);
echo "<br>";
?>

<?php
//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function chuoiCon($string, $substring) {
    return strpos($string, $substring) !== false;
}
$origin = "123, 456";
$check = "123";

if (chuoiCon($origin, $check)) {
    echo "30. $check là chuỗi con của: $origin.";
} else {
    echo "30. $check không phải là chuỗi con của: $origin.";
}
?>

