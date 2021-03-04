<?php
class Type
{
    public static function getType()
    {
        $db = Db::getConnection();

        $typeList = array();

        $result = $db->query('SELECT id, name FROM type');

        $i = 0;
        while ($row = $result->fetch()) {
            $typeList[$i]['id'] = $row['id'];
            $typeList[$i]['name'] = $row['name'];
            $i++;
        }
        return $typeList;
    }

}


