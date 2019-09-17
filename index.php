<?php
require_once 'init.php';

use PMS\Domain\Company;
use PMS\Domain\Address;

try{
    $address = new Address('motahari');
    $supplier = new Company(-3, 'hamidreza', 'aphp.info@gmail.com', '02188704922', '09125052593', $address);
    $supplier2 = new Company(null, 'hamidreza', 'aphp.info@gmail.com', '02188704922', '09125052593', $address);
    echo (string)$supplier;
    echo (String)$supplier2;

    var_dump($supplier::getLastId());
}catch (Exception $e){
    echo $e->getMessage();
}

?>
