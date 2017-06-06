<?php

/*
 * This file is part of Envato Market PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\EnvatoMarket\Api;

class Forums extends AbstractApi
{
    public function activeThreads($site)
    {
        $response = $this->unsigned("active-threads:$site");

        return $this->getMapper()->raw(
            $response['active-threads'], 'BrianFaust\EnvatoMarket\Models\ForumThread'
        );
    }

    public function posts($username)
    {
        $response = $this->unsigned("forum_posts:$username");

        return $this->getMapper()->raw(
            $response['forum_posts'], 'BrianFaust\EnvatoMarket\Models\ForumPost'
        );
    }

    public function threadStatus($item)
    {
        $response = $this->unsigned("thread-status:$item");

        return $this->getMapper()->raw(
            $response['thread-status'], 'BrianFaust\EnvatoMarket\Models\ForumThread'
        );
    }
}
