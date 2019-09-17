<?php


namespace PMS\Utils;

use Exception;

trait UniqueId
{
    private static $lastId = 0;
    protected $id;

    protected function setId($id)
    {
        if ($id < 0):
            throw new Exception('خطا در شناسه اختصاص داده شده به هویت جدید !');
        endif;
        if (empty($id) || $id <= self::$lastId) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            self::$lastId = $id;
        }

    }

    public static function getLastId(): int
    {
        return self::$lastId;
    }

    public function getId(): int
    {
        return $this->id;
    }


}