<?php

class Request
{
    public static function writeRequest($model)
    {


        $db = Db::getConnection();

        $sql = 'INSERT INTO request (fio ,phone, corp_id, cabinet ,type_id, description, status) '
            . 'VALUES (:fio, :phone, :corp_id, :cabinet, :type_id, :description, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':fio', $model->fio, PDO::PARAM_STR);
        $result->bindParam(':phone', $model->phone, PDO::PARAM_INT);
        $result->bindParam(':corp_id', $model->corp_id, PDO::PARAM_INT);
        $result->bindParam(':cabinet', $model->cabinet, PDO::PARAM_INT);
        $result->bindParam(':type_id', $model->type_id, PDO::PARAM_INT);
        $result->bindParam(':description', $model->description, PDO::PARAM_STR);
        $result->bindParam(':status', $model->status, PDO::PARAM_INT);
        var_dump($model);
        die();
        return $result->execute();
    }

}
