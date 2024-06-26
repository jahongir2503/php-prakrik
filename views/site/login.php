<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/styles.css">

    <title>Document</title>
</head>
<body>
<div class="adminPage">
    <div class="head">
        <p>ReadMore</p>
    </div>
    <div class="blok">
        <h3><?= $message ?? ''; ?></h3>

        <h3><?= app()->auth->user()->name ?? ''; ?></h3>
        <?php
         (!app()->auth::check())
        ?>
        <div class="main-content">
            <form method="post">
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <h1>Вход</h1>
                <label>Email address</label>
                <input type="text" name="login" placeholder="Enter email">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
                <div class="button">
                    <button>Войти</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

