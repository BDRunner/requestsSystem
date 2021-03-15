<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/template/CSS/style.css">
    <link rel="shortcut icon" href="/template/images/favicon.ico" type="image/x-icon">
    <title>Список заявок</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/admin" class="btn btn-info">Выйти из архива</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <br>
        <br>
        <div class="collapse navbar-collapse lol" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Сортировка
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" method="post">
                <input name="myInput" class="form-control mr-sm-2" type="search" placeholder="Кого искать?"
                       aria-label="Search">
                <button name="searchSubmit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>
</header>

<table>
    <tr>
        <td>

        </td>
    </tr>
</table>

<table name="myTable" id="example" class="table table-striped table-bordered" style="width:100%" height="50px">
    <thead>
    <tr>
        <th width="150" align="center">Номер заявки</th>
        <th width="300" align="center">ФИО</th>
        <th width="220" align="center">Номер телефона</th>
        <th width="30" align="center">Корпус</th>
        <!--        <th width="70">Кабинет</th>-->
        <th width="300">Тип проблемы</th>
        <!--        <th>Описание проблемы</th>-->
        <th width="100">Время</th>
        <th width="20">Действия</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($getArchive as $userList): ?>
            <tr>
                <td width="150" align="center"><?= $userList['id']; ?></td>
                <td width="300"><?= $userList['fio']; ?></td>
                <td width="200" align="center"><?= $userList['phone']; ?></td>
                <td width="30" align="center"><?= $userList['corp_name']; ?></td>
                <!--        <td width="70" align="center">--><? //= $userList['cabinet']; ?><!--</td>-->
                <td width="300"><?= $userList['name']; ?></td>
                <!--        <td>--><? //= $userList['description']; ?><!--</td>-->
                <td width="100"><?= $userList['date']; ?></td>
                <td width="20"><a href="/description/<?php echo $userList['id']; ?>" class="btn btn-warning"> Просмотр</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>

</table>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script>$(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner-border text-primary');
        $spinner.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    });</script>
</body>
</html>