<?php


class SiteController
{

    public function actionIndex()
    {
        $corpList = array();
        $corpList = Corp::getCorpList();

        $typeList = array();
        $typeList = Type::getType();


        if (isset($_POST['submit'])) {
            $model = new Request();
            $model->fio = $_POST['fio'];
            $model->phone = $_POST['phone'];
            $model->corp_id = $_POST['corp_id'];
            $model->cabinet = $_POST['cabinet'];
            $model->type_id = $_POST['type_id'];
            $model->description = $_POST['description'];
            $result = Request::writeRequest($model);

            header("Location: /new");

        }
        require_once(ROOT . '/view/index.php');
        return true;
    }

    public function actionNew()
    {
        require_once(ROOT . '/view/success1.html');
        return true;
    }

}
/*public function actionRegister()
{
    $fio = false;
    $phone = false;
    $corp_id = false;
    $cabinet = false;
    $type_id = false;
    $description = false;
    $user_id = false;
    $status = false;

    if (isset($_POST['submit'])) {

        $fio = $_POST['name'];
        $phone = $_POST['phone'];
        $corp_id = $_POST['corp_id'];
        $cabinet = $_POST['cab_number'];
        $type_id = $_POST['type_id'];
        $description = $_POST['message'];
        $user_id = 1;
        $status = 1;

        $result = Request::writeRequest();
        require_once(ROOT . '/view/index.php');
        return true;
    }*/
