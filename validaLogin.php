<?php
if (!isset($_SESSION["login"])) {
    echo "<script>";
    echo "window.location.href = '../view/index.php';";
    echo "</script> ";
}
?>
