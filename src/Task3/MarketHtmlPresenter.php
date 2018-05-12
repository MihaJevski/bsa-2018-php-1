<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $string = '';
        foreach ($market->getCurrencies() as $coin){
            $string .= '<img src="' . $coin->getLogoUrl() . '"><br>';
            $string .= $coin->getName() . ': ';
            $string .= $coin->getDailyPrice() . '<br>';

        }
        return $string;
        // @todo
    }
}