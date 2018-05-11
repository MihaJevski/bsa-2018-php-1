<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Bitcoin implements Currency
{
    private $name = 'Bitcoin';
    private $logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
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