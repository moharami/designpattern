<?php
include_once 'BitCoinPriceAdapter.php';

class CoinmarketcapAdapter implements BitcoinPriceInterface
{

    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function fetchPrice()
    {
        print_r($this->makeUrl());
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->makeUrl(),
            CURLOPT_HTTPHEADER => [
                'Accepts: application/json',
                'X-CMC_PRO_API_KEY: ' . $this->apiKey
            ],
            CURLOPT_RETURNTRANSFER => 1
        ]);

        $response = curl_exec($curl);
        $resultObj = json_decode($response);
        curl_close($curl);

        if ($resultObj->status->error_code === 0) {
            return $resultObj->data[0]->quote->USD->price;
        }

        return null;
    }

    private function makeUrl()
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $parameters = [
            'start' => '1',
            'limit' => '1',
            'convert' => 'USD'
        ];

        $qs = http_build_query($parameters);
        return "{$url}?{$qs}";
    }
}