<?php
$arr = array();
$arrray= [];


array_push($arr,'1', '2');
print_r($arr);
echo '<br>';

// array_unshift() thêm 1 hoặc nhiều phần tử vào đầu mảng
array_unshift($arr, '4', '5');
print_r($arr);
echo '<br>';

// array_splice(array &$input, int $offset, int|null $length = null, array $replacement = [])
// hàm sử dụng cú pháp gán =;
// gán nhiều phần từ
array_splice($arr,2,0,array('tai','trương', 'chieu'));
print_r($arr);
echo '<br>';

//xoa 2 phần từ ở vị trí sô 1
array_splice($arr,1,2 );
print_r($arr);
echo '<br>';

// dùng toán tử gán = để thay đổi  bất khỳ vi trí;
$arr[0]="name";
$arr[3]="Tài";
echo '<br>';


/**array_pad thêm các phần tử vào 1 mảng đê dc kích thước mong muốn, 
array_pad(array $array, int $size, mixed $value);
*/
array_pad($arr,1, 10);
print_r($arr);
echo '<br>';
// duyệt mảng tuần từ 

if(!empty($arr)){
    for($i=0; $i<=count($arr); $i++){
        echo $arr[$i].'<br>';
    }
}