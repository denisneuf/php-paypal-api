<?php

namespace app\controller\paypal\sdk\tracking;

use app\controller\paypal\http\HttpRequest;

class TrackingGetRequest extends HttpRequest
{
    function __construct($captureId)
    {
        parent::__construct("/v1/shipping/trackers/{captureId}?", "GET");

        $this->path = str_replace("{captureId}", urlencode($captureId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }


}
