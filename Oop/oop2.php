 <!-- <
    $cont= new mysqli("localhost", 'root', '','textconnetphp');

    if($cont-> connect_errno){
            die("kết nối thất bại". $cont-> connect_errno);
    }
    echo "kết nối thành công ";
 
    $seleter =  "INSERT INTO new_contact (ID,name, giotinh, tuoi,  email,city, contry) 
    VALUES ('1', 'HÀ', '12',  'HA@gmail','TAM KỲ', 'quangnam')";
    $resut = mysqli_query($cont, $seleter);
 if(!$resut){
    die("kết nối thất bại");
 }
    $row=mysql_fetch_row($resut);
    if($row){
        while($row = mysql_fetch_array($row)){

        }
    }
 ?>  -->

<?php
// $cont = new mysqli("localhost", 'root', '', 'textconnetphp');

// if ($cont->connect_errno) {
//     die("Kết nối thất bại: " . $cont->connect_error);
// }
// echo "Kết nối thành công";

// $seleter = "INSERT INTO new_contact (ID, name, gioitinh, tuoi, email, city, contry) 
// VALUES ('1', 'HÀ', 'Nam', '12', 'HA@gmail', 'TAM KỲ', 'quangnam')";

// $result = mysqli_query($cont, $seleter);

// if (!$result) {
//     die("Lỗi truy vấn: " . mysqli_error($cont));
// }

// // Không cần  sử dụng mysqli_query() thay cho mysql_fetch_row()
// // $row = mysql_fetch_row($result);

// // Nếu  muốn hiển thị dữ liệu, sử dụng vòng lặp và mysqli_fetch_assoc()
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo 'id: ' . $row['id'] . '<br>';
//         echo 'name: ' . $row['name'] . '<br>';
//         echo 'gioitinh: ' . $row['gioitinh'] . '<br>';
//         echo 'tuoi: ' . $row['tuoi'] . '<br>';
//         echo 'email: ' . $row['email'] . '<br>';
//         echo 'city    : ' . $row['city'] . '<br>';
//         echo 'contry: ' . $row['contry'] . '<br>';
//     }
// } else {
//     echo "Không có dữ liệu.";
// }

// // Đóng kết nối
// mysqli_close($cont);






    
?>
