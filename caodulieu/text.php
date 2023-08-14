<?php 
 // http://localhost/learnPhp/caodulieu/text.php
    $file = 'C:\xampp\htdocs\learnPhp\caodulieu\text2.csv';
    if(file_exists($file)){
        if($open=fopen($file, 'r')){
            fgetcsv($open);
            while($data = fgetcsv($open, 1000 , ',')){
            $arr[] = $data;
            
        }
        fclose($open);
        }else{
            echo "Error";}  

    }else{
        echo "Error file";
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex flex-wrap justify-center">
        <?php
        $rowCount = 0; // Biến đếm để kiểm soát số lượng thẻ card trong hàng
        
        foreach ($arr as $key) {
            // Kiểm tra nếu có đủ thông tin sản phẩm thì mới hiển thị
            if (count($key) === 5 && !empty($key[0]) && !empty($key[1]) && !empty($key[2]) && !empty($key[3]) && !empty($key[4])) {
                if ($rowCount === 5) {
                    echo '</div><div class="flex flex-wrap justify-center">';
                    $rowCount = 0;
                }
                
                echo '
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="'. $key[0] .'" alt="" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">'. $key[1] .'</h3>
                <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700">Đánh giá: '. $key[2] .'</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700 line-through mr-1">'. $key[3] .'</span>
                    <span class="text-red-500">'. $key[4] .'</span>
                </div>
            </div>
        </div>
    </div>';

                
                $rowCount++;
            }
        }
        ?>
    </div>
</body>