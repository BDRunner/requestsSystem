<?php


class AdminController
{
    public function actionIndex()
    {

        $corpList = array();
        $corpList = Corp::getCorpList();

        $typeList = array();
        $typeList = Type::getType();

        $getUser = array();
        $getUser = Admin::getInfo();

        //var_dump($getUser);

        require_once(ROOT . '/view/admin/index.php');
        return true;
    }

    public function actionDescription($id)
    {
        $corpList = array();
        $corpList = Corp::getCorpList();

        $typeList = array();
        $typeList = Type::getType();

        $getUser = array();
        $getUser = Admin::getInfo();

        if (isset($_POST['submit'])) {
            $id = $_POST['hid'];
            $get_id = Status::getUpdateStatus($id);
        }

        $description = Admin::getDescriptionById($id);
        require_once(ROOT . '/view/admin/description.php');
        return true;
    }
    public function actionUpdate()
    {
        if (isset($_POST['submit'])){
            $id = $_POST['hid'];
           $get_id = Status::getUpdateStatus($id);
            header("Location: /admin");
        }
    }
}