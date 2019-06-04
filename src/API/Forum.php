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

class Forum extends AbstractAPI
{
    /**
     * @param string $site
     *
     * @return \Plients\Http\HttpResponse
     */
    public function activeThreads(string $site): HttpResponse
    {
        return $this->client->get("active-threads:{$site}.json");
    }

    /**
     * @param string $username
     *
     * @return \Plients\Http\HttpResponse
     */
    public function forumPosts(string $username): HttpResponse
    {
        return $this->client->get("forum_posts:{$username}.json");
    }

    /**
     * @param string $thread_id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function threadStatus(string $thread_id): HttpResponse
    {
        return $this->client->get("thread-status:{$thread_id}.json");
    }
}
