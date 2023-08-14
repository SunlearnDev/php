<?php
   
      
    $traicay =['táo', 'đào', 'nho', 'mận', 'cam', 'quýt', 'Bưởi'];
    
    if(in_array('táo', $traicay)){
        echo "<br>  có";
    }
    /*
    *Hàm array_search() tìm giá trị value  trả về khóa index nếu tìm thấy,
    * Không tìm thấy trả về fasle.
    *Cú pháp array_search($needle, $haystack, $strict = false)
        *$needle là giá trị cần tìm kiếm trong mảng $haystack.
        * $haystack là mảng mà ta muốn tìm kiếm.
        * $strict là một tham số tùy chọn, nếu được đặt là true, hàm sẽ so sánh cả giá trị và kiểu dữ liệu.
    */
    $key = array_search('nho',$traicay,);
    if($key !== false){

        echo  '<br> Từ khóa nho ở trị trí thứ'.$key;
    }

    /*
        *Hàm array_key_exists();
        *Kiểm tra  key đó có hay không
        *Cú pháp array_key_exists($key, $array);
        * $key là khóa mà bạn muốn kiểm tra tồn tại trong mảng $array.
        * $array là mảng mà bạn muốn kiểm tra.

    */
    $key = array_key_exists(3,$traicay);
    if($key !== false){
        echo '<br> vị trí số 3 có trong mảng ';
    }
 
    