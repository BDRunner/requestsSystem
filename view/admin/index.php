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
    <title>Admin</title>
</head>
<body>
<a href="/logout" class="btn btn-warning" > Выход</a>
<table id="example" class="table table-striped table-bordered" style="width:100%" height="50px">
    <thead>
    <tr>
        <th width="150" align="center">Номер заявки</th>
        <th width="300" align="center">ФИО</th>
        <th width="220" align="center">Номер телефона</th>
        <th width="30" align="center">Корпус</th>
<!--        <th width="70">Кабинет</th>-->
        <th width="300">Тип проблемы</th>
<!--        <th>Описание проблемы</th>-->
        <th width="50">Время</th>
        <th width="80">Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($getUser as $userList): ?>
    <tr>
        <td width="150" align="center"><?= $userList['id']; ?></td>
        <td width="300"><?= $userList['fio']; ?></td>
        <td width="200" align="center"><?= $userList['phone']; ?></td>
        <td width="30" align="center"><?= $userList['corp_name']; ?></td>
<!--        <td width="70" align="center">--><?//= $userList['cabinet']; ?><!--</td>-->
        <td width="300"><?= $userList['name']; ?></td>
<!--        <td>--><?//= $userList['description']; ?><!--</td>-->
        <td width="50"><?= $userList['date']; ?></td>
        <td width="80"><a href="/description/<?php echo $userList['id']; ?>" class="btn btn-warning">  Просмотр</a></td>

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