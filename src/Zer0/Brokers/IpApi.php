<?php

namespace Zer0\Brokers;

use Zer0\Config\Interfaces\ConfigInterface;

/**
 * Class CSRF_Token
 * @package Zer0\Brokers
 */
class IpApi extends Base
{

    /**
     * @param ConfigInterface $config
     * @return \HTMLPurifier
     */
    public function instantiate(ConfigInterface $config): \Zer0\IpApi\IpApi
    {
        return new \Zer0\IpApi\IpApi($config);
    }
}
