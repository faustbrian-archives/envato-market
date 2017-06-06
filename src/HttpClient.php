<?php

/*
 * This file is part of Envato Market PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\VirusTotal;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\VirusTotal\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://www.virustotal.com/vtapi/v2/',
        'headers' => [
           'User-Agent' => 'VirusTotal-PHP-Client/0.1.0',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
