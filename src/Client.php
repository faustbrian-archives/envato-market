<?php

declare(strict_types=1);

/*
 * This file is part of Envato Market PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\EnvatoMarket;

use BrianFaust\Http\Http;

class Client
{
    /**
     * Create a new Envato Market Client instance.
     *
     * @param array $credentials
     */
    public function __construct(array $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\EnvatoMarket\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $handler = new Handlers\OAuth2($this->credentials);

        $client = Http::withBaseUri('https://api.envato.com/v1/market/')->withHandler($handler->create());

        $class = "BrianFaust\\EnvatoMarket\\API\\{$name}";

        return new $class($client);
    }
}
