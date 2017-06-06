<?php

/*
 * This file is part of Rulerr Envato Market.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\EnvatoMarket\Api;

class Account extends AbstractApi
{
    public function info()
    {
        $response = $this->signed('account');

        return $this->getMapper()->raw(
            $response['account'], 'BrianFaust\EnvatoMarket\Models\Account'
        );
    }

    public function username()
    {
        $response = $this->signed('username');

        return $this->getMapper()->raw(
            $response['username'], 'BrianFaust\EnvatoMarket\Models\Account'
        );
    }

    public function email()
    {
        $response = $this->signed('email');

        return $this->getMapper()->raw(
            $response['email'], 'BrianFaust\EnvatoMarket\Models\Account'
        );
    }

    public function salesData()
    {
        return $this->signed('earnings-and-sales-by-month');
    }

    public function statement()
    {
        return $this->signed('statement');
    }

    public function recentSales()
    {
        return $this->signed('recent-sales');
    }

    public function download($code)
    {
        return $this->signed("download-purchase:$code");
    }

    public function verify($code)
    {
        return $this->signed("verify-purchase:$code");
    }
}
