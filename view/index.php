<!DOCTYPE html>
<html>
<head>
    <title>Система подачи заявок КубГТУ</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <link
            href="https://fonts.googleapis.com/css?family=Lato:300,400,700"
            rel="stylesheet"
            type="text/css"
    />
    <link
            href="https://bootstraptema.ru/snippets/form/2017/recaptcha/custom.css"
            rel="stylesheet"
            type="text/css"
    />
    <!--<style type="text/css">
        body {
            background: url(/template/images/kubstu.png); /* Параметры фона */
        }
    </style>-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form role="form" method="post">
                <h1 class="text-center">Система подачи заявок КубГТУ</h1>
                <form
                        id="contact-form"
                        method="post"
                        action="index.php"
                        role="form"
                >
                    <div class="messages"></div>

                    <div class="controls">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="form_name">ФИО</label>
                                    <input
                                            id="form_name"
                                            type="text"
                                            name="fio"
                                            class="form-control"
                                            placeholder="Например: Иванов Иван Иванович"
                                            required="required"
                                            data-error="Firstname is required."
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                    <label for="form_phone">Номер телефона для связи</label>
                                    <input
                                            id="form_phone"
                                            type="tel"
                                            name="phone"
                                            class="form-control"
                                            required="required"
                                            placeholder="Формат записи: 89181234567"
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="corp_id">Выберете корпус</label>

                                <select name="corp_id" class="form-control">

                                        <option></option>
                                    <?php /** @var TYPE_NAME $corpList */
                                    foreach ($corpList as $corp): ?>
                                        <option value="<?= $corp['id'] ?>"><?= $corp['name'] ?></option>

                                    <?php endforeach; ?>


                                </select>
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                    <label for="cab_number">Номер кабинета</label>
                                    <input
                                            id="cab_number"
                                            type="text"
                                            name="cab_number"
                                            class="form-control"
                                            placeholder="Например: 251, 612б"
                                            required="required"
                                            data-error="Lastname is required."
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                        <!--<div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input
                                            id="form_email"
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="Please enter your email *"
                                            required="required"
                                            data-error="Valid email is required."
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>-->


                        <div class="form-group">
                            <label for="type_id">Тип проблемы</label>

                            <select name="type_id" class="form-control">

                                <option></option>
                                <?php /** @var TYPE_NAME $typeList */
                                foreach ($typeList as $type): ?>
                                    <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>

                                <?php endforeach; ?>


                            </select>
                        </div>
                        </div>


                        <div class="row">
                            <div class="col-md-13">
                                <div class="form-group">
                                    <label for="form_message">Максимально подробно опишите вашу проблему</label>
                                    <textarea
                                            id="form_message"
                                            name="description"
                                            class="form-control"
                                            placeholder="Опишите проблему"
                                            rows="7"
                                            required="required"
                                            data-error="Please,leave us a message."
                                    ></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-14">
                                <input
                                        type="submit"
                                        name="submit"
                                        class="btn btn-success btn-send"
                                        value="Отправить"
                                />
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        <!-- /.col-lg-8 col-lg-offset-2 -->
    </div>
    <!-- /.row-->
</div>
<!-- /.container-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://bootstraptema.ru/snippets/form/2017/recaptcha/validator.js"></script>
<script src="https://bootstraptema.ru/snippets/form/2017/recaptcha/contact.js"></script>
</body>
</html>
