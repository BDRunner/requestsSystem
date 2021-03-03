<?php

class Corp
{
    public static function getCorpList()
    {
        $db = Db::getConnection();
        $userList = array();

        $result = $db->query('SELECT id, name FROM corp ');

        $i = 0;
        while ($row = $result->fetch()) {
            $userList[$i]['id'] = $row['id'];
            $userList[$i]['name'] = $row['name'];
            $i++;
        }
        return $userList;
    }

}

