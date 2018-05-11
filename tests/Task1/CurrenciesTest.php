<?php

namespace CryptocurrencyTests\Task1;

use Cryptocurrency\Task1\Bitcoin;
use Cryptocurrency\Task1\Ethereum;
use Cryptocurrency\Task1\Dogecoin;
use PHPUnit\Framework\TestCase;

class CurrenciesTest extends TestCase
{
    /**
     * @dataProvider currencyClassesDataProvider
     */
    public function testCanCreateCurrency($currencyClass)
    {
        $this->assertInstanceOf($currencyClass, new $currencyClass(10));
    }

    /**
     * @dataProvider currencyClassesDataProvider
     */
    public function testSetsPriceOnCreate($currencyClass)
    {
        $currency = new $currencyClass(10);

        $this->assertEquals(10, $currency->getDailyPrice());
    }

    /**
     * @dataProvider currencyClassesDataProvider
     */
    public function testCurrencyName($currencyClass, $currencyName)
    {
        $currency = new $currencyClass(10);

        $this->assertEquals($currencyName, $currency->getName());
    }

    /**
     * @dataProvider currencyClassesDataProvider
     */
    public function testCurrencyLogoUrl($currencyClass, $currencyName, $currencyLogoUrl)
    {
        $currency = new $currencyClass(10);

        $this->assertEquals($currencyLogoUrl, $currency->getLogoUrl());
    }

    public function currencyClassesDataProvider()
    {
        return [
            [Bitcoin::class, 'Bitcoin', 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png'],
            [Ethereum::class, 'Ethereum', 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png'],
            [Dogecoin::class, 'Dogecoin', 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png']
        ];
    }
}