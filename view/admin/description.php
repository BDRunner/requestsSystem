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
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <tbody>
        <tr>
        <th>Номер заявки</th>
        <td width="70%"><?= $description['request_id'];?></td>
        </tr>
        <tr>
            <th>ФИО</th>
            <td width="70%"><?= $description['fio'];?></td>
        </tr>
        <tr>
            <th>Номер телефона</th>
            <td width="70%"><?= $description['phone'];?></td>
        </tr>
        <tr>
            <th>Номер кабинета</th>
            <td width="70%"><?= $description['corp_name'] .' '. $description['cabinet'];?> </td>
        </tr>
        <tr>
            <th>Время получения заявки</th>
            <td width="70%"><?= $description['date'];?></td>
        </tr>
        <tr>
            <th>Описание проблемы</th>
            <td width="70%"><?= $description['description'];?></td>
        </tr>
        <tr>
            <td width="80"><a href="/admin" class="btn btn-warning">  Вернуться</a></td>
            <form method="post"><td width="80" align="right"><input type="submit" name="submit" value="Выполнено" class="btn btn-danger"></td></form>
        </tr>

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
