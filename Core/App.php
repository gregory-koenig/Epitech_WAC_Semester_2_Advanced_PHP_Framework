<?php

namespace Core;


class App
{
    static $db = null;

    /**
     * @return Database|null
     */
    public static function getDatabase()
    {
        if (!self::$db) {
            self::$db = new Database('root', '', 'piephp');
        }

        return self::$db;
    }
}