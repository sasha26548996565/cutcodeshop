<?php

declare(strict_types=1);

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class CartDTO extends DataTransferObject
{
    public int $quantity;
    public array $optionValueIds;
}
