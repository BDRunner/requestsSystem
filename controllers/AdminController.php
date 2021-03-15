<?php


class AdminController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $corpList = array();
        $corpList = Corp::getCorpList();

        $typeList = array();
        $typeList = Type::getType();

        $getUser = array();
        $getUser = Admin::getInfo();

        if (isset($_POST['searchSubmit'])) {
            $getSearch = array();
            $getSearch = Search::getSearch($_POST['myInput']);
        }


        require_once(ROOT . '/view/admin/index.php');
        return true;
    }

    public function actionDescription($id)
    {
        self::checkAdmin();

        $corpList = array();
        $corpList = Corp::getCorpList();

        $typeList = array();
        $typeList = Type::getType();

        $getUser = array();
        $getUser = Admin::getInfo();

        if (isset($_POST['submit'])) {
            $get_id = Status::getUpdateStatus($id);
            header("Location: /admin");
        }

        $description = Admin::getDescriptionById($id);
        require_once(ROOT . '/view/admin/description.php');
        return true;
    }

    public function actionLogin()
    {
        // Переменные для формы

        $name = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы

            $name = $_POST['name'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkName($name)) {
                $errors[] = 'Неправильный логин';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $userId = User::checkUserData($name, $password);
            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId);
                header('Location: /admin');
            }
        }

        // Подключаем вид
        require_once(ROOT . '/view/admin/login.php');
        return true;
    }

    public function actionLogout()
    {
//        session_start();

        unset($_SESSION['user']);
        header('Location: /login');
    }

    public function actionArchive()
    {
        self::checkAdmin();

        $corpList = Corp::getCorpList();

        $typeList = Type::getType();

        $getUser = Admin::getInfo();

        $getArchive = Admin::getArchiveInfo();

        require_once(ROOT . '/view/admin/archive.php');
        return true;
    }

}