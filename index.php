
        <h1>Tài liệu học Lập Trình Web</h1>
        <?php
                
                

        // $Coin = null;
        // $Coin = rand(0,1);
        
        // if($Coin == 0){
        //     echo("Sấp");
        //     echo ('<br /> -------------------------------------- End Ex3. <br />');
        
        // }
        // else {
        //     echo("Ngửa");
        //     echo ('<br /> -------------------------------------- End Ex3. <br />');
        
        // }
        // Xác định sô phần tử của chuỗi 

        $phantu = 'Phan tu cua mot chuoi <br /> ';

        echo 'so phan tu chuoi la : ' .strlen($phantu);
        echo "<br />";
        // ma hoa chuoi
        echo md5($phantu);
        echo "<br />";
        echo sha1($phantu  );
        echo "<br />";
        // thay thế
        echo str_replace(' ', '-', $phantu);
        // lặp chuỗi
        echo str_repeat($phantu, 5);

        $myName = 'Tôi tên là TRƯƠNG CHIÊU Tài';
        echo strrev(mb_substr(strrev($myName), 0,3));
        echo '<br />';
        // cách 2  nếu không dùng mb_substr thì dấu huyền dc tính là 1 ký tự
        echo substr($myName,-3);
        // cách 3
        echo '<br />';
        function FunctionName($timchuoi, $n) {
            $lenChuoi = strlen($timchuoi);
            $arr = [];
            for ($i =0 ;$i<=$lenChuoi; $i++){
                if(count($arr) === $n){
                    array_shift($arr);
                }
                array_push($arr, $timchuoi[$i]);
                return implode('', $arr);
            }
        }
        $ketqua = FunctionName($myName,3);
        echo $ketqua;
        
        $a = 2; $b =3; $c = $a * $b;
        echo '<br>';
        echo  $a. '*'.$b.  '=' .$c;
        echo empty($a);
        echo isset($a);

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $ho = $_POST["fistname"];
            $hovaTen = $ho.$name;
            echo $hovaTen;
            
        }
