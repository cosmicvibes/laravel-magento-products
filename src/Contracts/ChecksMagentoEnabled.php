<?php

namespace JustBetter\MagentoProducts\Contracts;

interface ChecksMagentoEnabled
{
    public function enabled(string $sku): bool;
}
