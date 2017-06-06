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

use BrianFaust\Unified\AbstractApi;

class User extends AbstractApi
{
    public function details($user)
    {
        $response = $this->unsigned("user:$user");

        return $this->getMapper()->raw(
            $response['user'], 'BrianFaust\EnvatoMarket\Models\User'
        );
    }

    public function itemsBySite($user)
    {
        return $this->unsigned("user-items-by-site:$user");
    }

    public function newFiles($user, $site)
    {
        $response = $this->unsigned('new-files-from-user:'.implode(',', func_get_args()));

        return $this->getMapper()->raw(
            $response['new-files-from-user'],
            'BrianFaust\EnvatoMarket\Models\File'
        );
    }

    public function badges($user)
    {
        $response = $this->unsigned("user-badges:$user");

        return $this->getMapper()->raw(
            $response['user-badges'],
            'BrianFaust\EnvatoMarket\Models\Badge'
        );
    }

    public function newFiles($site, $category)
    {
        $response = $this->unsigned('new-files:'.implode(',', func_get_args()));

        return $this->getMapper()->raw(
            $response['new-files'], 'BrianFaust\EnvatoMarket\Models\File'
        );
    }
}
