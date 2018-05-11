<?php

namespace CryptocurrencyTests\Task1;

use PHPUnit\Framework\TestCase;
use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task1\Currency;;

class CoinMarketTest extends TestCase
{
    /**
     * @var CoinMarket
     */
    private $coinMarket;

    /**
     * @var Currency
     */
    private $currency1;

    /**
     * @var Currency
     */
    private $currency2;

    public function testMaxCoinPrice()
    {
        $this->coinMarket->addCurrency($this->currency1);
        $this->coinMarket->addCurrency($this->currency2);

        $this->assertEquals(2, $this->coinMarket->maxPrice());
    }

    public function testAddCurrency()
    {
        $this->coinMarket->addCurrency($this->currency1);
        $this->coinMarket->addCurrency($this->currency2);

        $this->assertEquals($this->currency1, $this->coinMarket->getCurrencies()[0]);
        $this->assertEquals($this->currency2, $this->coinMarket->getCurrencies()[1]);
    }

    protected function setUp()
    {
        parent::setUp();

        $this->coinMarket = new CoinMarket();

        $this->currency1 = $this->createMock(Currency::class);
        $this->currency1->method('getDailyPrice')->willReturn(1);

        $this->currency2 = $this->createMock(Currency::class);
        $this->currency2->method('getDailyPrice')->willReturn(2);
    }
}