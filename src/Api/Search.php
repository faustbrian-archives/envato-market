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

use Illuminate\Support\Collection;

class Search extends AbstractApi
{
    public function items($site)
    {
        $response = $this->unsigned('search/item');

        return $this->getMapper()->raw(
            $response['items'],
            'BrianFaust\EnvatoMarket\Models\Category'
        );
    }

    public function comments($site)
    {
        $response = $this->unsigned('search/comment');

        return $this->getMapper()->raw(
            $response['comments'],
            'BrianFaust\EnvatoMarket\Models\Category'
        );
    }

    public function item($site)
    {
        $response = $this->unsigned("item:$item_id");

        return $this->getMapper()->raw(
            $response['item'],
            'BrianFaust\EnvatoMarket\Models\File'
        );
    }

    public function popular($site)
    {
        $response = $this->unsigned("popular:$site");

        return new Collection([
            'items_last_week' => $this->getMapper()->raw(
                $response['popular']['items_last_week'],
                'BrianFaust\EnvatoMarket\Models\File'
            ),

            'items_last_three_months' => $this->getMapper()->raw(
                $response['popular']['items_last_three_months'],
                'BrianFaust\EnvatoMarket\Models\File'
            ),

            'authors_last_month' => $this->getMapper()->raw(
                $response['popular']['authors_last_month'],
                'BrianFaust\EnvatoMarket\Models\File'
            ),
        ]);
    }

    public function categories($site)
    {
        $response = $this->unsigned("categories:$site");

        return $this->getMapper()->raw(
            $response['categories'],
            'BrianFaust\EnvatoMarket\Models\Category'
        );
    }

    public function itemPrices($item)
    {
        $response = $this->unsigned("item-prices:$item");

        return $this->getMapper()->raw(
            $response['item-prices'], 'BrianFaust\EnvatoMarket\Models\License'
        );
    }

    public function collection($item)
    {
        $response = $this->unsigned("collection:$item");

        return $this->getMapper()->raw(
            $response['collection'],
            'BrianFaust\EnvatoMarket\Models\File'
        );
    }

    public function newFiles($site)
    {
        $response = $this->unsigned("new-files:$site");

        return $this->getMapper()->raw(
            $response['random-new-files'],
            'BrianFaust\EnvatoMarket\Models\File'
        );
    }

    public function features($site)
    {
        $response = $this->unsigned("features:$site");

        return new Collection([
            'featured_file' => $this->getMapper()->raw(
                $response['features']['featured_file'],
                'BrianFaust\EnvatoMarket\Models\File'
            ),

            'featured_author' => $this->getMapper()->raw(
                $response['features']['featured_author'],
                'BrianFaust\EnvatoMarket\Models\Author'
            ),

            'free_file' => $this->getMapper()->raw(
                $response['features']['free_file'],
                'BrianFaust\EnvatoMarket\Models\File'
            ),
        ]);
    }

    public function randomNew($site)
    {
        $response = $this->unsigned("random-new-files:$site");

        return $this->getMapper()->raw(
            $response['random-new-files'],
            'BrianFaust\EnvatoMarket\Models\File'
        );
    }
}
