<?php

namespace Db;
class Mysql implements IDatabase
{
    function connect()
    {
        echo "connect";
    }

    function query()
    {
        echo "query";
    }

    function close()
    {
        echo "close";
    }
}