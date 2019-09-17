<?php
require_once 'init.php';

use PMS\Domain\Company;
use PMS\Domain\Address;
use PMS\Utils\Connection;

try{
    $db = Connection::getInstance()->connection();
}catch (Exception $e){
    echo $e->getMessage();
}

?>
