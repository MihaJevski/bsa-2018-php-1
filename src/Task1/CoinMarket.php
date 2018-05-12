<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $currencies = [];

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        usort($this->currencies, function($a, $b) {
            return $a->getDailyPrice() <=> $b->getDailyPrice();
        });
        return array_pop($this->currencies)->getDailyPrice();
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}