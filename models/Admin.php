<?php

class Admin
{
    public static function getInfo()
    {
        $db = Db::getConnection();
        $userList = array();
        //SELECT request.id, request.fio, request.phone, request.cabinet, request.description, request.date, request.status, type.name, corp.name
        $sql = 'SELECT request.id, request.fio, request.phone, request.cabinet, request.description, request.date, request.status, type.name, corp.name as corp_name FROM request '
        . 'INNER join type on type.id = request.type_id '
        . 'INNER join corp on corp.id = request.corp_id '
        . 'WHERE request.status=1 '
        . 'ORDER BY request.id DESC';
        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()) {
            $userList[$i]['id'] = $row['id'];
            $userList[$i]['fio'] = $row['fio'];
            $userList[$i]['phone'] = $row['phone'];
            $userList[$i]['name'] = $row['name'];
            $userList[$i]['cabinet'] = $row['cabinet'];
            $userList[$i]['corp_name'] = $row['corp_name'];
            $userList[$i]['description'] = $row['description'];
            $userList[$i]['date'] = $row['date'];
            $userList[$i]['status'] = $row['status'];

            $i++;
        }

        return $userList;
    }

    public static function getDescriptionById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();


            $result = $db->query('SELECT request.id as request_id, request.fio, request.phone, request.cabinet, request.description, request.date, request.status, type.name, corp.name as corp_name FROM request '
                . 'INNER join type on type.id = request.type_id '
                . 'INNER join corp on corp.id = request.corp_id '
                . 'WHERE request.id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetch();
        }
    }

}

?>
