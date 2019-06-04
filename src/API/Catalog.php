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

class Catalog extends AbstractAPI
{
    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function collection(int $id): HttpResponse
    {
        return $this->client->get('catalog/collection', compact('id'));
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function item(int $id): HttpResponse
    {
        return $this->client->get('catalog/item', compact('id'));
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function searchItems(array $parameters): HttpResponse
    {
        return $this->client->get('search/item', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function searchComments(array $parameters): HttpResponse
    {
        return $this->client->get('search/comment', $parameters);
    }

    /**
     * @param string $site
     *
     * @return \Plients\Http\HttpResponse
     */
    public function popular(string $site): HttpResponse
    {
        return $this->client->get("popular:{$site}.json");
    }

    /**
     * @param string $site
     *
     * @return \Plients\Http\HttpResponse
     */
    public function categories(string $site): HttpResponse
    {
        return $this->client->get("categories:{$site}.json");
    }

    /**
     * @param int $item_id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function itemPrices(int $item_id): HttpResponse
    {
        return $this->client->get("item-prices:{$item_id}.json");
    }

    /**
     * @param string $site
     * @param string $category
     *
     * @return \Plients\Http\HttpResponse
     */
    public function newFiles(string $site, string $category): HttpResponse
    {
        return $this->client->get("new-files:{$site},{$category}.json");
    }

    /**
     * @param string $site
     *
     * @return \Plients\Http\HttpResponse
     */
    public function features(string $site): HttpResponse
    {
        return $this->client->get("features:{$site}.json");
    }

    /**
     * @param string $site
     *
     * @return \Plients\Http\HttpResponse
     */
    public function randomNewFiles(string $site): HttpResponse
    {
        return $this->client->get("random-new-files:{$site}.json");
    }
}
