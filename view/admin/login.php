<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/template/images/favicon.ico" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title></title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->
<style >
    body{
        background-image: url('/template/images/kubstu.png');
        background-size: 100%;

    }
    li {
        color: white; /* Цвет маркеров */
    }
    html, body {
        height: 100%;
        margin: 0;
    }
    .wrapper {
        min-height: 100%;
        /* Равно высоте подвала, */
        /* но с учётом margin-bottom у последнего дочернего элемента */
        margin-bottom: -50px;
    }
    .footer,
    .push {
        height: 50px;
    }
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 text-center mb-5">
                <img src="/template/images/1.png">
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <!-- form card login -->
                    <div class="card rounded-0" id="login-form">
                        <div class="card-header">
                            <h3 class="mb-0">Аутентификация</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Логин</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="name" id="uname1" required">
                                </div>
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input type="password" name="password" class="form-control form-control-lg rounded-0" id="pwd1" required">
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Войти</button>
                            </form>
                        </div>
                    </div>
</body>
</html>
