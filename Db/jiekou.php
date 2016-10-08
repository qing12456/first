<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/8
 * Time: 13:34
 */
//header("Content-type:text/html;charset=utf-8");

namespace Db;
interface IDatabase{
    function connect();
    function query();
    function close();
    
}