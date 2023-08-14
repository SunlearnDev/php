<?php
    setcookie("name", "XUANTHULAB", time() + 600, "/");
    echo "Set cookie";
?>
<?php
  if( isset($_COOKIE["name"]))
  {
      echo "Welcome " . $_COOKIE["name"];
  }
  else
  {
      echo "Không có tên";
  }
  setcookie( "name", "", time()- 60, "/","", 0);
?>
