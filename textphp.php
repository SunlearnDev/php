<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['btn'])){
        $numBer1 = $_POST['numberone'];
        $numBer2 = $_POST['numbertwo'];
        $number3 = ($numBer1 + $numBer2)/2;
        $add = '';
        if($number3 < 5 ){
            $add =  '<br>xuống <br>';
        }else{
            $add =  '<br>len <br>';
        }
    }
}
?>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" placeholder="Nhập số" class="number" name="numberone"> <br>
        <input type="text" placeholder="Nhập số" class="number" name="numbertwo"> <br>
        <?php if (isset($number3)) { ?>
        <input type="text" placeholder="Kết quả" class="number" value="<?php echo $number3; ?>" disabled>
        <?php } ?>
        <?php echo $add?>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>
