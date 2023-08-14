    <?php
    $filename = 'C:/xampp/htdocs/learnPhp/baitapfile/file.txt';
    // http://localhost/learnPhp/baitapfile/checkfile.php
    $hs  = fopen('file1.txt', 'w') or die("Can't open file.txt");

    $text = "dep vai ";
    fwrite($hs,$text)  or die("Can't write;");
    fclose($hs);
    echo $hs;

    ?>