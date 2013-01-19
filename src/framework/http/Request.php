<?php
namespace bankaccount\framework\http;

use bankaccount\framework\HashMap;

class Request extends HashMap
{

    protected $uri;

    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function getURI()
    {
        return $this->uri;
    }
}
