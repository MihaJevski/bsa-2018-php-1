<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Dogecoin implements Currency
{
    private $name = 'Dogecoin';
    private $logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
    private $dailyPrice = 0;

    public function __construct($price)
    {
        $this->dailyPrice = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return $this->logo;
    }
}