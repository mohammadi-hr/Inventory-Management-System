<?php


namespace PMS\Utils;

use PMS\Exceptions\NotFoundException;

class Config
{

    private $data;
    private static $instance = null;

    private function __construct()
    {
        $json = file_get_contents(__DIR__ . "/../../config/app.json");
        $this->data = json_decode($json, true);
    }

    public static function getInstance(): Config
    {
        if (self::$instance == null) {
            self::$instance = new Config();
        } else {
            return self::$instance;
        }
    }

    public function get(string $key)
    {
        if (!isset($this->data[$key])) {
            throw new NotFoundException("this $key not found in configuratin file");
        }
    }
}