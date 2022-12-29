<?php

namespace contact_manager;

use PDOException;

class DB
{
    static function get_connection()
    {
        define("URL", DBMS . ":host=" . HOST . "; dbname=" . DBASE);
        return new \PDO(URL, USER, PASSWORD);
    }

    static function select(string $sql, array $params = [])
    {
        try {
            $con = DB::get_connection();
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $stmt = $con->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $con = null;
    }

    static function insert(string $sql, array $params = [])
    {
        $con = DB::get_connection();
        $stmt = $con->prepare($sql);
        $ret_val = $stmt->execute($params);
        return $ret_val;
    }

    static function update(string $sql, array $params = [])
    {
        $con = DB::get_connection();
        $stmt = $con->prepare($sql);
        $ret_val = $stmt->execute($params);
        return $ret_val;
    }

    static function delete(string $sql, array $params = [])
    {
        $con = DB::get_connection();
        $stmt = $con->prepare($sql);
        $ret_val = $stmt->execute($params);
        return $ret_val;
    }
}