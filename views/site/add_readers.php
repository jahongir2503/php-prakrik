<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/add_readers.css">

    <title>Document</title>
</head>
<body>
<div class="adminPage">
    <div class="head">
        <p>ReadMore</p>
    </div>
    <div class="blok">
        <div class="readerInfo">
            <a class="backButton" href="javascript:history.go(-1)">Назад</a>
        </div>
        <div class="main-content">
            <h3><?= $message ?? ''; ?></h3>
            <form method="post">
                <h1>Добавить Читателя</h1>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <input type="hidden" name="number_library_card" value="<?= $libraryCardNumber ?>">
                <label for="">Фамилия</label>
                <input type="text" name="surname" placeholder="Фамилия" >
                <label for="">Имя</label>
                <input type="text" name="name" placeholder="Имя">
                <label for="">Отчество</label>
                <input type="text" name="patronymic" placeholder="Отчество">
                <label for="">Адрес</label>
                <input type="text" name="address" placeholder="Адрес">
                <label for="">Номер телефона</label>
                <input type="number" name="phone_number" placeholder="Номер телефона">
                <div class="button">
                    <button>Добавить Читателя</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>