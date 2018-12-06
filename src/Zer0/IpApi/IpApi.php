<?php

namespace Zer0\IpApi;


use Zer0\Config\Interfaces\ConfigInterface;

class IpApi
{
    /**
     * @var ConfigInterface
     */
    protected $config;

    /**
     * IpApi constructor.
     * @param ConfigInterface $config
     */
    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function lookup($ip)
    {
        return json_decode(file_get_contents('https://api.ipapi.com/api/' . rawurlencode($ip) . '?' . http_build_query([
            'access_key' => $this->config->access_key,
            ])));
    }
}