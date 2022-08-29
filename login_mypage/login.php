<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページログイン</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="logo">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <form action="mypage.php" method="post">
        <div class="form_contents">
            <div class="mail">
                <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" name="mail" 
                value="<?php setcookie('mail',$_POST['mail'],time()+60*60*24*7);
                echo $_COOKIE['mail'];
                ?>">
            </div>
            <div class="password">
                <label>パスワード</label><br>
                <input type="password" class="formbox" size="40" name="password" 
                value="<?php setcookie('mail',$_POST['password'],time()+60*60*24*7);
                echo $_COOKIE['password'];
                ?>">
            </div>
           <div class="check">
            <label><input type="checkbox" class="formbox" name="login_keep" size="40" value="login_keep"
            <?php
            if(isset($_SESSION['id'])){
                echo"checked='checked'";
            }
            ?>>ログイン状態を保持する</label>
            </div>
            <br>
            
            <div class="toroku">
                <input type="submit" class="submit_button" size="35" value="ログイン">
            </div>
               
        </div>
    </form>
    <footer>
        ©️ 2018 IntewNous.inc. All rights reserved
    </footer>

</body>

</html>