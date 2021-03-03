<?php

class User
{
    public static function getUserAll()
    {
        $db = Db::getConnection();
        $userList = array();

        $result = $db->query('SELECT id FROM user ');

        $i = 0;
        while ($row = $result->fetch()) {
            $userList[$i]['id'] = $row['id'];
            $i++;
        }
        return $userList;
    }
}