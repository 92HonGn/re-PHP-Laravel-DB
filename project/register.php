<?php
require_once 'header.php';
?>

<div>
    <h1>註冊</h1>
    <p>已經有帳號 <a href="login.php">登入</a></p>

    <form action="register-inc.php" method="post">
        <input type="text" name="username" id="" placeholder="帳號">
        <input type="password" name="password" id="" placeholder="密碼">
        <input type="password" name="confirmPassword" id="" placeholder="確認密碼">
        <button type="submit">註冊</button>
    </form>
</div>

<?php
require_once 'footer.php';
?>
