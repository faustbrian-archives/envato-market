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

class Account extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function sales(array $parameters = []): HttpResponse
    {
        return $this->client->get('author/sales', $parameters);
    }

    /**
     * @param string $code
     *
     * @return \Plients\Http\HttpResponse
     */
    public function sale(string $code): HttpResponse
    {
        return $this->client->get('author/sale', compact('code'));
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function listPurchases(array $parameters = []): HttpResponse
    {
        return $this->client->get('buyer/list-purchases', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function purchases(array $parameters = []): HttpResponse
    {
        return $this->client->get('buyer/purchases', $parameters);
    }

    /**
     * @param string $code
     *
     * @return \Plients\Http\HttpResponse
     */
    public function purchase(string $code): HttpResponse
    {
        return $this->client->get('buyer/purchase', compact('code'));
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function account(): HttpResponse
    {
        return $this->client->get('private/user/account.json');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function username(): HttpResponse
    {
        return $this->client->get('private/user/username.json');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function email(): HttpResponse
    {
        return $this->client->get('private/user/email.json');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function salesByMonth(): HttpResponse
    {
        return $this->client->get('private/user/earnings-and-sales-by-month.json');
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function statement(array $parameters = []): HttpResponse
    {
        return $this->client->get('user/statement', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function download(array $parameters = []): HttpResponse
    {
        return $this->client->get('buyer/download', $parameters);
    }
}
