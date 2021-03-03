<?php


class Requests
{
    public function actionIndex()
    {
        $db = Db::getConnection();
        var_dump($db);
        die('test');
        return $db;
    }
}