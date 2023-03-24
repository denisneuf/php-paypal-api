<?php

namespace app\controller\paypal\sdk\tracking;

use app\controller\paypal\http\HttpRequest;

class TrackingBatchRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/shipping/trackers-batch?", "POST");
        //$this->path = str_replace("{captureId}", urlencode($captureId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }

}
