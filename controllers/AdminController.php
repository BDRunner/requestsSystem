<?php


class AdminController
{
    public function actionIndex()
    {
        require_once(ROOT . '/view/admin/index.php');
        return true;
    }
}