<?php
// CartServiceInterface.php
namespace App\ServiceInterface;

interface CartServiceInterface
{
    public function addToCart($bookId, $quantity);
}