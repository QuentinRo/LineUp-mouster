<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 26.09.18
 * Time: 11:03
 */
class Database {
    static function dbConnection()
    {
        $host = 'localhost';
        $db   = 'lineup';
        $user = 'root';
        $pass = 'root';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function getAllScenes(){
        $pdo = self::dbConnection();

        $stmt = $pdo->prepare('SELECT id, Name, Localisation FROM Scenes');

        $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->execute();

        $scenes = $stmt;
        return $scenes;
    }
}


?>