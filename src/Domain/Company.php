<?php


namespace PMS\Domain;

class Company extends Identity implements Supplier
{

    public function __construct($id, string $name,string $email,string $phone,string $mobile,Address $address)
    {
        parent::__construct($id, $name, $email, $phone, $mobile, $address);
    }


    public function listProducts(): array
    {
        // TODO: Implement listProducts() method.
    }

    public function disableProduct(): bool
    {
        // TODO: Implement disableProduct() method.
    }

    public function addProduct(Product $product): bool
    {
        // TODO: Implement addProduct() method.
    }

    public function updateProduct(Product $product): bool
    {
        // TODO: Implement updateProduct() method.
    }

    public function __toString()
    {
       return $this->id.' '.$this->name.' '.$this->email.' '.$this->phone.' '.$this->mobile.' '.$this->address;
    }

}