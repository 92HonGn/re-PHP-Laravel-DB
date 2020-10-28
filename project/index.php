<?php
    require_once 'header.php';
?>

<?php
    if ( isset( $_SESSION('sessionId') ) ){
        echo "你登入了";
    }else{
        echo "首頁";
    }
?>

<?php
    require_once 'footer.php';
?>
