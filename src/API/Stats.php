<?php

declare(strict_types=1);

/*
 * This file is part of Envato Market PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\EnvatoMarket\API;

use Plients\Http\HttpResponse;

class Stats extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function totalUsers(): HttpResponse
    {
        return $this->client->get('total-users.json');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function totalItems(): HttpResponse
    {
        return $this->client->get('total-items.json');
    }

    /**
     * @param string $site
     *
     * @return \Plients\Http\HttpResponse
     */
    public function numberOfFiles(string $site): HttpResponse
    {
        return $this->client->get("number-of-files:{$site}.json");
    }
}
