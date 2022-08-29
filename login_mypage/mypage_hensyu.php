<?php
mb_internal_encoding("utf8");

session_start();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
    <link rel="stylesheet" type="text/css" href='mypage_hensyu.css?v=2'>
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="logo">
        <div class="login"><a href="log_out.php">ログアウト</a></div>
    </header>
    <main>
        <form action="mypage_update.php" method="post">
            <div class="box">
                <h2>会員情報</h2>
                <div class="hello"></div>
                <?php echo "こんにちは！".$_SESSION['name']."さま" ?>
            </div>
            <div class="profile_pic">
                <img src="<?php echo $_SESSION['picture']; ?>">
            </div>
            <div class="basic_info">
            <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name">
                </p>

            <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail">
                </p>
            <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
                </p>
            </div>
            <div class="comments">
                <textarea name="comments" cols="88" rows="3"><?php echo $_SESSION['comments']; ?></textarea>
            </div>


            <div class="toroku">
                <input type="submit" class="submit_button" size="35" value="この内容に変更する">
            </div>
        </form>
    </main>

    <footer>
        ©️ 2018 IntewNous.inc. All rights reserved
    </footer>
</body>

</html>