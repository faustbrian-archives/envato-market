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

class Stats extends AbstractApi
{
    public function totalUsers()
    {
        return $this->unsigned('total-users');
    }

    public function totalItems()
    {
        return $this->unsigned('total-items');
    }

    public function count($site)
    {
        $response = $this->unsigned("number-of-files:$site");

        return $this->getMapper()->raw(
            $response['number-of-files'], 'BrianFaust\EnvatoMarket\Models\FileCount'
        );
    }

    public function details($item)
    {
        $response = $this->unsigned("item:$item");

        return $this->getMapper()->raw(
            $response['item'], 'BrianFaust\EnvatoMarket\Models\File'
        );
    }
}
