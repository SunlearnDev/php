<?php
    // http://localhost/learnPhp/baitapfile/doctho.php
    $thocutho ='C:/xampp/htdocs/learnPhp/baitapfile/baitho.txt';
    $hs = fopen($thocutho, 'r') or die ("Can't open");
    $doctho = fread($hs,filesize($thocutho));
    fclose($hs);
    echo '
     <div style="width: 1024px; width: 100vh; margin: 0 auto; padding:  100px; background-color: brown; color:#ffff; text-align: center;">';
             echo '<pre>'.$doctho.'</pre>';
    echo' </div>';
?>