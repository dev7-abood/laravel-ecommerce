<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;


class CurrencyConverter
{

    protected $api = 'https://free.currconv.com/api/v7/';

    public $currency = [];

    public function __construct()
    {
        if (auth()->check()) {
            if (auth()->user()->currency_type == 'ils') {
                return $this->currency = $this->usdToIls();
            } else {
                return $this->currency = $this->defaultCurrency();
            }
        } elseif (Cookie::get('currency_type') == 'ils') {
            return $this->currency = $this->usdToIls();
        }
        return $this->currency = $this->defaultCurrency();
    }

    public function usdToIls(): array
    {
        try {
            $USDtoILS = Http::get($this->api.'convert?q=USD_ILS&compact=ultra&apiKey=' . env('CURRCONV_KEY'))['USD_ILS'];
            return [
                'value' => $USDtoILS,
                'currency_icon' => '₪',
                'currency_type' => 'ILS'
            ];
        } catch (\ErrorException $errorException) {
            return $this->defaultCurrency();
        }
    }

    public function defaultCurrency(): array
    {
        return [
            'value' => (float) 1.00,
            'currency_icon' => '$',
            'currency_type' => 'USD'
        ];
    }
}
