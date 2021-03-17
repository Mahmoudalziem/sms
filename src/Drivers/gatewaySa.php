<?php

namespace Azima\Sms\Drivers;

use Azima\Sms\Contracts\Driver;
use Illuminate\Support\Facades\Http;

class gatewaySa extends Driver
{
    protected array $settings;

    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public function send()
    {

        $response = collect();

        foreach ($this->recipients as $recipient) {

            $result = Http::asForm()->post(data_get($this->settings, 'url'), $this->payload($recipient));

            $response->put($recipient, $result);
        }

        return (count($this->recipients) == 1) ? $response->first() : $response;
    }

    protected function payload($recipient): array
    {
        return [
            'user' => data_get($this->settings, 'user'),
            'passwor' => data_get($this->settings, 'password'),
            'msisdn' => $recipient,
            'sid' => data_get($this->settings, 'sid'),
            'msg' => $this->body,
            'fl' => data_get($this->settings, 'fl'),
        ];
    }
}
