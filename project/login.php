<?php
require_once 'header.php';
?>

<div>
    <h1>登入</h1>
    <p>沒有帳號 <a href="register.php">註冊</a></p>

    <form action="login-inc.php" method="post">
        <input type="text" name="username" id="" placeholder="帳號">
        <input type="password" name="password" id="" placeholder="密碼">
        <button type="submit" name="submit">登入</button>
    </form>
</div>

<?php
require_once 'footer.php';
?>
