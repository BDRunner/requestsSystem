<?php

class Search
{

    public static function getSearch($getData)
    {
        $db = Db::getConnection();
        $sql = 'SELECT request.id, request.fio, request.phone, request.cabinet, request.description, request.date, request.status, type.name, corp.name as corp_name FROM request '
            . 'INNER join type on type.id = request.type_id '
            . 'INNER join corp on corp.id = request.corp_id '
            . 'WHERE fio LIKE "%'.$getData.'%" ORDER BY id DESC';

        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()) {
            $searchList[$i]['id'] = $row['id'];
            $searchList[$i]['fio'] = $row['fio'];
            $searchList[$i]['phone'] = $row['phone'];
            $searchList[$i]['cabinet'] = $row['cabinet'];
            $searchList[$i]['corp_name'] = $row['corp_name'];
            $searchList[$i]['name'] = $row['name'];
            $searchList[$i]['date'] = $row['date'];
            $searchList[$i]['status'] = $row['status'];

            $i++;
        }

        return $searchList;

    }
}
