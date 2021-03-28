<?php


namespace App\Services;


class Mpesa
{
    private $client;

    public function __construct()
    {
        $client = new \Safaricom\Mpesa\Mpesa();

        $this->client = $client;
    }

    public function __call($method, $args)
    {
        if (! method_exists($this->client, $method)) {
            throw new \Exception("Call to undefined method '{$method}'");
        }

        return call_user_func_array([$this->client, $method], $args);
    }

    public function getAccessToken()
    {
        if (config('services.mpesa.environment') == 'sandbox') {
            return $this->client::generateSandBoxToken();
        } else {
            return $this->client::generateLiveToken();
        }
    }
}
