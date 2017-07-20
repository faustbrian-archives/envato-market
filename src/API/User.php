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

class User extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function collections(): HttpResponse
    {
        return $this->client->get('user/collections');
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function createCollection(array $parameters): HttpResponse
    {
        return $this->client->post('user/collection_create', $parameters);
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function collection(int $id): HttpResponse
    {
        return $this->client->get('user/collection', compact('id'));
    }

    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function user(string $username): HttpResponse
    {
        return $this->client->get("user:{$username}.json");
    }

    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function badges(string $username): HttpResponse
    {
        return $this->client->get("user-badges:{$username}.json");
    }

    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function itemsBySite(string $username): HttpResponse
    {
        return $this->client->get("user-items-by-site:{$username}.json");
    }

    /**
     * @param string $username
     * @param string $site
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function newFilesBySite(string $username, string $site): HttpResponse
    {
        return $this->client->get("new-files-from-user:{$username},{$site}.json");
    }
}
