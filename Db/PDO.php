<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/8
 * Time: 13:15
 */
//header("Content-type:text/html;charset=utf-8");
namespace Db;
class PDO implements IDatabase
{
    function connect()
    {
        // TODO: Implement connect() method.
        echo"厉害了我的娃";
    }

    function query()
    {
        // TODO: Implement query() method.
        echo"厉害了我的弟";

    }

    function close()
    {
        // TODO: Implement close() method.
        echo"厉害了我的...";

    }

}