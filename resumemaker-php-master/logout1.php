

<?php

session_start();

session_destroy();

echo "<script> window.open('login1.php', '_self') </script>";

?>