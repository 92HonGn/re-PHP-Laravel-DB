<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>表單</h1>
    <p>輸入</p>
    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="名字">
        <input type="text" name="email" placeholder="電子信箱">
        <input type="text" name="subject" placeholder="主題">
        <textarea name="message" id="" placeholder="輸入訊息"></textarea>
        <input type="submit" name="submit" value="送出">
    </form>
</body>
</html>