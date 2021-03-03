<?php


class SiteController
{

    public function actionIndex()
    {
        $corpList = array();
        $corpList = Corp::getCorpList();

        require_once ROOT . '/view/index.php';
        return $corpList;
    }
}