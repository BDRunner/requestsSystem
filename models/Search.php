<?php

class Search
{

    public static function getSearch($getData)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM request WHERE fio LIKE "%'.$getData.'%" AND status = 1 ';

        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()) {
            $SearchList[$i]['id'] = $row['id'];
            $SearchList[$i]['fio'] = $row['fio'];
            $SearchList[$i]['phone'] = $row['phone'];
            $SearchList[$i]['cabinet'] = $row['cabinet'];
            $SearchList[$i]['corp_name'] = $row['corp_name'];
            $SearchList[$i]['description'] = $row['description'];
            $SearchList[$i]['date'] = $row['date'];
            $SearchList[$i]['status'] = $row['status'];

            $i++;
        }

        return $SearchList;

    }
}
