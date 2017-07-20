<?php

/*
 * This file is part of Envato Market PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\EnvatoMarket\API;

use BrianFaust\Http\HttpResponse;

class Stats extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function totalUsers(): HttpResponse
    {
        return $this->client->get('total-users.json');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function totalItems(): HttpResponse
    {
        return $this->client->get('total-items.json');
    }

    /**
     * @param string $site
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function numberOfFiles(string $site): HttpResponse
    {
        return $this->client->get("number-of-files:{$site}.json");
    }
}
