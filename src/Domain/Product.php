<?php


namespace PMS\Domain;


class Product
{
    private $name_en;
    private $name_fa;
    private $brand;
    private $sku;
    private $price;
    private $currency;
    private $stock;

    public function __construct(string $name_en, string $name_fa, string $brand, int $sku, int $price, string $currency, int $stock = 0)
    {
        $this->name_en = $name_en;
        $this->name_fa = $name_fa;
        $this->brand = $brand;
        $this->sku = $sku;
        $this->price = $price;
        $this->currency = $currency;
        $this->stock = $stock;
    }

    public function setNameEn(string $name_en)
    {
        $this->name_en = $name_en;
    }

    public function setNameFa(string $name_fa)
    {
        $this->name_fa = $name_fa;
    }

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }

    public function getNameEn(): string
    {
        return $this->name_en;
    }

    public function getNameFa(): string
    {
        return $this->name_fa;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getSku(): int
    {
        return $this->sku;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getStock(): int
    {
        return $this->stock;
    }


}