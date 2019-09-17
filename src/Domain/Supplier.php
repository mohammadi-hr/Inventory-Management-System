<?php


namespace PMS\Domain;


interface Supplier
{
    public function listProducts(): array;

    public function disableProduct(): bool;

    public function addProduct(Product $product): bool;

    public function updateProduct(Product $product): bool;
}