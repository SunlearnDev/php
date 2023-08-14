<?php 
    // http://localhost/learnPhp/baitapfile/ghefile.php
    if (isset($_POST['submit'])){
        if (isset($_POST['name']) && isset($_POST['content'])){
            $name = ($_POST['name']) . '.txt';
            $content = $_POST['content'] ;
            // viết file
            $file = fopen($name, 'w') ;
            fwrite($file, $content);
            fclose($file);
            echo 'Đã ghi thành công';
            
            // đọc file
            $file = fopen($name, 'r');
            $filecontent = fread($file, filesize($name));
            fclose($file);
            
            echo '
            <div style="width: 1024px; width: 100vh; margin: 0 auto; padding:  100px; background-color: brown; color:#ffff; text-align: center;">';
            echo '<pre>' . $filecontent . '</pre>';
            echo' </div>';
        }
    }
?>

<form action='ghefile.php' method="POST" >
    <label for="name">Tên File</label>
    <input type="text" name="name" value="" >
    <label for="content">ContentFile</label>
    <textarea  name="content" rows='4'></textarea>
    <input type="submit" name="submit" value="submit">
</form>
