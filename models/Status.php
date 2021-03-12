<?php

class Status
{
    public static function getUpdateStatus($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $sql = 'UPDATE request SET status = 2 WHERE id = :id ';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }
    }
}