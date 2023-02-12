<?php

namespace App\Models;

class Car extends \Core\Model
{
    protected static string|null $tableName = 'cars';

    public function getInfo(): string
    {
        return $this?->model . ' - ' . $this?->price;
    }
}