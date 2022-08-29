<?php
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
             
            <p>メールアドレスまたはパスワードが間違っています。</p>

            <div class="mail">
                <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" name="mail">
            </div>
            <div class="password">
                <label>パスワード</label><br>
                <input type="password" class="formbox" size="40" name="password" id="password">
            </div>
           <div class="check">
            <input type="checkbox" id="checkbox" name="checkbox">ログイン状態を保持する
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