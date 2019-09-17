<?php


namespace PMS\Utils;

use PDO;
use PMS\Exceptions\NoDataBaseConnection;

class Connection
{
    private $db_connection;
    private static $instance;

    private function __construct()
    {
        $dbConfig = Config::getInstance()->get('db');
        $db = new PDO(
            $dbConfig['database'] . ':host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'],
            $dbConfig['username'],
            $dbConfig['password']
        );

        $this->db_connection = $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Connection();
        }
        return self::$instance;
    }

    public function connection(){
        if ($this->connection()){
            throw new NoDataBaseConnection('database connection initialization failed');
        }
        else{
            return $this->connection();
        }
    }
}