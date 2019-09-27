<?php
/**
 * Created by PhpStorm.
 * User: reese
 * Date: 9/27/19
 * Time: 6:33 PM
 */

namespace App\Services;

class Twitter
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}