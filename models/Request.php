<?php

class Request
{
    public static function writeRequest($model)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO request(fio ,phone, corp_id, cabinet ,type_id, description) '
            . 'VALUES (:fio, :phone, :corp_id, :cabinet, :type_id, :description)';

        $result = $db->prepare($sql);
        $result->bindParam(':fio', $model->fio, PDO::PARAM_STR);
        $result->bindParam(':phone', $model->phone, PDO::PARAM_STR);
        $result->bindParam(':corp_id', $model->corp_id, PDO::PARAM_INT);
        $result->bindParam(':cabinet', $model->cabinet, PDO::PARAM_INT);
        $result->bindParam(':type_id', $model->type_id, PDO::PARAM_INT);
        $result->bindParam(':description', $model->description, PDO::PARAM_STR);

        return $result->execute();
    }



}
