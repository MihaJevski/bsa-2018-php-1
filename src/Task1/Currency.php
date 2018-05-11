<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

interface Currency
{
    public function getName(): string;

    public function getDailyPrice(): float;

    public function getLogoUrl(): string;
}