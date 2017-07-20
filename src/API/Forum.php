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

class Forum extends AbstractAPI
{
    /**
     * @param string $site
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function activeThreads(string $site): HttpResponse
    {
        return $this->client->get("active-threads:{$site}.json");
    }

    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function forumPosts(string $username): HttpResponse
    {
        return $this->client->get("forum_posts:{$username}.json");
    }

    /**
     * @param string $thread_id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function threadStatus(string $thread_id): HttpResponse
    {
        return $this->client->get("thread-status:{$thread_id}.json");
    }
}
