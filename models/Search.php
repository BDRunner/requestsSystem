<?php

class Search
{

    public static function getSearch($getData)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM request WHERE fio LIKE "%'.$getData.'%" AND status = 1 ';

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
//        var_dump($result);
        return $result->fetch();

    }
}
