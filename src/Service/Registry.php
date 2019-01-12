<?php

declare(strict_types=1);

/*
 * This file is part of Exchanger.
 *
 * (c) Florian Voutzinos <florian@voutzinos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exchanger\Service;

/**
 * Holds services.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
final class Registry
{
    /**
     * Returns a map of all supports services.
     *
     * @return array
     */
    public static function getServices(): array
    {
        return [
            'central_bank_of_czech_republic' => CentralBankOfCzechRepublic::class,
            'central_bank_of_republic_turkey' => CentralBankOfRepublicTurkey::class,
            'cryptonator' => Cryptonator::class,
            'currency_converter' => CurrencyConverter::class,
            'currency_data_feed' => CurrencyDataFeed::class,
            'currency_layer' => CurrencyLayer::class,
            'european_central_bank' => EuropeanCentralBank::class,
            'fixer' => Fixer::class,
            'forge' => Forge::class,
            'national_bank_of_romania' => NationalBankOfRomania::class,
            'open_exchange_rates' => OpenExchangeRates::class,
            'array' => PhpArray::class,
            'russian_central_bank' => RussianCentralBank::class,
            'webservicex' => WebserviceX::class,
            'xignite' => Xignite::class,
        ];
    }
}
